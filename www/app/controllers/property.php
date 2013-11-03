<?php

class Property extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('property_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('owner_id', 'owner_id', '');			
		$this->form_validation->set_rules('type_code', 'type_code', '');			
		$this->form_validation->set_rules('address_streename', 'address_streename', 'required|xss_clean|max_length[40]');			
		$this->form_validation->set_rules('address_streetnumber', 'address_streetnumber', 'required|is_numeric');			
		$this->form_validation->set_rules('address_suppl', 'address_suppl', 'max_length[5]');			
		$this->form_validation->set_rules('post_code', 'post_code', 'required|max_length[8]');			
		$this->form_validation->set_rules('city', 'city', 'required|max_length[40]');			
		$this->form_validation->set_rules('country_code', 'country_code', 'required|max_length[2]');			
		$this->form_validation->set_rules('size_mtq', 'size_mtq', 'required');			
		$this->form_validation->set_rules('rooms', 'rooms', 'required');			
		$this->form_validation->set_rules('rent', 'rent', 'required|is_numeric');			
		$this->form_validation->set_rules('currency', 'currency', 'required|max_length[3]');			
		$this->form_validation->set_rules('rent_add', 'rent_add', '');			
		$this->form_validation->set_rules('deposit', 'deposit', '');			
		$this->form_validation->set_rules('date_available', 'date_available', 'required');			
		$this->form_validation->set_rules('date_created', 'date_created', '');			
		$this->form_validation->set_rules('date_modified', 'date_modified', '');			
		$this->form_validation->set_rules('status_code', 'status_code', '');			
		$this->form_validation->set_rules('furnished_code', 'furnished_code', '');			
		$this->form_validation->set_rules('pets_ok', 'pets_ok', '');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('property_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'owner_id' => set_value('owner_id'),
					       	'type_code' => set_value('type_code'),
					       	'address_streename' => set_value('address_streename'),
					       	'address_streetnumber' => set_value('address_streetnumber'),
					       	'address_suppl' => set_value('address_suppl'),
					       	'post_code' => set_value('post_code'),
					       	'city' => set_value('city'),
					       	'country_code' => set_value('country_code'),
					       	'size_mtq' => set_value('size_mtq'),
					       	'rooms' => set_value('rooms'),
					       	'rent' => set_value('rent'),
					       	'currency' => set_value('currency'),
					       	'rent_add' => set_value('rent_add'),
					       	'deposit' => set_value('deposit'),
					       	'date_available' => set_value('date_available'),
					       	'date_created' => set_value('date_created'),
					       	'date_modified' => set_value('date_modified'),
					       	'status_code' => set_value('status_code'),
					       	'furnished_code' => set_value('furnished_code'),
					       	'pets_ok' => set_value('pets_ok')
						);
					
			// run insert model to write data to db
		
			if ($this->property_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('property/success');   // or whatever logic needs to occur
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