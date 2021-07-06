<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring_absen extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    $this->load->model('monitoring_model');
    $this->load->model('nilai_model');
    $this->load->model('data_model');
    
  }
  

  public function index()
  {
    $data['judul'] = 'Monitoring';
    $data['data_absen1'] = $this->monitoring_model->get_data_absensi_viia();
    $data['data_absen2'] = $this->monitoring_model->get_data_absensi_viib();
    $data['data_absen3'] = $this->monitoring_model->get_data_absensi_viiia();
    $data['data_absen4'] = $this->monitoring_model->get_data_absensi_viiib();
    
    $this->load->view('temp_frontend/head', $data, FALSE);
    $this->load->view('temp_frontend/header', $data, FALSE);
    $this->load->view('frontend/monitoring', $data, FALSE);
    $this->load->view('temp_frontend/footer', $data, FALSE);
  }

  

}

/* End of file Monitoring.php */