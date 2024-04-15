<?php
class Siswa extends CI_Controller
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
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->siswa_model->tampil_data('siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/siswa', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id)
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );
        $data = array(
            'username' => $data->username,
            'level' => $data->level,
        );
        $data['title'] = 'Detail Data Siswa';
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/siswa_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_siswa()
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );
        $data = array(
            'username' => $data->username,
            'level' => $data->level,
        );
        $data['title'] = 'Form Input Data Siswa';
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/siswa_form');
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_siswa_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_siswa();
        } else {
            $nama_siswa = $this->input->post('nama_siswa');
            $nis = $this->input->post('nis');
            $kelas = $this->input->post('kelas');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $agama = $this->input->post('agama');
            $data = array(
                'nama_siswa' => $nama_siswa,
                'nis' => $nis,
                'kelas' => $kelas,
                'tanggal_lahir' => $tanggal_lahir,
                'tempat_lahir' => $tempat_lahir,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'agama' => $agama,
            );
            $this->siswa_model->insert_data($data, 'siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data siswa berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/siswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required', [
            'required' => 'Nama siswa wajib diisi!'
        ]);
        $this->form_validation->set_rules('nis', 'nis', 'required', [
            'required' => 'NIS wajib diisi!'
        ]);
        $this->form_validation->set_rules('kelas', 'kelas', 'required', [
            'required' => 'Kelas wajib diisi!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
            'required' => 'Tanggal Lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required', [
            'required' => 'Tempat Lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat wajib diisi!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin wajib diisi!'
        ]);
        $this->form_validation->set_rules('agama', 'agama', 'required', [
            'required' => 'Agama wajib diisi!'
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
        $data['title'] = 'Form Edit Data Siswa';
        $where = array('id' => $id);
        $data['siswa'] = $this->siswa_model->ambil_id_siswa($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/siswa_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_siswa_aksi()
    {
        $id = $this->input->post('id');
        $nama_siswa = $this->input->post('nama_siswa');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');

        $data = array(
            'nama_siswa' => $nama_siswa,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
        );

        $where = array(
            'id' => $id,
        );
        $this->siswa_model->update_data($where, $data, 'siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data siswa berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/siswa');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->siswa_model->hapus_data($where, 'siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data siswa berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/siswa');
    }
}
