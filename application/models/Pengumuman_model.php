<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
    private $_table = "pengumuman";

    public function getAll()
    {
        $this->db->select('pengumuman.*, user.nama');
        $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        return $this->db->get($this->_table)->result();
    }

    public function getLimit($limit)
    {
        $this->db->select('pengumuman.*, user.nama');
        $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        $this->db->order_by('id_pengumuman', 'DESC');
        return $this->db->get($this->_table, $limit)->result();
    }

    public function getkategori()
    {
        $this->db->select('kategori');        
        $this->db->group_by('kategori');
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id])->row();
    }

    public function limit()
    {
        return $this->db->order_by('id_pengumuman', 'DESC')->get($this->_table)->limit();
    }

    public function getRecords()
    {
        return $this->db->order_by("id_pengumuman", "desc")->get($this->_table)->result();
    }

    public function jumlah()
    {
        return $this->db->get($this->_table)->num_rows('*');
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data)
    {
        $id = ['id_pengumuman' => $this->input->post('id')];

        $this->db->update($this->_table, $data, $id);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_pengumuman' => $id));
    }

    public function getListArtikel($limit, $start)
    {
        $query = $this->db->get('pengumuman', $limit, $start)->result();
        return $query;
    }
}
