<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinations extends CI_Controller {


 	function __construct()
 	{
 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->model('destination_model');
 	}

	 function index(){	
		$data['results'] = $this->destination_model->get_destinations();
		$data['size'] = 3;
		$this->load->view('templates/header' ,$data);
		$this->load->view('destinations' ,$data);
		$this->load->view('templates/footer' ,$data);
	}

	function json(){
		$data['results'] = $this->destination_model->get_destinations();
		$this->load->view('utils/JSON_collection' ,$data);
	}

	function xml(){
		$data['results'] = $this->destination_model->get_destinations();
		$this->load->view('utils/XML_collection' ,$data);
	}
}
