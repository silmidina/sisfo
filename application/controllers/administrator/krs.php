<?php
class Krs extends CI_Controller
{
    public function index()
    {
        $data = array(
            'nim' => set_value('nim'),
            'id_thn_akad' => set_value('id_thn_akad'),
        );
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );
        $data = array(
            'username' => $data->username,
            'level' => $data->level,
        );
        $data['title'] = 'Form Masuk Halaman KRS';
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/masuk_krs', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function krs_aksi()
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );

        $this->_rulesKrs();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $nim = $this->input->post('nim', TRUE);
            $id_thn_akad = $this->input->post('id_thn_akad', TRUE);
        }

        if ($this->mahasiswa_model->get_by_id($nim) == null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data mahasiswa yang anda input belum terdaftar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/krs');
        }

        $data = array(
            'username' => $data->username,
            'level' => $data->level,
            'nim' => $nim,
            'id_thn_akad' => $id_thn_akad,
            'nama_lengkap' => $this->mahasiswa_model->get_by_id($nim)->nama_lengkap
        );

        $dataKrs = array(
            'krs_data' => $this->baca_krs($nim, $id_thn_akad),
            'nim' => $nim,
            'id_thn_akad' => $id_thn_akad,
            'tahun_akademik' => $this->tahun_akademik_model->get_by_id($id_thn_akad)->tahun_akademik,
            'semester' => $this->tahun_akademik_model->get_by_id($id_thn_akad)->semester == 'Ganjil' ? 'Ganjil' : 'Genap',
            'nama_lengkap' => $this->mahasiswa_model->get_by_id($nim)->nama_lengkap,
            'prodi' => $this->mahasiswa_model->get_by_id($nim)->nama_prodi,
        );
        $data['title'] = ' Kartu Rencana Studi (KRS)';
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/krs_list', $dataKrs);
        $this->load->view('templates_administrator/footer');
    }

    public function baca_krs($nim, $id_thn_akad)
    {
        $this->db->select('k.id_krs,k.kode_matakuliah,m.nama_matakuliah,m.sks');
        $this->db->from('krs as k');
        $this->db->where('k.nim', $nim);
        $this->db->where('k.id_thn_akad', $id_thn_akad);
        $this->db->join('matakuliah as m', 'm.kode_matakuliah = k.kode_matakuliah');

        $krs = $this->db->get()->result();
        return $krs;
    }

    public function _rulesKrs()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('id_thn_akad', 'id_thn_akad', 'required');
    }

    public function tambah_krs($nim, $id_thn_akad)
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );
        $data = array(
            'username' => $data->username,
            'level' => $data->level,
            'id_krs' => set_value('id_krs'),
            'id_thn_akad' => $id_thn_akad,
            'thn_akad_smt' => $this->tahun_akademik_model->get_by_id($id_thn_akad)->tahun_akademik,
            'semester' => $this->tahun_akademik_model->get_by_id($id_thn_akad)->semester == 'Ganjil' ? 'Ganjil' : 'Genap',
            'nim' => $nim,
            'kode_matakuliah' => set_value('kode_matakuliah')
        );
        $data['title'] = 'Form Tambah Data KRS';
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/krs_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_krs_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_krs(
                $this->input->post('nim', TRUE),
                $this->input->post('id_thn_akad', TRUE)
            );
        } else {
            $nim = $this->input->post('nim', TRUE);
            $id_thn_akad = $this->input->post('id_thn_akad', TRUE);
            $kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);
            $data = array(
                'nim' => $nim,
                'id_thn_akad' => $id_thn_akad,
                'kode_matakuliah' => $kode_matakuliah,
            );
            $this->krs_model->insert($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data KRS berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/krs/index');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('id_thn_akad', 'id_thn_akad', 'required');
        $this->form_validation->set_rules('kode_matakuliah', 'kode_matakuliah', 'required');
    }

    public function update($id)
    {
        $data = $this->user_model->ambil_data(
            $this->session->userdata['username']
        );

        $row = $this->krs_model->get_by_id($id);
        $th = $row->id_thn_akad;

        if ($row) {
            $data = array(
                'username' => $data->username,
                'level' => $data->level,
                'id_krs' => set_value('id_krs', $row->id_krs),
                'id_thn_akad' => set_value('id_thn_akad', $row->id_thn_akad),
                'nim' => set_value('nim', $row->nim),
                'kode_matakuliah' => set_value('kode_matakuliah', $row->kode_matakuliah),
                'thn_akad_smt' => $this->tahun_akademik_model->get_by_id($th)->tahun_akademik,
                'semester' => $this->tahun_akademik_model->get_by_id($th)->semester == 'Ganjil' ? 'Ganjil' : 'Genap',
            );
            $data['title'] = 'Form Edit Data KRS';
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('administrator/krs_update', $data);
            $this->load->view('templates_administrator/footer');
        } else {
            echo "Data Tidak Ada!";
        }
    }

    public function update_aksi()
    {
        $id_krs = $this->input->post('id_krs', TRUE);
        $nim = $this->input->post('nim', TRUE);
        $id_thn_akad = $this->input->post('id_thn_akad', TRUE);
        $kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);

        $data = array(
            'id_krs' => $id_krs,
            'nim' => $nim,
            'id_thn_akad ' => $id_thn_akad,
            'kode_matakuliah ' => $this->input->post('kode_matakuliah', TRUE),
        );
        $this->krs_model->update($id_krs, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data KRS berhasil diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/krs/index');
    }

    public function delete($id)
    {
        $where = array('id_krs' => $id);
        $this->krs_model->hapus_data($where, 'krs');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data krs berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/krs/index');
    }
}
