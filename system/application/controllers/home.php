<?php
/**
 * This file is found in controller section of the codeigniter application directory
 *
 */


/**
 * Controller for default domain. 
 *
 * Viewable as:
 * {@link http://www.optionone.com}
 * {@link http://www.optionone.com/index.php/home}
 * {@link http://www.optionone.com/index.php/home/index}
 *
 * @autoloaded YES
 * @path /system/application/controllers/home.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 optionone LLC
 * @version 1.0 Alpha
 * @todo subcribe to email, unscribe to email, facebook connect
 * 
 */
class Home extends Controller {

	function Home(){
		parent::Controller();	

	}
	

/**
 * index page for home controller
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/index
 * @access public
 * @codeigniter_library form_validation
 **/ 

function index(){
	$data['controller'] = 'home';
	$this->load->view('home/main_view');
}
	

/**
 * index page inside div that refreshes for testing purposes
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/index_inside
 * @access public
 **/ 

function index_inside(){
	
	$this->load->view('home/index_inside_view');

}

/**
 * get
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::select_from_table()
 * @path /index.php/home/get
 * @access public
 **/ 

function get(){
	
	$table = $this->input->post('table');
	$field = $this->input->post('field');

	$select_what =  $field;
	
	$where_array = array('id' => 1 );

	$files = $this->my_database_model->select_from_table( 
	$table, $select_what, $where_array );
	
	echo nl2br($files[0]->$field);
	
}



/**
 * update
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::create_table_with_fields()
 * @uses My_database_model::add_column_to_table_if_exist()
 * @uses My_database_model::insert_table()
 * @uses My_database_model::get_primary_key()
 * @path /index.php/home/update
 * @access public
 **/ 

function update(){
	
	$table = $this->input->post('table');
	$field = $this->input->post('field');
	$text = $this->input->post('text');

	/**
	 * Set up the table and the fields
	 *
	 **/ 
	
	$fields_array = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE,
	                                                 'auto_increment' => TRUE
	                                      )
	                );
	                
	$primary_key = 'id';
	
	$this->my_database_model->create_table_with_fields($table, $primary_key, $fields_array);
	
	$fields_array = array(
	                        $field => array(
	                                                 'type' => 'BLOB'
	                                        ),
	                        'created' => array(
	                                                 'type' => 'DATETIME'
	                                        ),
	                        'updated' => array(
	                                                 'type' => 'DATETIME'
	                                        )                                       
	                                        
	                );
	
	$this->my_database_model->add_column_to_table_if_exist($table, $fields_array);
	
	
	/**
	 * Insert into table if not already exist otherwise do an update
	 *
	 **/ 

			
	if( $this->my_database_model->get_primary_key( $table, $where_field = 'id', 1) == 1){

				$set_what_array = array(
										$field => $text
										);			
								
				$this->my_database_model->update_table( $table, $primary_key = 1, $set_what_array );



	}else{

							$insert_what = array(
							$field 		 => $text
							);
							
							$primary_key = $this->my_database_model->insert_table(
															$table, 
															$insert_what
															);


	};


	
	$data = array('field' => $field, 'text' => $text);
	
	$this->load->view('home/update_view', $data);	
	
}



/**
 * about us
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/aboutus
 * @access public
 **/ 

function aboutus(){
	
	$this->load->view('home/aboutus_view');	
	
}

/**
 * services
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/services
 * @access public
 **/ 

function services(){
	
	$this->load->view('home/services_view');	
	
}


/**
 * Employment
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/employment
 * @access public
 **/ 

function employment(){
	
	$this->load->view('home/employment_view');	
	
}


/**
 * faq
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/faq
 * @access public
 **/ 

function faq(){
	
	$this->load->view('home/faq_view');	
	
}


/**
 * contact us
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/contactus
 * @access public
 **/ 

function contactus(){
	
	$this->load->view('home/contactus_view');	
	
}

  
	
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */