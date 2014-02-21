<?php
class songs extends CI_Model  {


function get() {
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	$this->data = new stdClass;
	$this->data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet(); 
	return($this->data);
}     	

function getS() {
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

} // END Class

?>