<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peoples_model extends CI_model
{
    public function datapeople($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
        }
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function jmldatapeople()
    {
        return $this->db->get('peoples')->num_rows();
    }
}
