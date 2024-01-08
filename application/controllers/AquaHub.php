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

class AquaHub extends CI_Controller
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
    $this->load->view("user/AquaHub");
    $this->load->view("layout/footer2");
  }
  public function view()
  {
    $this->load->view("layout/headerawal");
    $this->load->view("layout/header3",);
    $this->load->view("user/AquaHubAwal");
    $this->load->view("layout/footer2");
  }

  public function pembelian()
  {
    $data['aquahub'] = $this->aquahub_model->get();
    $this->form_validation->set_rules('namalengkap', 'Namalengkap', 'required', [
      'required' => 'Nama Lengkap Wajib diisi'
    ]);
    $this->form_validation->set_rules('no_telp', 'No_Telp', 'required|trim', [
      'required' => 'Nomor Telepon Wajib diisi'
    ]);
    $this->form_validation->set_rules('alamat_lengkap', 'Alamat_Lengkap', 'required|trim', [
      'required' => 'Alamat Lengkap Wajib diisi'
    ]);
    $this->form_validation->set_rules('kebutuhan', 'Kebutuhan', 'required|trim', [
      'required' => 'Jenis Kebutuhan Wajib diisi'
    ]);

    $this->form_validation->set_rules('jumlah_pemesanan', 'Jumlah_Pemesanan', 'required|trim|callback_check_jumlah_pemesanan');
    $data = [
      'namalengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
      'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
      'alamat_lengkap' => htmlspecialchars($this->input->post('alamat_lengkap', true)),
      'kebutuhan' => htmlspecialchars($this->input->post('kebutuhan', true)),

      'jumlah_pemesanan' => htmlspecialchars($this->input->post('jumlah_pemesanan', true)),
    ];
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header2");
      $this->load->view("layout/header3",);
      $this->load->view("user/AquaHub", $data);
      $this->load->view("layout/footer2");
    } else {
      $jumlah_pemesanan = $this->input->post('jumlah_pemesanan');
      $total_harga = $jumlah_pemesanan % 5000 == 0 ? ($jumlah_pemesanan / 5000) * 250000 : null;
      $data = [
        'namalengkap' => $this->input->post('namalengkap'),
        'no_telp' => $this->input->post('no_telp'),
        'alamat_lengkap' => $this->input->post('alamat_lengkap'),
        'kebutuhan' => $this->input->post('kebutuhan'),
        'jumlah_pemesanan' => $this->input->post('jumlah_pemesanan'),
        'total_harga' => $total_harga,
        'tanggal_pembelian' => date('Y-m-d H:i:s')

      ];
      $this->aquahub_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Pembelian Berhasil mohon ditunggu konfirmasi melalui Whatsapp!</div>');
      redirect('AquaHub');
    }
  }

  public function check_jumlah_pemesanan($jumlah_pemesanan)
  {
    if ($jumlah_pemesanan < 5000) {
      $this->form_validation->set_message('check_jumlah_pemesanan', 'Jumlah pemesanan minimal 5000 Liter atau kelipatannya.');
      return FALSE;
    } elseif ($jumlah_pemesanan % 5000) {
      $this->form_validation->set_message('check_jumlah_pemesanan', 'Jumlah pemesanan minimal 5000 Liter atau kelipatannya.');
      return FALSE;
    } else {
      return TRUE;
    }
  }
}


/* End of file ClearFlow.php */
/* Location: ./application/controllers/ClearFlow.php */