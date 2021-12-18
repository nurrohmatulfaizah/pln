<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pengumuman extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_model');
    }

    public function index()
    {
        $data['pengumuman'] = $this->pengumuman_model->getAll();
        $this->load->view('admin/pengumuman/list_pengumuman', $data);
    }

    public function detail($id = null)
    {
        $data['pengumuman'] = $this->pengumuman_model->getById($id);        
        if (!$data['pengumuman']) show_404();

        $this->load->view('admin/pengumuman/detail_pengumuman', $data);
    }

    public function add()
    {
        $user_session = $this->session->userdata('id_user');

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'penyebab' => $this->input->post('penyebab'),
            'wilayah' => $this->input->post('wilayah'),
            'id_user' => $user_session,
        );

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('penyebab','required');

        if ($this->form_validation->run()) {
            $this->pengumuman_model->save($data);

            $this->session->set_flashdata('success', 'Data Pemadaman Pengumuman berhasil disimpan');

            redirect(base_url('admin/pengumuman'));
        }

        $this->load->view('admin/pengumuman/new_pengumuman', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pengumuman/');

        $data['pengumuman'] = $this->pengumuman_model->getById($id);
        if (!$data['pengumuman']) show_404();

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('penyebab','required');

        if ($this->form_validation->run()) {
            $post_data = array(
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'penyebab' => $this->input->post('penyebab'),
                'wilayah' => $this->input->post('wilayah'),
            );

            $this->pengumuman_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Pengumuman Pengumuman berhasil diubah');

            redirect(base_url('admin/pengumuman'));
        }

        $this->load->view('admin/pengumuman/edit_pengumuman', $data);
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        $this->pengumuman_model->delete($id);
        $this->session->set_flashdata('success', 'Pengumuman berhasil dihapus');
        redirect('admin/pengumuman/index', 'refresh');
    }

}
