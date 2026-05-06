<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Biodata extends CI_Model
{
    private $table = 'biodata';
    private $pk = 'id';

    public function GetALL(){
        return $this->db->get($this->table);
    }

}