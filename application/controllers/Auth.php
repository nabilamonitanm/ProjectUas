<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('Beranda');
    }
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
      'valid_email' => '*Email Must be Valid!',
      'required' => '*Email Cannot be Empty!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required', [
      'required' => '*Password Cannot be Empty!'
    ]);
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login';
      $this->load->view("layout/auth_header");
      $this->load->view("auth/login");
      $this->load->view("layout/auth_footer");
    } else {
      $this->cek_login();
    }
  }
  public function registrasi()
  {
    if ($this->session->userdata('email')) {
      redirect('Beranda');
    }
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => '*Email is Already!',
      'valid_email' => '*Email Must be Valid!',
      'required' => '*Email must be filled in!'
    ]);
    $this->form_validation->set_rules(
      'password',
      'Password',
      'required|trim|min_length[5]|matches[re_password]',
      [
        'matches' => '*Password are not the same!',
        'min_length' => '*Password is too short!',
        'required' => '*Password cannot be empty!'
      ]
    );
    $this->form_validation->set_rules('re_password', 'Password', 'required|trim|matches[password]');

    $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
    $this->form_validation->set_rules('telepon', 'telepon', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Registrasi';
      $this->load->view('layout/Auth_header');
      $this->load->view('Auth/register');
      $this->load->view('layout/Auth_footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'telepon' => htmlspecialchars($this->input->post('telepon', true)),
        'role' => "User",
        'date_created' => time()
      ];
      $this->userrole->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat Akunmu telah berhasil terdaftar, silahkan Login!</div>');
      redirect('Auth');
    }
  }

  public function cek_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    echo $password;
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'email' => $user['email'],
          'role' => $user['role'],
          'id' => $user['id'],
        ];

        $this->session->set_userdata($data);
        if ($user['role'] == 'User') {
          redirect('Beranda');
        } else {
          redirect('Beranda_admin');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger
        role="alert">Password Salah! </div>');
        redirect('Auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger
        role="alert">Email Belum Terdaftar! </div>');
      redirect('Auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role');
    $this->session->set_flashdata('message', '<div class="alert alert-success"
    role="alert"> Berhasil Logout! </div>');
    redirect('Auth');
  }

  public function login()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role');
    redirect('Auth');
  }
}
