<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('security');
	require 'savant/Savant3.php'; // NOT REQUIRED IF ONLY USING CI VIEWS
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	require 'application/libraries/Zend/Mail/Message.php'; // EXAMPLE ZEND LOAD 
}		
 
public function songs1() // CONTROLLER FUNCTION USING IDIORM FOR A SAVANT VIEW
{
	$data = new Savant3();
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet();
	$data->display('songs1.php'); // SAVANT VIEW
}     	
 
public function songs2() // CONTROLLER FUNCTION USING IDIORM FOR A CODEIGNITER VIEW
{
	$data['songs'] = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet();
	$this->load->view('songs2.php', $data); // CODEIGNITER VIEW
}     		
 
} // END CLASS

?>