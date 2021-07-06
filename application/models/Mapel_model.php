<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

  public function get_all_data()
  {
    return $this->db->get('data_mapel')->result_array();
  }

  public function update_data( $data, $id)
  {
    # code...
    $this->db->where('id', $id);
    $this->db->update('data_mapel', $data);
    return true;
  }
}

/* End of file Mapel_model.php */