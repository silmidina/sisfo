<?php
class Hubungi_kami extends CI_Controller
{
  public function index()
  {
    $data = $this->user_model->ambil_data(
      $this->session->userdata['username']
    );
    $data = array(
      'username' => $data->username,
      'level' => $data->level,
    );
    $data['title'] = 'Pesan Dari User';
    $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/hubungi_kami', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function kirim_email($id)
  {
    $data = $this->user_model->ambil_data(
      $this->session->userdata['username']
    );
    $data = array(
      'username' => $data->username,
      'level' => $data->level,
    );
    $data['title'] = 'Form Balas Pesan User';
    $where = array('id_hubungi' => $id);
    $data['hubungi'] = $this->hubungi_model->kirim_data($where, 'hubungi')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/form_kirim_email', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function kirim_email_aksi()
  {
    $to_email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('pesan');
    $config = [
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_user' => 'silmidina11@gmail.com',
      'smtp_pass' => 'qwerty123',
      'smtp_post' => 465,
      'crlf' => "\r\n",
      'newline' => "\r\n"
    ];

    $this->load->library('email', $config);
    $this->email->from("Digital Learning Management System");
    $this->email->to($to_email);
    $this->email->subject($subject);
    $this->email->message($message);
    if ($this->email->send()) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Pesan Terkirim!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>');
      redirect('administrator/hubungi_kami');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Pesan Tidak Terkirim!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>');
      redirect('administrator/hubungi_kami');
    }
  }

  public function delete($id_hubungi)
  {
    $where = array('id_hubungi' => $id_hubungi);
    $this->hubungi_model->hapus_data($where, 'hubungi');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesan berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
    redirect('administrator/hubungi_kami');
  }
}
