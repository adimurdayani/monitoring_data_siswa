<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function get_all_data()
  {
    $query = "SELECT `users`.*, `user_role`.`tipe_user`
                FROM `users` JOIN `user_role`
                  ON `users`.`user_id` = `user_role`.`id`
              ORDER BY `users`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_jenis_user()
  {
    return $this->db->get('user_role')->result_array();
  }

  public function update_data($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('users', $data);
    return true;
  }

  public function get_data_user()
  {
    $query = "SELECT `users`.*, `user_role`.`tipe_user`
                FROM `users` JOIN `user_role`
                  ON `users`.`user_id` = `user_role`.`id`
              ORDER BY `users`.`id` DESC
            ";
    return $this->db->query($query)->row_array();
  }

  public function update_profile($data)
  {
    // $this->db->where('id', $id);
    $this->db->update('users', $data);
    return true;
  }

}

/* End of file User_model.php */