<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('security');
	require_once '/savant/Savant3.php';
	require_once '/idiorm/idiorm.php';
	require_once '/application/config/idiorm.php';
}		
 
public function songs()
{
	$query = new Savant3();
	$query->songs = ORM::for_table('songs') 
		->where_raw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->order_by_asc('artist') 
		->find_many();
	$query->display('songs.php');
}     		
 
} // END CLASS
?>