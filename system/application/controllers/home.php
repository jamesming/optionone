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
 * iframe of WYSIWIG
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/wysiwig
 * @access public
 **/ 

function wysiwyg(){
	
	$table = $this->uri->segment(3);
	$field = $this->uri->segment(4);

	$data = array('table' => $table, 'field' =>  $field);
	
	$this->load->view('home/wysiwyg_view', $data);
	
}

/**
 * iframe of moreabout
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/moreabout
 * @access public
 **/ 

function moreabout(){
	
	$table = $this->uri->segment(3);
	$field = $this->uri->segment(4);

	$data = array('table' => $table, 'field' =>  $field);
	
	$this->load->view('home/moreabout_view', $data);
	
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


	if( $this->db->field_exists($field, $table ) == TRUE){
	
		$select_what =  $field;
		
		$where_array = array('id' => 1 );
	
		$files = $this->my_database_model->select_from_table( 
		$table, $select_what, $where_array );
		
		if( $files[0]->$field != ''){
				echo $files[0]->$field;			
		}else{
				echo "Please enter some text";
		};
		
	}
	else{
		echo "Please enter some text";	
	}
	
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
 * create_table_for_form
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::create_table_with_fields()
 * @uses My_database_model::add_column_to_table_if_exist()
 * @path /index.php/home/create_table_for_form
 * @access public
 **/ 

function create_table_for_form(){
	
	$table = $this->input->post('table');
	$field = $this->input->post('field');
	$type_of_field = $this->input->post('type_of_field');
	$constraint = $this->input->post('constraint');


	/**
	 * Set up the table and the fields
	 *
	 **/ 
	
	$fields_array = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'unsigned' => TRUE,
	                                                 'auto_increment' => TRUE
	                                      ),
	                        'created' => array(
	                                                 'type' => 'DATETIME'
	                                        ),
	                        'updated' => array(
	                                                 'type' => 'DATETIME'
	                                        )  
	                );
	                
	$primary_key = 'id';
	
	$this->my_database_model->create_table_with_fields($table, $primary_key, $fields_array);
	
	
	if( $type_of_field == 'BLOB'){
			$fields_array = array(
			                        $field => array(
	                                                 'type' => 'BLOB'
	                                        )                                     
			                                        
			                );	
	
	}else{
			$fields_array = array(
			                        $field => array(
			                                                 'type' => $type_of_field,
		                                                 	 'constraint' => $constraint
			                                        )                                     
			                                        
			                );		
	};

	
	$this->my_database_model->add_column_to_table_if_exist($table, $fields_array);
	
	
	
	$data = array('field' => $field, 'text' => $text,  'type' => $type);
	
	// $this->load->view('home/create_table_for_form_view', $data);	
	
}


/**
 * insert_into_table_for_form
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @uses My_database_model::insert_table()
 * @path /index.php/home/insert_into_table_for_form
 * @access public
 **/ 

function insert_into_table_for_form(){
	
	$table = $this->input->post('table');
	
	$fields = explode('&', $this->input->post('fields'));
	
	$i = 0;
	
	while($i < count($fields)){
		
		$field = explode('=', $fields[$i]);
		$insert_what[ htmlspecialchars( urldecode( $field[0] )) ]  =  htmlspecialchars( urldecode( $field[1] ));
		$i++;
	}
					
	$primary_key = $this->my_database_model->insert_table(
									$table, 
									$insert_what
									);

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


/**
 * applicants_form_in_iframe
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/applicants_form_in_iframe
 * @access public
 **/ 

function applicants_form_in_iframe(){
	
	$this->load->view('iframe/applicants_form_in_iframe_view');	
	
}
  
	
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */