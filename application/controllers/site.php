<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set('display_errors', '1');
/*
The Site class requires a database named "test" ontaining the tables as defined 
in DBsripts/test.sql 
This class also requires appropriate database connection configuration -- see README.md for 
more information.
CSRF protection may be turned off for a particular function with:
$CFG =& load_class('Config', 'core');
$CFG->set_item('csrf_protection', FALSE);
*/


class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('url');
	$this->load->helper('security');
//	$this->load->library('excel'); // EXAMPLE PHPEXCEL LOAD 
//	$this->load->library('Zend'); // EXAMPLE ZEND LOADER INIT 
//	require 'application/libraries/Zend/Mail/Message.php'; // ALT EXAMPLE FOR ZEND LOAD 
//	include 'chromephp/ChromePhp.php'; // REQUIRED ONLY FOR TESTING WITH CHROME CONSOLE
}		

public function index() // LINKS
{
	$linkURL = ''; // '/cim/site/';
	echo 'LINKS <br /><a href="'.$linkURL.'songs1">songs1--Idiorm with a trivial Savant view</a><br />
						<a href="'.$linkURL.'songs2">songs2--Idiorm with an equivalent CI view</a><br />	
						<a href="'.$linkURL.'songs3">songs3--Gorcery CRUD</a><br />
						<a href="'.$linkURL.'multigrids">company--Gorcery CRUD Multiple</a>';
}
 
public function songs1() // CONTROLLER FUNCTION USING IDIORM FOR A SAVANT VIEW
{
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
	require 'savant/Savant3.php'; 
	$data = new Savant3();
	$data->songs = ORM::forTable('songs') 
		->whereRaw('(`time` > ? AND `time` < ?)', array(2, 5)) 
		->orderByAsc('artist') 
		->findResultSet();
	$data->display('songs1.php'); // SAVANT VIEW
}     	
 
public function songs2() // CONTROLLER FUNCTION USING IDIORM FOR A CODEIGNITER VIEW
{
	require 'idiorm/idiorm.php';
	require 'application/config/idiorm.php';
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
 
//====MULTIPLE CRUDS: 

public function _the_output($output = null)
{
	$this->load->view('demo.php',$output);
}

public function multigrids()
{
	$this->config->load('grocery_crud');
	$this->config->set_item('grocery_crud_dialog_forms',true);
	$this->config->set_item('grocery_crud_default_per_page',10);
	$output1 = $this->offices_management2();
	$output2 = $this->employees_management2();
	$js_files = $output1->js_files + $output2->js_files;
	$css_files = $output1->css_files + $output2->css_files;
	$output = 	'<h3 style="margin-bottom:10px;">Offices</h3>'.$output1->output.
				'<h3 style="margin-bottom:10px;">Employees</h3>'.$output2->output;
	$this->_the_output((object)array(
			'js_files' => $js_files,
			'css_files' => $css_files,
			'output' => $output
	));
}

public function offices_management2()
{
	$this->load->database();
	$this->load->library('grocery_CRUD');
	$crud = new grocery_CRUD();
	$crud->set_table('offices')
		->unset_print() ->unset_export() ->unset_delete()
		->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
	if($crud->getState() != 'list') { $this->_the_output($crud->render()); } else { return $crud->render(); }
}

public function employees_management2()
{
	$this->load->database();
	$this->load->library('grocery_CRUD');
	$crud = new grocery_CRUD();
	$crud->set_table('employees')
		->unset_print() ->unset_export() ->unset_delete()
		->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
	if($crud->getState() != 'list') { $this->_the_output($crud->render()); } else { return $crud->render(); }
}

} // END CLASS

?>