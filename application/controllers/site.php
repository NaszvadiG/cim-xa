<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
The Site class requires a database named "test" ontaining the table named "songs" as defined 
in DBsripts/test.sql 
This class also requires appropriate database connection configuration -- see README.md for 
more information.
*/


class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('url');
	$this->load->helper('security');
//	$this->load->library('excel'); // EXAMPLE PHPEXCEL LOAD 
//	$this->load->library('Zend'); // EXAMPLE ZEND LOAD 
	require 'savant/Savant3.php'; // REQUIRED ONLY IF USING SAVANT
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
//	require 'application/libraries/Zend/Mail/Message.php'; // ALT EXAMPLE ZEND LOAD 
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

public function songs3() // CRUD FUNCTION USING CODEIGNITER'S MYSQLI DATABASE INTERFACE
    {
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $this->load->view('songs3.php', $this->grocery_crud->set_table('songs')->render());  
}			
 
} // END CLASS

?>