<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Beranda_admin
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

class Beranda_admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->model('AdminModel');
  }

  public function index()
  {
    $this->load->model('User_model');
    $this->load->model('aquahub_model');
    $this->load->model('tagihan_model');
    $this->load->model('keluhan_model');
    $total_users = $this->User_model->get_total_users();
    $data['total_users'] = $total_users;

    $total_harga = $this->aquahub_model->calculate_total_harga();
    $data['total_harga'] = $total_harga;

    $total_tagihan = $this->tagihan_model->get_total_tagihan();
    $data['total_tagihan'] = $total_tagihan;

    $total_keluhan = $this->keluhan_model->get_total_keluhan();
    $data['total_keluhan'] = $total_keluhan;

    $total_harga_per_bulan = $this->aquahub_model->get_total_harga_per_bulan();
    $data['total_harga_per_bulan'] = $total_harga_per_bulan;

    $this->load->view("layout/header_admin");
    $this->load->view("admin/beranda", $data);
    $this->load->view("layout/footer_admin");
  }
  public function dashboard()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;

    $this->load->view("layout/header_admin");
    $this->load->view('admin/index', 1, $datacontent);
    $this->load->view("layout/footer_admin");
  }

  public function form_tagihan()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $data['id'] = $this->AdminModel->get_no_kontrol();

    $this->load->view("layout/header_admin");
    $this->load->view('admin/form_tagihan', $data);
    $this->load->view("layout/footer_admin");
  }

  public function form_himbauan()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $data['id'] = $this->AdminModel->get_no_kontrol();
    $this->load->view("layout/header_admin");
    $this->load->view('admin/form_himbauan', $data);
    $this->load->view("layout/footer_admin");
  }

  public function keluhan_pelanggan()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $data['id'] = $this->AdminModel->get_no_kontrol();
    $this->load->view("layout/header_admin");
    $this->load->view('admin/keluhan_pelanggan', $datacontent);
    $this->load->view("layout/footer_admin");
  }

  public function konfirmasi_konsultasi()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $this->load->view("layout/header_admin");
    $this->load->view('admin/konfirmasi_konsultasi', 1, $datacontent);
    $this->load->view("layout/footer_admin");
  }



  public function penilaian_pelayanan()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $this->load->view('header', $datacontent);
    $this->load->view('admin/penilaian_pelayanan', 1, $datacontent);
    $this->load->view('footer', $datacontent);
  }

  public function rekap_konsultasi()
  {
    $session_data = $this->session->userdata('sess_admin');
    $datacontent['session'] = $session_data;
    $this->load->view('header', $datacontent);
    $this->load->view('admin/rekap_konsultasi', 1, $datacontent);
    $this->load->view("layout/footer_admin");
  }

  public function get_all_tunggakan_personal()
  {
    $session_data = $this->session->userdata('sess_admin');
    $data['session'] = $session_data;
    $result = $this->AdminModel->get_all_tunggakan();
    echo json_encode($result);
  }

  public function get_rekap_keluhan()
  {
    $session_data = $this->session->userdata('sess_admin');
    $data['session'] = $session_data;
    $result = $this->AdminModel->get_all_keluhan($data);
    echo json_encode($result);
  }

  public function get_personal_keluhan()
  {
    $id_keluhan = $this->input->GET('id_keluhan');
    $result = $this->AdminModel->get_personal_keluhan($id_keluhan);
    echo json_encode($result);
  }

  public function get_balasan_keluhan()
  {
    $id_keluhan = $this->input->GET('id_keluhan');
    $result = $this->AdminModel->get_balasan_keluhan($id_keluhan);
    echo json_encode($result);
  }

  public function get_name_chat()
  {
    $session_data = $this->session->userdata('sess_admin');
    //$data['session'] = $session_data;
    $result = $this->AdminModel->get_chat_name();
    echo json_encode($result);
  }

  public function kirim_reply()
  {
    $id_keluhan = $this->input->GET('id_keluhan');
    $isi_balasan = $this->input->GET('isi_balasan');
    $result = $this->AdminModel->update_balasan($id_keluhan, $isi_balasan);
    echo json_encode($result);
  }

  public function konfirm_himbauan()
  {
    $data['no_kontrol'] = $this->input->post('no_kontrol');
    $data['status'] = $this->input->POST('status');
    $himbauan = $this->AdminModel->get_tunggakan_personal($data['no_kontrol']);
    $data['lama_tunggakan'] = $himbauan[0]['jumlah'];
    echo "aku =" . $himbauan[0]['jumlah'];
    $data['total_tunggakan'] = $himbauan[0]['total_tagihan'];
    $data['awal'] = $himbauan[0]['awal'];
    $data['akhir'] = $himbauan[0]['akhir'];
    $cek_himbauan = $this->AdminModel->cek_id_himbauan($data['no_kontrol']);
    if (empty($cek_himbauan)) {
      $res = $this->AdminModel->input_himbauan($data);
    } else {
      $res = $this->AdminModel->update_himbauan($data);
    }

    echo json_encode($res);
  }



  public function submit_tagihan()
  {

    $data['no_kontrol'] = $this->input->post('no_kontrol');
    $data['bulan'] = $this->input->post('bulan');
    $data['tahun'] = $this->input->post('tahun');
    $data['st_awal'] = $this->input->post('st_awal');
    $data['st_akhir'] = $this->input->post('st_akhir');
    $data['pemakaian'] = $this->input->post('pemakaian');
    $data['lunas'] = $this->input->post('lunas');
    $data['aktif'] = $this->input->post('aktif');
    $data['tarif'] = $this->input->post('tarif');
    $data['biaya'] = $this->input->post('biaya');
    $result = $this->AdminModel->input_tagihan($data);
  }
  public function ListCustomer()
  {
    $data['user'] = $this->User_model->get();
    $this->load->view("layout/header_admin");
    $this->load->view("admin/ListCustomer", $data);
    $this->load->view("layout/footer_admin");
  }
  public function hapus($id)
  {

    $this->User_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengguna Berhasil Dihapus!</div>');
    redirect('Beranda_admin/ListCustomer');
  }
}


/* End of file Beranda_admin.php */
/* Location: ./application/controllers/Beranda_admin.php */