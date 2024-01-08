<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
   public $table = 'user';
   public $id = 'user.id';
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
   public function get_total_users()
    {
        return $this->db->count_all($this->table);
    }
   public function getBy()
   {
      $this->db->from($this->table);
      $this->db->where('email', $this->session->userdata('email'));
      $query = $this->db->get();
      return $query->row_array(); // Use row_array() instead of result_array() since it returns a single row
   }
   public function update($where, $data)
   {
      $this->db->update($this->table, $data, $where);
      return $this->db->affected_rows();
   }
   public function insert($data)
   {
      $this->db->insert($this->table, $data);
      return $this->db->insert_id();
   }
   public function delete($id)
   {
      $this->db->where($this->id, $id);
      $this->db->delete($this->table);
      return $this->db->affected_rows();
   }
   public function updateProfile($data)
   {
      $this->db->where('email', $this->session->userdata('email'));
      $this->db->update($this->table, $data);
   }
}
