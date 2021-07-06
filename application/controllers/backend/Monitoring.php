<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('monitoring_model');
    $this->load->model('nilai_model');    
    $this->load->model('apsen_model');    
    $this->load->model('data_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Monitoring';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->monitoring_model->get_data_mapel();
    $data['jumlah_siswa'] = $this->monitoring_model->jumlah_siswa();
    $data['data_nilai'] = $this->monitoring_model->get_data_nilai();
    $data['data_absen'] = $this->monitoring_model->get_data_absensi_viia();
    $data['data_nilai_siswa'] = $this->monitoring_model->get_all_data_nilai_viia();
    $data['data_absen_siswa'] = $this->monitoring_model->get_all_data_absensi_viia();
    
    $data['dm'] = $this->db->get('data_mingguan')->result_array();
    
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/monitoring/index', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

  public function kelas_viib()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Monitoring';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->monitoring_model->get_data_mapel();
    $data['jumlah_siswa'] = $this->monitoring_model->jumlah_siswa();
    $data['data_nilai'] = $this->monitoring_model->get_data_nilaiB();
    $data['data_absen'] = $this->monitoring_model->get_data_absensi_viib();
    $data['data_nilai_siswa'] = $this->monitoring_model->get_all_data_nilai_viib();
    $data['data_absen_siswa'] = $this->monitoring_model->get_all_data_absensi_viib();
    
    $data['dm'] = $this->db->get('data_mingguan')->result_array();
    
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/monitoring/kelas_viib', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

  public function kelas_viiia()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Monitoring';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->monitoring_model->get_data_mapel();
    $data['jumlah_siswa'] = $this->monitoring_model->jumlah_siswa();
    $data['data_nilai'] = $this->monitoring_model->get_data_nilai_viiia();
    $data['data_absen'] = $this->monitoring_model->get_data_absensi_viiia();
    $data['data_nilai_siswa'] = $this->monitoring_model->get_all_data_nilai_viiia();
    $data['data_absen_siswa'] = $this->monitoring_model->get_all_data_absensi_viiia();
    
    $data['dm'] = $this->db->get('data_mingguan')->result_array();
    
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/monitoring/kelas_viiia', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

  public function kelas_viiib()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Monitoring';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->monitoring_model->get_data_mapel();
    $data['jumlah_siswa'] = $this->monitoring_model->jumlah_siswa();
    $data['data_nilai'] = $this->monitoring_model->get_data_nilai_viiib();
    $data['data_absen'] = $this->monitoring_model->get_data_absensi_viiib();
    $data['data_nilai_siswa'] = $this->monitoring_model->get_all_data_nilai_viiib();
    $data['data_absen_siswa'] = $this->monitoring_model->get_all_data_absensi_viiib();
    
    $data['dm'] = $this->db->get('data_mingguan')->result_array();
    
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/monitoring/kelas_viiib', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

}

/* End of file Monitoring.php */