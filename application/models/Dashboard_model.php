<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function get_all_users()
    {
        return $this->db->get('users')->result();
    }

    public function get_all_biodata()
    {
        return $this->db->get('biodata')->result();
    }
}
