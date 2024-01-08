<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller History
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class History extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('aquahub_model');
  }

  public function index()
  {
    $data['aquahub'] = $this->aquahub_model->get();

    $this->load->view("layout/header_admin");
    $this->load->view("admin/History", $data);
    $this->load->view("layout/footer_admin");
  }
}


/* End of file History.php */
/* Location: ./application/controllers/History.php */