<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tagihan_model extends CI_Model 
{
    public $table = 'tb_tagihan';
    public $id = 'tb_tagihan.id';

    public function construct()
    {
        parent::__construct();
    }

    public function get_total_tagihan()
    {
        return $this->db->count_all($this->table);
    }
}

?>