<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cekLogin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(['username' => $username, 'password' => $password]);
        return $this->db->get();
    }
}
