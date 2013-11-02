<?php

class Userdata extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('userdata_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|max_length[35]');			
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');			
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[256]');			
		$this->form_validation->set_rules('birth_date', 'Birth Date', 'required');			
		$this->form_validation->set_rules('phone_country_code', 'Phone Country Code', 'required|max_length[4]');			
		$this->form_validation->set_rules('phone_number', 'Phone number', 'required|is_numeric|max_length[8]');			
		$this->form_validation->set_rules('phone_is_mobile', 'Mobile?', '');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			
			$data = array(
				'phone_country_code' => array(
	               '45' => '+45',
	               '46' => '+46',
	              
	          	)
          	);
          	
          	
			
			$this->load->view('userdata_view',$data);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name'),
					       	'email' => set_value('email'),
					       	'birth_date' => set_value('birth_date'),
					       	'phone_country_code' => set_value('phone_country_code'),
					       	'phone_number' => set_value('phone_number'),
					       	'phone_is_mobile' => set_value('phone_is_mobile')
						);
					
			// run insert model to write data to db
		
			if ($this->userdata_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('userdata/success');   // or whatever logic needs to occur
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