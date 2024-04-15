<?php
class User extends CI_Controller
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
    $data['title'] = 'Daftar Users';
    $data['user'] = $this->user_model->tampil_data('user')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/daftar_user', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_user()
  {
    // Ambil data user berdasarkan username dari sesi
    $user_data = $this->user_model->ambil_data($this->session->userdata['username']);

    // Jika data user berhasil diambil, gunakan data tersebut
    if ($user_data) {
      $data['username'] = $user_data->username;
      $data['level'] = $user_data->level;
    } else {
      // Jika data user tidak ditemukan, berikan nilai default atau tangani sesuai kebutuhan
      $data['username'] = '';
      $data['level'] = '';
    }

    // Masukkan nilai-nilai dari form jika ada
    $data['username_form'] = set_value('username');
    $data['password'] = set_value('password');
    $data['email'] = set_value('email');
    $data['level_form'] = set_value('level');
    $data['blokir'] = set_value('blokir');

    // Load views dengan data yang telah disiapkan
    $data['title'] = 'Form Input User';
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/user_form', $data);
    $this->load->view('templates_administrator/footer');
  }


  public function tambah_user_aksi()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->tambah_user();
    } else {
      $data = array(
        'username' => $this->input->post('username', TRUE),
        'password' => md5($this->input->post('password', TRUE)),
        'email' => $this->input->post('email', TRUE),
        'level' => $this->input->post('level', TRUE),
        'blokir' => $this->input->post('blokir', TRUE),
        'id_sessions' => md5($this->input->post('id_sessions', TRUE)),
      );
      $this->user_model->insert_data($data, 'user');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data user berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
      redirect('administrator/user');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('username', 'username', 'required', [
      'required' => 'Username wajib diisi!'
    ]);
    $this->form_validation->set_rules('password', 'password', 'required', [
      'required' => 'Password wajib diisi!'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required', [
      'required' => 'Email wajib diisi!'
    ]);
    $this->form_validation->set_rules('level', 'level', 'required', [
      'required' => 'Level wajib diisi!'
    ]);
    $this->form_validation->set_rules('blokir', 'blokir', 'required', [
      'required' => 'Blokir wajib diisi!'
    ]);
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
    $data['title'] = 'Form Edit User';
    $where = array('id' => $id);
    $data['user'] = $this->user_model->edit_data($where, 'user')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar', $data);
    $this->load->view('administrator/user_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi()
  {
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $level = $this->input->post('level');
    $blokir = $this->input->post('blokir');
    $id_sessions = $this->input->post('id_sessions');

    $data = array(
      'username' => $username,
      'password' => $password,
      'email' => $email,
      'level' => $level,
      'blokir' => $blokir,
    );
    $where = array(
      'id' => $id,
    );
    $this->user_model->update_data($where, $data, 'user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>');
    redirect('administrator/user');
  }

  public function delete($id)
  {
    $where = array('id' => $id);
    $this->user_model->hapus_data($where, 'user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data user berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
    redirect('administrator/user');
  }
}
