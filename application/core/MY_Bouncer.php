<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Bouncer extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	
    $this->load->library('session');
	$this->load->helper('security');
	$this->load->helper('url');
	if($this->session->userdata('login') != 1)
	{
		$this->session->set_userdata('login', 0);
		redirect('login', 'refresh');
	}	
}	

}

?>