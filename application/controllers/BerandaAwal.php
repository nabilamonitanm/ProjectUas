<?php
defined('BASEPATH') or exit('No direct script access allowed');



class BerandaAwal extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/headerawal");
    $this->load->view("user/berandaawal");
    $this->load->view("layout/footer2");
  }
}


/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */