<?php
defined ('BASEPATH') OR exit();

class Bouquet extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Array_model', 'm');
		$this->load->helper('form');
		$this->load->helper('url');

	}
	function index (){
		$data['title']="Menampilkan data array";
		$this->load->view('array', $data);
	}

}

?>
