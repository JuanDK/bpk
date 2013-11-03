<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropzone extends CI_Controller {

	 
	public function index()
    {
	$this->load->view('dropzone-view');
	//echo $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    }

    function upload()
    {
    	//form file input name
    	$field_name = "file";
    	//new_filename
    	$new_filename = GUID();
    	
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/boligportalkiller/bpk/www/upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite']	= TRUE;
		$config['max_width']  = '2048';
		$config['remove_spaces'] = TRUE;
		$config['file_name'] = $new_filename;
		
		
		
		$this->load->library('upload', $config);
		$this->load->model('images_model');
		
    	if ( ! $this->upload->do_upload($field_name))
			{
				$error = array('error' => $this->upload->display_errors());
				
				// not ok
				$this->output->set_header("HTTP/1.0 503 Service Unavailable"); 
				$this->output->set_status_header('503');
				
				echo $this->upload->error_msg[0];
				
				return $error;
				//$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				//echo "ok?";
				//print_r ($data);
				
				//save data to db
					$form_data = array(
					       	'nameimage_guid' => $new_filename,
					       	'filename' => $data['upload_data']['file_name'],
					       	'path' => $data['upload_data']['file_path'],
					       	'description' => strstr($data['upload_data']['client_name'], '.',TRUE),
					       	'owner_id' => null,
					       	'property_id' => null,
					       	'mime_type' => $data['upload_data']['file_type'],
					       	'orig_name' => $data['upload_data']['client_name'],
					       	'file_size' => $data['upload_data']['file_size'],
					       	'width' => $data['upload_data']['image_width'],
					       	'height' => $data['upload_data']['image_height']
						);
				
					if ($this->images_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
					{
						//redirect('images/success');   // or whatever logic needs to occur
						return $form_data;
						//$this->load->view('upload_success', $data);
					}
					else
					{
						//echo 'An error occurred saving your information. Please try again later';
						// Or whatever error handling is necessary
						
						// not ok
						$this->output->set_header("HTTP/1.0 500 Internal Server Error"); 
						$this->output->set_status_header('500');
						
						$error = array('error' => 'DB error: saving image record' );
						echo $error['error'];
						return $error;
						}
						
						
				
			}
    }
    

}
 