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
		if ($this->session->userdata('loginformsent') == 1)
		{
			$this->session->set_userdata('loginformsent', 0);			
			$user = $this->input->post('user', TRUE);
			$pass = $this->input->post('pass', TRUE);
		//ADD YOUR LOGIN AUTH LOOKUP HERE OTHERWISE WE ACCEPT ANY USERNAME&PASSWORD
			$this->session->set_userdata('login', 1);
			redirect('site', 'refresh'); 
		}
		$this->session->set_userdata('login', 0);
		$this->session->set_userdata('loginformsent', 1);			
		$this->load->view('login');			
		
	}
}
?>