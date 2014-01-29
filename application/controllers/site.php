<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('security');
	require_once '/savant/Savant3.php'; // NOT REQUIRED IF ONLY USING CI VIEWS
	require_once '/idiorm/idiorm.php';
	require_once '/application/config/idiorm.php';
	require_once '/application/libraries/Zend/Mail/Message.php'; // EXAMPLE ZEND LIB 
}		
 
public function songs1() // CONTROLLER FUNCTION USING IDIORM WITH A SAVANT VIEW
{
	$data = new Savant3();
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet();
	$data->display('songs1.php');
}     	
 
public function songs2() // CONTROLLER FUNCTION USING IDIORM WITH A CODEIGNITER VIEW
{
	$data['songs'] = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet();
	$this->load->view('songs2.php',$data);
}     		
 
} // END CLASS

?>