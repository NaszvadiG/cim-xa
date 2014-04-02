<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends MY_Bouncer {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->theme = 'flexigrid';
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->set_theme($this->theme)->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('offices');
			$crud->set_theme($this->theme);
			$crud->unset_export();
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('employees');
			$crud->set_theme($this->theme);
			$crud->unset_export();
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');
			$crud->required_fields('lastName');
			$crud->set_field_upload('file_url','assets/uploads/files');
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function customers_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('customers');
			$crud->set_theme($this->theme);
			$crud->unset_export();
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','Sales Employee')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			$crud->callback_edit_field('customerName',array($this,'edit_field_callback_cust1'));
			$output = $crud->render();
			$this->_example_output($output);
	}
	function edit_field_callback_cust1($value, $primary_key)
	{
		return '<input type="text" maxlength="50" value="'.$value.'" name="customerName"> 
					<a href="'.site_url().'examples/orders_management/1/'.$primary_key.'/1">View Customer Orders</a>'; 
	}
	
	public function orders_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_relation('customerNumber','customers','customerName');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_theme($this->theme);
			$crud->unset_export();
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();
			if ($this->uri->segment(5) == 1) { $crud->where('orders.customerNumber', $this->uri->segment(4)); }
			$output = $crud->render();
			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('products');
			$crud->set_theme($this->theme);
			$crud->unset_export();
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$output = $crud->render();
			$this->_example_output($output);
	}


	public function film_management()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('film');
		$crud->set_theme($this->theme);
		$crud->unset_export();
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');
		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');
			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();
		$output2 = $this->employees_management2();
		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>Offices</h1>".$output1->output." <br /><h1>Employees</h1>".$output2->output." <br /><h1>Customers</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_theme($this->theme);
		$crud->unset_export();
		$crud->set_subject('Office');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
		$crud->unset_add();
		$crud->unset_read();
		$crud->unset_edit();
		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('employees');
		$crud->set_theme($this->theme);
		$crud->unset_export();
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');
		$crud->required_fields('lastName');
		$crud->set_field_upload('file_url','assets/uploads/files');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
		$crud->unset_add();
		$crud->unset_read();
		$crud->unset_edit();
		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{

		$crud = new grocery_CRUD();
		$crud->set_table('customers');
		$crud->set_theme($this->theme);
		$crud->unset_export();
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
		$crud->unset_add();
		$crud->unset_read();
		$crud->unset_edit();
		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

}