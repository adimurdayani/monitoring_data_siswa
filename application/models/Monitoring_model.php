<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring_model extends CI_Model {

  public function get_data_mapel()
  {
    return $this->db->get('data_mapel')->result_array();
  }

  public function jumlah_siswa()
  {
    return $this->db->get('data_absen')->num_rows();
  }

  public function get_data_nilai()
  {
    $this->db->where('kelas_id', 1);
    $query = $this->db->get('data_nilai');
    return $query->result_array();
  }

  public function get_data_nilaiB()
  {
    $this->db->where('kelas_id', 2);
    $query = $this->db->get('data_nilai');
    return $query->result_array();
  }

  public function get_data_nilai_viiia()
  {
    $this->db->where('kelas_id', 3);
    $query = $this->db->get('data_nilai');
    return $query->result_array();
  }

  public function get_data_nilai_viiib()
  {
    $this->db->where('kelas_id', 4);
    $query = $this->db->get('data_nilai');
    return $query->result_array();
  }

  public function get_data_absensi_viia()
  {
    $this->db->where('kelas_id', 1);
    $query = $this->db->get('data_absen');
    return $query->result_array();
  }

  public function get_data_absensi_viib()
  {
    $this->db->where('kelas_id', 2);
    $query = $this->db->get('data_absen');
    return $query->result_array();
  }

  public function get_data_absensi_viiia()
  {
    $this->db->where('kelas_id', 3);
    $query = $this->db->get('data_absen');
    return $query->result_array();
  }

  public function get_data_absensi_viiib()
  {
    $this->db->where('kelas_id', 4);
    $query = $this->db->get('data_absen');
    return $query->result_array();
  }

  public function get_all_data_absensi_viia()
  {
    $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
                FROM `data_absen` 
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
                WHERE `kelas_id` = 1
              ORDER BY `data_absen`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_nilai_viia()
  {
    $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                WHERE `kelas_id` = 1
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_absensi_viib()
  {
    $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
                FROM `data_absen` 
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
                WHERE `kelas_id` = 2
              ORDER BY `data_absen`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_nilai_viib()
  {
    $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                WHERE `kelas_id` = 2
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_absensi_viiia()
  {
    $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
                FROM `data_absen` 
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
                WHERE `kelas_id` = 3
              ORDER BY `data_absen`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_nilai_viiia()
  {
    $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                WHERE `kelas_id` = 3
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_absensi_viiib()
  {
    $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
                FROM `data_absen` 
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
                WHERE `kelas_id` = 4
              ORDER BY `data_absen`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_data_nilai_viiib()
  {
    $query = "SELECT `data_nilai`.*, `kelas`.`kelas`,`data_semester`.`semester`
                FROM `data_nilai` 
                JOIN `kelas` ON `data_nilai`.`kelas_id` = `kelas`.`id`
                JOIN `data_semester` ON `data_nilai`.`semester_id` = `data_semester`.`id_semester`
                WHERE `kelas_id` = 4
              ORDER BY `data_nilai`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

}

/* End of file Monitoring_model.php */