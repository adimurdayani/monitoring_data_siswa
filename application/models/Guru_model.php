<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

  public function get_all_data()
  {
    return $this->db->get('data_guru')->result_array();
  }

  public function update_data($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_guru', $data);
    return true;
  }

  public function get_all_status()
  {
    return $this->db->get('verifikasi')->row_array();
  }

}

/* End of file Guru_model.php */