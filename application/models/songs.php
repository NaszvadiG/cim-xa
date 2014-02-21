<?php
class songs extends CI_Model  {

function __construct() {
	parent::__construct();
}

function get() {
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	$data = new stdClass;
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet(); 
	return($data);
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