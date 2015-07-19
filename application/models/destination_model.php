<?php

 class Destination_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}

 	public function get_destinations($limit=false)
 	{
 		$query = $this->db->get('destinations');
 		return $query->result_array(); 
 	}

 }



?>