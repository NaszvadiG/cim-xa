<?php
class jobq extends CI_Controller
{
	function jobq()
	{
		$this->load->library('celeryclientlib');
	}

	function addTwoNumbers()
	{
		$a = 2;
		$b = 3;
		$isBrokerRunning = $this->celeryclientlib->getBrokerStatus();
		if ($isBrokerRunning) {	
			$payloadArray = array($a, $b);
			echo "adding numbers with celery";
			$result = $this->ci->celery->PostTask('tasks.add', array(2, 3));
		} else {
			echo 'Broker is not running';
		}
	}
}


