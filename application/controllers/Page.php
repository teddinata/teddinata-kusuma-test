<?php
defined ('BASEPATH') OR exit();

class Page extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Test_model', 'm');
		$this->load->helper('form');
		$this->load->helper('url');

	}
	function index (){
		$data['title']="API Codeigniter";
		$this->load->view('home', $data);
	}

	function ambildata(){
		$this->m->ambildata('');
	}
}

?>
