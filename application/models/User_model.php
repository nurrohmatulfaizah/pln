<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public function cekLogin($username, $password)
    {
        $query = $this->db->get_where(['username' => $username, 'password' => $password]);
        return $query;
    }

    public function jumlah()
    {
        return $this->db->where('level', '2')->get($this->_table)->num_rows('*');
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function getPelanggan()
    {
        return $this->db->get_where($this->_table, ["level" => 2])->result();
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->where('id_user', $id)->update($this->_table, $data);
    }

    public function checkPasswordLama()
    {
        return $this->db->get_where('user', ["id_user" => $this->session->userdata('id_user')])->row('password');
    }

    public function checkEmailLama($email_inputan)
    {
        return $this->db->get_where('user', ['email' => $email_inputan]);
    }

    public function checkUsernameLama($username_inputan)
    {
        return $this->db->get_where('user', ['username' => $username_inputan]);
    }

    public function updateUsername($username_inputan, $id_userpelanggan)
    {
        return $this->db->get_where('user', ['username' => $username_inputan, 'id_user !=' => $id_userpelanggan]);
    }

    public function updateEmail($email_inputan, $id_userpelanggan)
    {
        return $this->db->get_where('user', ['email' => $email_inputan, 'id_user !=' => $id_userpelanggan]);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_user' => $id));
    }
}
