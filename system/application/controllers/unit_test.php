<?php
/**
 * This file is found in controller section of the codeigniter application directory
 *
 */


/**
 * Unit Testing. 
 *
 * @path /system/application/controllers/test.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0 Alpha
 * 
 */
class Unit_test extends Controller {

	function Unit_test(){
		parent::Controller();	
		

				
	}
	
	
	
	
/**
 * index page for unit_test controller
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/unit_test/index
 * @access public
 * @return    */ 

	function index(){

		$data['controller'] = 'unit_test';
		$this->load->view('unit_test/index_view', $data);
		
	}
	
	
/**
 * index inside div for unit_test controller
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/unit_test/index_view
 * @access public
 * @return    */
	
	
	function index_inside(){
		
//		$path_array = array('trunk'=>11, 'branch'=>32, 'twig'=>31, 'leaf'=>4 );
//		
//		echo $this->tools->set_directory_for_upload( $path_array) ."<br>";
//		
//		echo is_dir(   $this->tools->set_directory_for_upload( $path_array) )."<br>";
				
// 		$this->tools->recursiveDelete('uploads/11/32');

				
		$this->load->view('unit_test/index_inside_view');				
	
	}
	
	
	
	
/**
 * test_my_database_model_check_if_exist
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/test/test_my_database_model_check_if_exist
 * @link http://192.168.1.102/prospace/index.php/unit_test/test_my_database_model_check_if_exist
 * @access public
 * @return    */ 

	function test_my_database_model_check_if_exist(){
	
		$this->load->library('unit_test');
		$this->load->library('form_validation');
		
		$where_array = array('username' => 'jamesming');
		$this->unit->run(
			$this->my_database_model->check_if_exist($where_array, $table = 'users'), 
			'is_true', 
			'check_if_exist'
		);
	
		echo $this->unit->report();
		
	}
	
	
/**
 * test_my_database_model_select_from_table
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/test/test_my_database_model_select_from_table
 * @link http://192.168.1.102/prospace/index.php/unit_test/test_my_database_model_select_from_table
 * @access public
 * @return    */ 

	function test_my_database_model_select_from_table(){
	
		$this->load->library('unit_test');
		
		$where_array = array('username' => 'jamesming', 'email' => 'jamesming@gmail.com');
		
		$select_what = "id, firstname, lastname";
		
		$this->unit->run(
			$this->my_database_model->select_from_table( 
				$table = 'users', 
				$select_what, 
				$where_array ), 
			'is_array', 
			'select_from_table'
		);
	
		echo $this->unit->report();
		
	}
	
/**
 * test_tools_set_directory_for_upload 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/test/test_tools_set_directory_for_upload
 * @link http://192.168.1.102/prospace/index.php/unit_test/test_tools_set_directory_for_upload
 * @access public
 * @return  string  */ 

	function test_tools_set_directory_for_upload(){
	
		$this->load->library('unit_test');
		
		$path_array = array('trunk'=>11, 'branch'=>32, 'twig'=>31, 'leaf'=>4 );
		
		$this->unit->run(
			$this->tools->set_directory_for_upload( 
				$path_array
				), 
			'is_string', 
			'set_directory_for_upload'
		);
	
		echo $this->unit->report();
		
	}
	
}




/* End of file test.php */
/* Location: ./system/application/controllers/test.php */