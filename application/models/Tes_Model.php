<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_Model extends CI_Model
{
    public $table = 'tes';
    public $id = 'tes.id_tes';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get2($id)
    {
        $this->db->from($this->table);
        $this->db->where('username', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getTesId($id)
    {
        $this->db->from($this->table);
        $this->db->where('username', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_tes', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, array('username' => $where));
        // $this->db->update($this->table, $data, );
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert('tes', $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function deleteBy($id)
    {
        $this->db->where('username', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function jml_lulus_tes()
    {
        $this->db->select('*');
        $this->db->from('tes');
        $this->db->where('status', 'lulus');
        return $this->db->get()->num_rows();

    }
}