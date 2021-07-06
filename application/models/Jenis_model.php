<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model {

  public function get_all_data()
  {
    return $this->db->get("user_role")->result_array();
  }

  public function update_data( $data, $id)
  {
    # code...
    $this->db->where('id', $id);
    
    $this->db->update('user_role', $data);
    return true;
  }

}

/* End of file Jenis_model.php */