<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['title'] = "Admin";
        $this->load->view('login', $data);
    }

    public function user_login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->login_model->cekLogin($username, $password)->row();

            if (isset($result)) {
                $session_login = array(
                    "id_user"	=> $result->id_user,
                    "username"	=> $result->username,
                    "nama"		=> $result->nama,
                    "email"		=> $result->email,
                    "level"     => $result->level,
                );

                $this->session->set_userdata($session_login);

                // admin
                if ($this->session->userdata('level') == '1') {
                    $this->session->set_flashdata('success', 'Selamat Datang di Halaman Administrator');
                    redirect(base_url('admin/overview'),'refresh');
                }
            }
            else {
                $this->session->set_flashdata('pesan', 'Username dan password tidak valid');
                $this->load->view('login');
            }
        } else {
            $this->index();
        }
    }

    public function logout() {
        $this->session->unset_userdata(array('id_user','username','name', 'email'));

        $this->session->sess_destroy();

        redirect(base_url());
    }
}
