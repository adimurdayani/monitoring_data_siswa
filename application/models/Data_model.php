<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

  public function get_data()
  {
    $sql = "SELECT count(if(minggu_ke='1', minggu_ke, NULL)) as minggu_ke, sum(if(minggu_ke='1', total,  NULL)) as total FROM data_absen_kelas_viia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
  }

  public function get_data2()
  {
    $sql = "SELECT count(if(minggu_ke='2', minggu_ke, NULL)) as minggu_ke, sum(if(minggu_ke='2', total,  NULL)) as total FROM data_absen_kelas_viia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
  }

  public function get_data3()
  {
    $sql = "SELECT count(if(minggu_ke='3', minggu_ke, NULL)) as minggu_ke, sum(if(minggu_ke='3', total,  NULL)) as total FROM data_absen_kelas_viia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
  }

  public function get_data4()
  {
    $sql = "SELECT count(if(minggu_ke='4', minggu_ke, NULL)) as minggu_ke, sum(if(minggu_ke='4', total,  NULL)) as total FROM data_absen_kelas_viia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
  }

}

/* End of file Data_model.php */