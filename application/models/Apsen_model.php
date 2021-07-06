<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apsen_model extends CI_Model {

  public function get_all_data()
  {
    $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
                FROM `data_absen` 
                JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
                JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
              ORDER BY `data_absen`.`id` DESC
            ";
    return $this->db->query($query)->result_array();
  }

  public function data_get($kelas_id, $minggu_id)
  {
    if ($kelas_id != null) {
      # code...
      $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
              FROM `data_absen` 
              JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
              JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
              WHERE `kelas_id` = $kelas_id 
            ORDER BY `data_absen`.`id` DESC
          ";
      return $this->db->query($query)->result_array();
    }elseif ($minggu_id != null) {
      # code...
      $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
              FROM `data_absen` 
              JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
              JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
              WHERE  `minggu_ke` = $minggu_id
            ORDER BY `data_absen`.`id` DESC
          ";
      return $this->db->query($query)->result_array();
    }else {
      # code...
      $query = "SELECT `data_absen`.*, `data_mingguan`.`minggu`,`kelas`.`kelas`
              FROM `data_absen` 
              JOIN `data_mingguan` ON `data_absen`.`minggu_ke` = `data_mingguan`.`id`
              JOIN `kelas` ON `data_absen`.`kelas_id` = `kelas`.`id`
            ORDER BY `data_absen`.`id` DESC
          ";
      return $this->db->query($query)->result_array();
    }
    
  }


  public function get_sum_kelas_viia_1()
  {
    $kelas_viia = $this->db->get('data_absen_kelas_viia_1')->result_array();
    
    foreach ($kelas_viia as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viib_1()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viib_1')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viib_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viia_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viia_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viia_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viib_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viib_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viib_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viiia_1()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viiia_1')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viiia_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viiib_1()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viiib_1')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viiib_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viiia_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viiia_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viiia_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_viiib_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_viiib_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_viiib_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_ixa_1()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_ixa_1')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_ixa_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_ixa_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_ixa_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_ixa_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_ixb_1()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_ixb_1')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_ixb_1";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function get_sum_kelas_ixb_2()
  {
    $kelas_viib = $this->db->get('data_absen_kelas_ixb_2')->result_array();
    
    foreach ($kelas_viib as $kelas) {
        $data = [
          'minggu_ke' => $kelas['minggu_ke']
        ];
      }

      if (isset($kelas['minggu_ke'])) {
        
      $minggu = "";
      $minggu_ke = $kelas['minggu_ke'];
      $minggu .= "'$minggu_ke'"; 

      
    $sql = "SELECT count(if(minggu_ke=$minggu, minggu_ke, NULL)) as minggu_ke, sum(if(senin='1', senin,  NULL)) as senin,
    sum(if(selasa='1', selasa,  NULL)) as selasa, sum(if(rabu='1', rabu,  NULL)) as rabu, 
    sum(if(kamis='1', kamis,  NULL)) as kamis, sum(if(jumat='1', jumat,  NULL)) as jumat,
    sum(if(saptu='1', saptu,  NULL)) as saptu FROM data_absen_kelas_ixb_2";
    $result = $this->db->query($sql);
    return $result->row_array();
      }
  }

  public function update_data($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viia_1', $data);
    return true;
  }

  public function update_data_kelas_viib_1($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viib_1', $data);
    return true;
  }

  public function update_data_kelas_viia_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viia_2', $data);
    return true;
  }

  public function update_data_kelas_viib_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viib_2', $data);
    return true;
  }

  public function update_data_kelas_viiia_1($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viiia_1', $data);
    return true;
  }

  public function update_data_kelas_viiia_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viiia_2', $data);
    return true;
  }

  public function update_data_kelas_viiib_1($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viiib_1', $data);
    return true;
  }

  public function update_data_kelas_viiib_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_viiib_2', $data);
    return true;
  }

  public function update_data_kelas_ixa_1($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_ixa_1', $data);
    return true;
  }

  public function update_data_kelas_ixa_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_ixa_2', $data);
    return true;
  }

  public function update_data_kelas_ixb_1($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_ixb_1', $data);
    return true;
  }

  public function update_data_kelas_ixb_2($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('data_absen_kelas_ixb_2', $data);
    return true;
  }


  public function get_data_status( )
  {
    return $this->db->get('status')->row_array();
    
  }

  public function get_data_mingguan( )
  {
    return $this->db->get('data_mingguan')->result_array();
    
  }

}

/* End of file Apsen_model.php */