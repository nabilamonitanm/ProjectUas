<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Profile
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

class Profile extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model'); // Load the User_model
    $this->load->library('session');
    $this->load->database();
  }

  public function index()
  {

    $data['user'] = $this->user_model->getBy(); // Get user data from the model
    $this->load->view("layout/header2");
    $this->load->view("layout/header3", $data);
    $this->load->view("user/profile", $data); // Pass the user data to the view
    $this->load->view("layout/footer2");
  }

  public function updateProfile()
  {
    // Validate the form data if needed

    // Get the form data
    $username = $this->input->post('username');
    $provinsi = $this->input->post('provinsi');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $birthday = $this->input->post('birthday');
    $keterangan = $this->input->post('keterangan');

    // Update the user profile in the database using the User_model
    $data = array(
      'nama' => $username,
      'provinsi' => $provinsi,
      'alamat' => $alamat,
      'email' => $email,
      'telepon' => $phone,
      'tanggal_lahir' => $birthday
    );

    $this->load->model('user_model'); // Load the User_model
    $this->user_model->updateProfile($data);

    // Redirect or load the appropriate view
  }
}
