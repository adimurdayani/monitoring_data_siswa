<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard_model extends CI_Model {

  public function jumlah_siswa()
  {
    return $this->db->get('siswa')->num_rows();
  }

  public function jumlah_absen()
  {
    return $this->db->get('data_absen')->num_rows();
  }

  public function jumlah_nilai()
  {
    return $this->db->get('data_nilai')->num_rows();
  }

  public function jumlah_guru()
  {
    return $this->db->get('data_guru')->num_rows();
  }

}

/* End of file Dashboard_model.php */