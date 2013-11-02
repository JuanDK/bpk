<?php

class Images extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('images_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('nameimage_guid', 'nameimage_guid', 'max_length[32]');			
		$this->form_validation->set_rules('filename', 'filename', 'max_length[255]');			
		$this->form_validation->set_rules('path', 'path', 'max_length[255]');			
		$this->form_validation->set_rules('description', 'description', 'xss_clean');			
		$this->form_validation->set_rules('owner_id', 'owner_id', '');			
		$this->form_validation->set_rules('property_id', 'property_id', '');			
		$this->form_validation->set_rules('mime_type', 'mime_type', 'max_length[10]');			
		$this->form_validation->set_rules('orig_name', 'orig_name', 'max_length[255]');			
		$this->form_validation->set_rules('file_size', 'file_size', '');			
		$this->form_validation->set_rules('width', 'width', '');			
		$this->form_validation->set_rules('height', 'height', '');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('propertry_images_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'nameimage_guid' => set_value('nameimage_guid'),
					       	'filename' => set_value('filename'),
					       	'path' => set_value('path'),
					       	'description' => set_value('description'),
					       	'owner_id' => set_value('owner_id'),
					       	'property_id' => set_value('property_id'),
					       	'mime_type' => set_value('mime_type'),
					       	'orig_name' => set_value('orig_name'),
					       	'file_size' => set_value('file_size'),
					       	'width' => set_value('width'),
					       	'height' => set_value('height')
						);
					
			// run insert model to write data to db
		
			if ($this->images_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('images/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>