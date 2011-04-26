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
	
	public $edit_key_word = 'shanti12';
	public $content;

	function Home(){
		parent::Controller();	
		
		
		$select_what =  '*';
		
		$where_array = array();
		
		$this->content = $this->my_database_model->select_from_table( $table = 'content', $select_what, $where_array );
		

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
	
//$this->load->view('home/index_view');
	
$edit = $this->uri->segment(3);
	
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/main_view');

	}else{
		
		
		
		
		
		
				$urlParts = explode('.', $_SERVER['HTTP_HOST']);
				$subdomain = $urlParts[0];		


				if( $subdomain == '127' || $subdomain == 'localhost' ||  $subdomain == '192'){
					
					
					
				}else{
					
					
						
								$this->load->library('curl');
								$geo_location =  $this->curl->simple_get('http://api.ipinfodb.com/v3/ip-city/?key=a644434b1b3c5ccc56d42931601df57c3ca668e40cb5bcc81be426e87ca10f51&ip=' . $_SERVER['REMOTE_ADDR']);
											
											
								
					
								$message = "Visitor coming from: \n\n". $geo_location .".  \n\nDate: ". date("F j, Y, g:i a");
						
								$this->load->library('email');
							
								$this->email->from('jamesming@jamesming.com', '');
								$this->email->to('richard@optiononecareathome.com');
								$this->email->subject('Visitor to OptionOneCareAtHome Website');
								$this->email->message($message);
								
								$this->email->send();
				}
		
		
		
		
		
		
		
		
		$data = array('content' => $this->content);
	
		$this->load->view('home/main_view', $data);
		
	};

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
	
	$this->load->view('iframe/wysiwyg_view', $data);
	
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
	
	$fields_array = array(
	                        $field => array(
	                                                 'type' => 'BLOB'
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
	
	$this->load->view('ajax/update_view', $data);	
	
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
	
	$edit = $this->uri->segment(3);
	
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/aboutus_view');

	}else{
	
		$this->load->view('home/aboutus_view');
		
	};

	
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
	
		
	$edit = $this->uri->segment(3);
	
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/services_view');

	}else{
	
		$this->load->view('home/services_view');
		
	};
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
	
	$edit = $this->uri->segment(3);
	
		
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/employment_view');

	}else{
	
		$this->load->view('home/employment_view');
		
	};
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
	
	$edit = $this->uri->segment(3);
	
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/faq_view');

	}else{
	
		$this->load->view('home/faq_view');
		
	};
	
}

/**
 * apply
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/apply
 * @access public
 **/ 

function apply(){
	
		$this->load->view('home/apply_view');

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
	
	$edit = $this->uri->segment(3);
	
	if( $edit == $this->edit_key_word){

		$this->load->view('edit/home/contactus_view');	

	}else{
	
		$this->load->view('home/contactus_view');	
		
	};
	
	
	
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


/**
 * upload PDFs
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/uploadpdf
 * @access public
 **/ 

function uploadpdf(){
	
	$this->load->view('home/uploadpdf_view');	
	
}


/**
 * upload PDFs success
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/uploadpdf_success
 * @access public
 **/ 

function uploadpdf_success(){
	

		$config['upload_path'] = './pdf';
		$config['allowed_types'] = 'pdf|zip|jpg|zip';
		$config['overwrite'] = 'TRUE';
		
		$this->load->library('upload', $config);
		
	
		if ( ! $this->upload->do_upload("Filedata")){
			
 			 		echo $this->upload->display_errors();
 			 		exit;	
			
		}	
		else
		{
				echo $_FILES["Filedata"]['name'] . " has been successfully uploaded."."<br><br>";
			
		}
	
	
	
	
	
}  
	
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */