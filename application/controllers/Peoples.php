<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peoples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peoples_model', 'peoples');
    }

    public function index()
    {
        if ($this->input->get('submit')) {
            $data['keyword'] = $this->input->get('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('name', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->datapeople($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('peoples/index', $data);
    }
}
