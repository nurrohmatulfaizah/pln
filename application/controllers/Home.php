<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('pengumuman_model');
    }

    public function index()
    {
        $data['pengumuman'] = $this->pengumuman_model->getRecords();
        $this->load->view('index', $data);
    }

}
