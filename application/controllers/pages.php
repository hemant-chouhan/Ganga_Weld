<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url'); 		
	}

	function view($page ='home'){
		if (! file_exists('application/views/pages/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = $page;
		$this->load->view('templates/header' ,$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer' ,$data);
	}

}