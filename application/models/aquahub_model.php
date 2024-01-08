<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aquahub_model extends CI_Model
{
    public $table = 'aquahub';
    public $id = 'id_aquahub';

    public function construct()
    {
        parent::__construct();
    }
    public function calculate_total_harga()
    {
        $result = $this->db->select_sum('total_harga')->get('aquahub')->row()->total_harga;
        return $result;
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_total_harga_per_bulan()
    {
        $query = $this->db->query("SELECT MONTH(tanggal_pembelian) AS bulan_num, MONTHNAME(tanggal_pembelian) AS bulan, SUM(total_harga) AS total_harga_bulan 
                                    FROM $this->table 
                                    GROUP BY bulan_num
                                    ORDER BY bulan_num");
        $result = $query->result();
        return $result;
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->Insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows(); {
        }
    }
    public function setujuAquaHub($id_aquahub)
    {
        $this->db->where('id_aquahub', $id_aquahub);
        $this->db->update('aquahub', array('request' => true));
    }
    
}
