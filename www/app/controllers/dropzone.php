<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropzone extends CI_Controller {

	 
	public function index()
    {
	$this->load->view('dropzone-view');
	echo $_SERVER['DOCUMENT_ROOT'];
    }

    function upload()
    {
	echo "hello";
	if (!empty($_FILES))
	{

	    echo $tempFile = $_FILES['file']['tmp_name'];

	    echo $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

	    echo  $targetFile = $targetPath . $_FILES['file']['name'];

	    echo move_uploaded_file($tempFile, $targetFile);
	}
	return false;
    }
    

}
 