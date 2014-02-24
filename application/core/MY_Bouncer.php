<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* SEE NOTES AND EXAMPLES AT THE END */

class MY_Bouncer extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('url');
	$this->load->helper('security');
    $this->load->library('session');
	if($this->session->userdata('login') === FALSE)
	{
		redirect('login', 'refresh');
	}	
}	

}

?>