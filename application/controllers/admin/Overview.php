<?php
class Overview extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
        $this->load->model('pengumuman_model');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['jumlah_pengumuman'] = $this->pengumuman_model->jumlah();
        $data['jumlah_pelanggan'] = $this->user_model->jumlah();
        $this->load->view("admin/overview", $data);
    }

    public function logout() {
		$this->session->unset_userdata(array('id_user','username','name', 'email','level'));

		$this->session->sess_destroy();

        redirect(base_url('auth'));
	}
}
