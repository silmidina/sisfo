<?php
class Informasi_model extends CI_Model
{

  public function tampil_data($table)
  {
    return $this->db->get($table);
  }

  public function ambil_id_informasi($id_informasi)
  {
    $hasil = $this->db->where('id_informasi', $id_informasi)->get('informasi');
    if ($hasil->num_rows() > 0) {
      return $hasil->result();
    } else {
      return false;
    }
  }

  public function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public $table = 'informasi';
  public $id = 'id_informasi';

  public function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }
}
