<?php
class Tentang_kampus extends CI_Controller
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
    $data['title'] = 'Tentang Kampus Website';
    $data['tentang'] = $this->tentang_kampus_model->tampil_data('tentang_kampus')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/tentang_kampus', $data);
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
    $data['title'] = 'Form Edit Tentang Kampus Website';
    $where = array('id' => $id);
    $data['tentang'] = $this->tentang_kampus_model->edit_data($where, 'tentang_kampus')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/tentang_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi()
  {
    $id = $this->input->post('id');
    $sejarah = $this->input->post('sejarah');
    $visi = $this->input->post('visi');
    $misi = $this->input->post('misi');

    $data = array(
      'sejarah' => $sejarah,
      'visi' => $visi,
      'misi' => $misi,
    );
    $where = array(
      'id' => $id,
    );
    $this->tentang_kampus_model->update_data($where, $data, 'tentang_kampus');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="icon fas fa-check"></i> Data tentang kampus berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>');
    redirect('administrator/tentang_kampus');
  }
}
