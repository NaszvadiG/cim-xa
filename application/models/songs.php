<?php
class songs extends CI_Model  {

function __construct() {
	parent::__construct();
}

function i_getS() {
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	require 'savant/Savant3.php'; 
	$data = new Savant3();
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet(); 
	return($data);
}

function i_get() {
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	$data = new stdClass;
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet(); 
	return($data);
}     	     	

function ci_get() {
	$this->load->database();
	$where = 'time > 2 AND time < 5';
	$this->db->from('songs')
		->where($where)
		->order_by('artist');
	$data['songs'] = $this->db->get()->result();
	return($data);
}     

} // END Class

?>