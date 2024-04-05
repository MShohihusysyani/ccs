<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT *
                    FROM user
                    ";
        return $this->db->query($query)->result_array();
    }
}