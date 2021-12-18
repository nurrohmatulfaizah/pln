<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['users'] = $this->user_model->getPelanggan();
        $this->load->view('admin/user/list_user', $data);
    }

    public function profile()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        // $this->load->view('admin/_partials/navbar', $data);
        $this->load->view('admin/user/profile', $data);
    }

    // edit profile user admin
    public function edit_profile($id = null)
    {
        // memanggil session
        if (!isset($id)) redirect('admin/user/profile');

        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');

        if ($this->form_validation->run()) {
            // die('a');

            $post_data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),                
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
            );

            $file = $_FILES;
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"];

                $config['upload_path']   = './upload/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] 	 = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    // die('A');
                    $this->session->set_flashdata('gagal', 'Gagal upload foto user');
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    $uploaded = $this->upload->data();
                    $post_data['foto'] = $uploaded['file_name'];
                }
            } else {
                $this->input->post('old_image');
            }

            $this->user_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data admin berhasil diubah');

            redirect(base_url('admin/user/profile'));
        }

        $this->load->view('admin/user/edit_profile', $data);
    }

    public function detail($id = null)
    {
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('admin/user/detail_user', $data);
    }

    public function cetak($id = null)
    {
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('admin/user/cetak', $data);
    }

    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),        
            'level' => 2,
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'rayon' => $this->input->post('rayon'),
            'golongan' => $this->input->post('golongan'),
            'tarif' => $this->input->post('tarif'),
            'daya' => $this->input->post('daya'),
            'foto' => 'default.jpg',
        );

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('rayon', 'Rayon', 'required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'required');
        $this->form_validation->set_rules('daya', 'Daya', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');


        if ($this->form_validation->run()) {

            $file = $_FILES;
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"];

                $config['upload_path']   = './upload/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] 	 = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    $this->session->set_flashdata('gagal', 'Gagal upload foto user');
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    $uploaded = $this->upload->data();
                    $data['foto'] = $uploaded['file_name'];
                }
            }
            $this->user_model->save($data);

            $this->session->set_flashdata('success', 'Data Data Pelanggan berhasil ditambah');

            redirect(base_url('admin/user'));
        }

        $this->load->view('admin/user/new_user', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user/');

        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('rayon', 'Rayon', 'required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'required');
        $this->form_validation->set_rules('daya', 'Daya', 'required');

        if ($this->form_validation->run()) {
            $post_data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),                
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'rayon' => $this->input->post('rayon'),
                'golongan' => $this->input->post('golongan'),
                'tarif' => $this->input->post('tarif'),
                'daya' => $this->input->post('daya'),
            );

            $file = $_FILES;
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"];

                $config['upload_path']   = './upload/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] 	 = $filename;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    $this->session->set_flashdata('gagal', 'Gagal upload foto user');
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    $uploaded = $this->upload->data();
                    $post_data['foto'] = $uploaded['file_name'];
                }
            } else {
                $this->input->post('old_image');
            }

            $this->user_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data Data Pelanggan berhasil diubah');

            redirect(base_url('admin/user'));
        }

        $this->load->view('admin/user/edit_user', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        $this->user_model->delete($id);
        $this->session->set_flashdata('success', 'Pelanggan berhasil dihapus');
        redirect('admin/user/', 'refresh');
    }
}
