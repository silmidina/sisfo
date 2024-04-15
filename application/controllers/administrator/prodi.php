<?php
class Prodi extends CI_Controller
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
        $data['title'] = 'Program Studi';
        $data['prodi'] = $this->prodi_model->tampil_data('prodi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/prodi', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_prodi()
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );
        $data = array(
            'username' => $data->username,
            'level' => $data->level,
        );
        $data['title'] = 'Form Input Program Studi';
        $data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/prodi_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_prodi_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_prodi();
        } else {
            $kode_prodi = $this->input->post('kode_prodi');
            $nama_prodi = $this->input->post('nama_prodi');
            $nama_jurusan = $this->input->post('nama_jurusan');
            $data = array(
                'kode_prodi' => $kode_prodi,
                'nama_prodi' => $nama_prodi,
                'nama_jurusan' => $nama_jurusan,
            );
            $this->prodi_model->insert_data($data, 'prodi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon fas fa-check"></i> Data prodi berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/prodi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'required', [
            'required' => 'Kode prodi wajib diisi!'
        ]);
        $this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required', [
            'required' => 'Nama prodi wajib diisi!'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', [
            'required' => 'Nama jurusan wajib diisi!'
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
        $where = array('id_prodi' => $id);
        $data['prodi'] = $this->db->query("select * from 
        prodi prd, jurusan jrs where 
        prd.nama_jurusan=jrs.nama_jurusan and 
        prd.id_prodi='$id'")->result();
        $data['title'] = 'Form Edit Program Studi';
        $data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/prodi_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id_prodi = $this->input->post('id_prodi');
        $kode_prodi = $this->input->post('kode_prodi');
        $nama_prodi = $this->input->post('nama_prodi');
        $nama_jurusan = $this->input->post('nama_jurusan');

        $data = array(
            'kode_prodi' => $kode_prodi,
            'nama_prodi' => $nama_prodi,
            'nama_jurusan' => $nama_jurusan,
        );

        $where = array(
            'id_prodi' => $id_prodi,
        );
        $this->prodi_model->update_data($where, $data, 'prodi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> Data prodi berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/prodi');
    }

    public function delete($id_prodi)
    {
        $where = array('id_prodi' => $id_prodi);
        $this->prodi_model->hapus_data($where, 'prodi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> Data prodi berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/prodi');
    }
}
