<?php
defined ('BASEPATH') OR exit();

class Bouquet extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Bouquet_model', 'm');
		$this->load->helper('form');
		$this->load->helper('url');

	}
	function index (){
		$data['title']="API Codeigniter";
		$this->load->view('bouquet', $data);
	}

	function ambildata(){
		$this->m->ambildata('');
	}
}

?>
