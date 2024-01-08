<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller ClearFlow
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

class ClearFlow extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('aquahub_model');
  }

  public function index()
  {
    $this->load->view("layout/header2");
    $this->load->view("layout/header3",);
    $this->load->view("user/ClearFlow");
    $this->load->view("layout/footer2");
  }
  public function registrasi()
  {

    $this->form_validation->set_rules('namalengkap', 'Namalengkap', 'required|trim');
    $this->form_validation->set_rules('status', 'Status', 'required|trim');
    $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
    $this->form_validation->set_rules('kualitas', 'Kualitas', 'required|trim');
    $this->form_validation->set_rules('sumber_air', 'Sumber_Air', 'required|trim');
    $this->form_validation->set_rules('jumlah_penduduk', 'Jumlah_Penduduk', 'required|trim');
    $this->form_validation->set_rules('jenis_sumur', 'Jenis_Sumur', 'required|trim');
    $this->form_validation->set_rules('ketersediaan_air', 'Ketersediaan_Air', 'required|trim');
    $this->form_validation->set_rules('konsumsi_air', 'Konsumsi_Air', 'required|trim');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
    $data = [
      'nama_lengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
      'status' => htmlspecialchars($this->input->post('status', true)),
      'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
      'kualitas_air' => htmlspecialchars($this->input->post('kualitas', true)),
      'sumber_air' => htmlspecialchars($this->input->post('sumber_air', true)),
      'jumlah_penduduk' => htmlspecialchars($this->input->post('jumlah_penduduk', true)),
      'jenis_sumur' => htmlspecialchars($this->input->post('jenis_sumur', true)),
      'ketersediaan_air' => htmlspecialchars($this->input->post('ketersediaan_air', true)),
      'konsumsi_air_per_kapita' => htmlspecialchars($this->input->post('konsumsi_air', true)),
      'keterangan_tambahan' => htmlspecialchars($this->input->post('keterangan', true)),
    ];

    $this->aquahub_model->insert($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil ditambahkan!</div>');
    redirect('AquaHub');
  }
}


/* End of file ClearFlow.php */
/* Location: ./application/controllers/ClearFlow.php */