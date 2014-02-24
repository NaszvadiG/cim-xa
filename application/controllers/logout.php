<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* SEE NOTES AND EXAMPLES AT THE END */

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
	$this->session->set_userdata('loginformsent', 0);			
	redirect('site', 'refresh');
}
} 
?>