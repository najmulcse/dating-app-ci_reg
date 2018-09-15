<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class HomeModel extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }


        // insert form data
        public function insert_data($post_data)
        {
        	$query = $this->db->insert('users',$post_data);
        }



}


?>