<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Request
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

class Request extends CI_Controller
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
    $this->load->view("admin/Request", $data);
    $this->load->view("layout/footer_admin");
  }
  public function setuju($id_aquahub)
  {
    $this->aquahub_model->setujuAquaHub($id_aquahub);
    // $this->load->library('pdf');
    $data['aquahub'] = $this->aquahub_model->get();
    // $pdfData = $this->load->view('admin/pdf_template', $data, true);
    // $this->pdf->Output();
    $this->load->view("layout/header_admin");
    $this->load->view("admin/Confirmation", $data);
    $this->load->view("layout/footer_admin");
  }

  public function cetak($id_aquahub)
  {
    $this->load->library('PdfGenerator');

    $tagihan_data = $this->aquahub_model->getById($id_aquahub);
    $data['tagihan_data'] = $tagihan_data;

    $pdfData = $this->load->view('admin/pdf_template', $data, true);

    $this->pdfgenerator->generatePDF($pdfData, 'output.pdf');
  }
}


/* End of file Request.php */
/* Location: ./application/controllers/Request.php */