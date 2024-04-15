<?php
class Identitas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // Memuat model yang diperlukan
    $this->load->model('identitas_model');
  }


  public function index()
  {
    $data = $this->user_model->ambil_data(
      $this->session->userdata['username']
    );
    $data = array(
      'username' => $data->username,
      'level' => $data->level,
    );
    $data['title'] = 'Identitas Website';
    $data['identitas'] = $this->identitas_model->tampil_data('identitas')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/identitas', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update($id)
  {
    $data = $this->user_model->ambil_data(
      $this->session->userdata['username']
    );
    $data = array(
      'username' => $data->username,
      'level' => $data->level,
    );
    $data['title'] = 'Form Edit Identitas Website';
    $where = array('id_identitas' => $id);
    $data['identitas'] = $this->identitas_model->edit_data($where, 'identitas')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/identitas_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi()
  {
    $id_identitas = $this->input->post('id_identitas');
    $nama_website = $this->input->post('nama_website');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $telp = $this->input->post('telp');

    $data = array(
      'nama_website' => $nama_website,
      'alamat' => $alamat,
      'email' => $email,
      'telp' => $telp,
    );
    $where = array(
      'id_identitas' => $id_identitas,
    );
    $this->identitas_model->update_data($where, $data, 'identitas');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="icon fas fa-check"></i> Data identitas berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>');
    redirect('administrator/identitas');
  }
}
