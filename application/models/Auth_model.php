<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row();
        }
        return FALSE;
    }
}