<?php
class Profile extends CI_Controller
{
  public function index()
  {
    $data = $this->user_model->ambil_data(
      $this->session->userdata['username'],
      $this->session->userdata['email']
    );
    $data = array(
      'username' => $data->username,
      'level' => $data->level,
      'email' => $data->email,
    );
    $data['title'] = 'Profile';
    $data['user'] = $this->user_model->tampil_data('user')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/profile', $data);
    $this->load->view('templates_administrator/footer');
  }
}
