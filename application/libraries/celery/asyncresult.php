<?php 

/*
 * Asynchronous result of Celery task
* @package celery-php
*/
class AsyncResult
{
	private $task_id; // string, queue name
	private $connection; // AMQPConnection instance
	private $connection_details; // array of strings required to connect
	private $complete_result; // AMQPEnvelope instance
	private $body; // decoded array with message body (whatever Celery task returned)

	/**
	 * Don't instantiate AsyncResult yourself, used internally only
	 * @param string $id Task ID in Celery
	 * @param array $connection_details used to initialize AMQPConnection, keys are the same as args to Celery::__construct
	 * @param string task_name
	 * @param array task_args
	 */
	function __construct($params)
	{
		$id = $params['id'];
		$connection_details = $params['connection_details'];
		$task_name = $params['task_name'];
		$task_args = $params['task_args'];
		$this->task_id = $id;
		$this->connection = Celery::InitializeAMQPConnection($connection_details);
		$this->connection_details = $connection_details;
		$this->task_name = $task_name;
		$this->task_args = $task_args;
	}

	function __wakeup()
	{
		if($this->connection_details)
		{
			$this->connection = Celery::InitializeAMQPConnection($this->connection_details);
		}
	}

	/**
	 * Connect to queue, see if there's a result waiting for us
	 * Private - to be used internally
	 */
	private function getCompleteResult()
	{
		if($this->complete_result)
		{
			return $this->complete_result;
		}

		$this->connection->connect();
		$ch = new AMQPChannel($this->connection);
		$q = new AMQPQueue($ch);
		$q->setName($this->task_id);
		$q->setFlags(AMQP_AUTODELETE);
		#		$q->setArgument('x-expires', 86400000);
		$q->declareQueue();
		try
		{
			$q->bind('celeryresults', $this->task_id);
		}
		catch(AMQPQueueException $e)
		{
			$q->delete();
			$this->connection->disconnect();
			return false;
		}

		$message = $q->get(AMQP_AUTOACK);

		if(!$message)
		{
			$q->delete();
			$this->connection->disconnect();
			return false;
		}

		$this->complete_result = $message;

		if($message->getContentType() != 'application/json')
		{
			$q->delete();
			$this->connection->disconnect();

			throw new CeleryException('Response was not encoded using JSON - found ' .
					$message->getContentType().
					' - check your CELERY_RESULT_SERIALIZER setting!');
		}

		$this->body = json_decode($message->getBody());

		$q->delete();
		$this->connection->disconnect();

		return false;
	}

	/**
	 * Get the Task Id
	 * @return string
	 */
	function getId()
	{
		return $this->task_id;
	}

	/**
	 * Check if a task result is ready
	 * @return bool
	 */
	function isReady()
	{
		return ($this->getCompleteResult() !== false);
	}

	/**
	 * Return task status (needs to be called after isReady() returned true)
	 * @return string 'SUCCESS', 'FAILURE' etc - see Celery source
	 */
	function getStatus()
	{
		if(!$this->body)
		{
			throw new CeleryException('Called getStatus before task was ready');
		}
		return $this->body->status;
	}

	/**
	 * Check if task execution has been successful or resulted in an error
	 * @return bool
	 */
	function isSuccess()
	{
		return($this->getStatus() == 'SUCCESS');
	}

	/**
	 * If task execution wasn't successful, return a Python traceback
	 * @return string
	 */
	function getTraceback()
	{
		if(!$this->body)
		{
			throw new CeleryException('Called getTraceback before task was ready');
		}
		return $this->body->traceback;
	}

	/**
	 * Return a result of successful execution.
	 * In case of failure, this returns an exception object
	 * @return mixed Whatever the task returned
	 */
	function getResult()
	{
		if(!$this->body)
		{
			throw new CeleryException('Called getResult before task was ready');
		}

		return $this->body->result;
	}

	/****************************************************************************
	 * Python API emulation                                                     *
	* http://ask.github.com/celery/reference/celery.result.html                *
	****************************************************************************/

	/**
	 * Returns TRUE if the task failed
	 */
	function failed()
	{
		return $this->isReady() && !$this->isSuccess();
	}

	/**
	 * Forget about (and possibly remove the result of) this task
	 * Currently does nothing in PHP client
	 */
	function forget()
	{
	}

	/**
	 * Wait until task is ready, and return its result.
	 * @param float $timeout How long to wait, in seconds, before the operation times out
	 * @param bool $propagate (TODO - not working) Re-raise exception if the task failed.
	 * @param float $interval Time to wait (in seconds) before retrying to retrieve the result
	 * @throws CeleryTimeoutException on timeout
	 * @return mixed result on both success and failure
	 */
	function get($timeout=10, $propagate=TRUE, $interval=0.5)
	{
		$interval_us = (int)($interval * 1000000);
		$iteration_limit = (int)($timeout / $interval);

		for($i = 0; $i < $iteration_limit; $i++)
		{
		if($this->isReady())
			{
			break;
		}

		usleep($interval_us);
			}

				if(!$this->isReady())
				{
				throw new CeleryTimeoutException(sprintf('AMQP task %s(%s) did not return after 10 seconds', $this->task_name, json_encode($this->task_args)), 4);
				}

				return $this->getResult();
				}

				/**
				* Implementation of Python's properties: result, state/status
				*/
				public function __get($property)
				{
				/**
				* When the task has been executed, this contains the return value.
				* If the task raised an exception, this will be the exception instance.
					*/
					if($property == 'result')
					{
					if($this->isReady())
					{
					return $this->getResult();
				}
				else
					{
					return NULL;
					}
					}
					/**
					* state: The tasks current state.
						*
						* Possible values includes:
						*
						* PENDING
						* The task is waiting for execution.
						*
						* STARTED
						* The task has been started.
						*
						* RETRY
						* The task is to be retried, possibly because of failure.
						*
						* FAILURE
						* The task raised an exception, or has exceeded the retry limit. The result attribute then contains the exception raised by the task.
						*
						* SUCCESS
						* The task executed successfully. The result attribute then contains the tasks return value.
						*
						* status: Deprecated alias of state.
						*/
						elseif($property == 'state' || $property == 'status')
						{
							if($this->isReady())
							{
								return $this->getStatus();
							}
							else
							{
								return 'PENDING';
							}
						}

						return $this->$property;
				}

				/**
				 * Returns True if the task has been executed.
				 * If the task is still running, pending, or is waiting for retry then False is returned.
				 */
				function ready()
				{
					return $this->isReady();
				}

				/**
				 * Send revoke signal to all workers
				 * Does nothing in PHP client
				 */
				function revoke()
				{
				}

				/**
				 * Returns True if the task executed successfully.
				 */
				function successful()
				{
					return $this->isSuccess();
				}

				/**
				 * Deprecated alias to get()
				 */
				function wait($timeout=10, $propagate=TRUE, $interval=0.5)
				{
					return $this->get($timeout, $propagate, $interval);
				}
}

