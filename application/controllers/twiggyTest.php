<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class twiggyTest extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('url');
	$this->load->helper('security');
}		

public function index() 
{
$this->load->spark('twiggy/0.8.5');
$this->twiggy->display();
}

}