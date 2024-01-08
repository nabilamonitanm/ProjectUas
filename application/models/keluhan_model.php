<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keluhan_model extends CI_Model 
{
    public $table = 'tb_keluhan';
    public $id = 'tb_keluhan.id';

    public function construct()
    {
        parent::__construct();
    }

    public function get_total_keluhan()
    {
        return $this->db->count_all($this->table);
    }
}

?>