<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Contact
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

class Contact extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header2");
    $this->load->view("layout/header3");
    $this->load->view("user/ContactUs");
    $this->load->view("layout/footer2");
  }

  

}


/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */