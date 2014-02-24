<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* SEE NOTES AND EXAMPLES AT THE END */

class Site extends CI_Controller {
	 
function __construct()
{
	parent::__construct();	
	$this->load->helper('url');
	$this->load->helper('security');
}	

public function index() // LINKS
{
	$data['linkURL'] = ""; 
	$this->load->view('links', $data);
}
 
public function songs1() // CONTROLLER FUNCTION USING IDIORM + SAVANT VIEW
{
	$this->load->model('songs');
	$this->songs->i_getS()->display('songs1.php'); // SAVANT VIEW
}     	

public function songs2() // CONTROLLER FUNCTION USING IDIORM + CODEIGNITER VIEW
{
	$this->load->model('songs');
	$this->load->view('songs2', $this->songs->i_get());
}

public function songs2c() // CONTROLLER FUNCTION USING IDIORM + CODEIGNITER VIEW
{
	$this->load->model('songs');
	$data['songs'] = $this->songs->ci_get(); 
	$this->load->view('songs2', $data);
}

public function songs3() // CRUD FUNCTION USING CODEIGNITER'S MYSQLI DATABASE INTERFACE
{
	$this->load->database();
	$this->load->library('grocery_CRUD');
	$crud = new grocery_CRUD();
	$crud->set_theme('flexigrid')->set_table('songs')->unset_export()->unset_print();
	$this->load->view('songs3.php', $crud->render());  
}			
 
} // END Site Class

/* NOTES
The Site class requires a database named "test" ontaining the tables as defined 
in DBsripts/test.sql 
This class also requires appropriate database connection configuration -- see README.md for 
more information.
CSRF protection may be turned off for a particular function with:
$CFG =& load_class('Config', 'core');
$CFG->set_item('csrf_protection', FALSE);
In case of trouble see the errors: ini_set('display_errors',"On");
*/

/* EXAMPLES
	$this->load->library('excel'); // EXAMPLE PHPEXCEL LOAD 
	$this->load->library('Zend'); // EXAMPLE ZEND LOADER INIT 
	include 'chromephp/ChromePhp.php'; // TO TEST WITH CHROME CONSOLE
*/
?>