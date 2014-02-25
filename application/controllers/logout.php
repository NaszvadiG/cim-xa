<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->library('session');
	$this->load->helper('security');
	$this->load->helper('url');
}	

public function index() // LINKS
{
	$this->session->set_userdata('login', 0);
	redirect('site', 'refresh');
}
} 
?>