<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

  public function get_all_data()
  {
    $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_nilai($id_kelas, $id_semester)
  {

    if($id_kelas != 0){
      $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                  FROM `data_nilai` 
                  JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                  JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                  WHERE `kelas_id` = $id_kelas
                ORDER BY `data_nilai`.`id` DESC
              ";
      return $this->db->query($query)->result_array();
    }elseif($id_semester != 0){
      $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                  FROM `data_nilai` 
                  JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                  JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                  WHERE `semester_id` = $id_semester
                ORDER BY `data_nilai`.`id` DESC
              ";
      return $this->db->query($query)->result_array();
    }

    $query = "SELECT `data_nilai`.*, `kelas`.`nama_kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }
}

/* End of file Nilai_model.php */