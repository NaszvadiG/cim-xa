<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	 
	function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->helper('url');
	}	

	public function index() 
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$user = $this->input->post('user', TRUE);
			$pass = $this->input->post('pass', TRUE);
		//ADD YOUR LOGIN AUTH MODEL HERE OTHERWISE WE ACCEPT ANY USERNAME&PASSWORD
			$this->session->set_userdata('login', 1);
			redirect('site', 'refresh'); 
		}
		$this->session->set_userdata('login', 0);
		$this->load->view('login');			
		
	}
}
?>
