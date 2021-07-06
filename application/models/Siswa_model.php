<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

  public function get_data( )
  {
    $query = "SELECT `siswa`.*,`data_kelas`.`nama_kelas`,`user_role`.`tipe_user`
                FROM `siswa` 
                JOIN `data_kelas` ON `siswa`.`kelas_id` = `data_kelas`.`id_kelas`
                JOIN `user_role` ON `siswa`.`user_id` = `user_role`.`id`
              ORDER BY `siswa`.`id` ASC
            ";
    return $this->db->query($query)->result_array();
  }

    public function get_data_absen($user_session)
  {
    $query = "SELECT `data_absen`.*,`kelas`.`kelas`,`data_mingguan`.`minggu`
                FROM `data_absen` 
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                WHERE `nis` = $user_session
              ORDER BY `data_absen`.`id` ASC
            ";
    return $this->db->query($query)->result_array();
    
  }

  public function update_data_siswa($data, $id)
  {
    # code...
    $this->db->where('id', $id);
    $this->db->update('siswa', $data);
    return true;
  }

}

/* End of file Siswa_model.php */