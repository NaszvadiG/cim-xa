<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('security');
	require_once '/savant/Savant3.php'; // NOT REQUIRED IF USING CI VIEWS
	require_once '/idiorm/idiorm.php';
	require_once '/application/config/idiorm.php';
}		
 
public function songs1() // CONTROLLER FUNCTION USING SAVANT VIEW
{
	$data = new Savant3();
	$data->songs = ORM::for_table('songs') 
		->where_raw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->order_by_asc('artist') 
		->find_many();
	$data->display('songs1.php');
}     	
 
public function songs2() // CONTROLLER FUNCTION USING CODEIGNITER VIEW
{
	$data['songs'] = ORM::for_table('songs') 
		->where_raw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->order_by_asc('artist') 
		->find_many();
	$this->load->view('songs2.php',$data);
}     		
 
} // END CLASS

?>