<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_siswa extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('siswa_model');
    is_logged_in();
    
  }
  

  public function index()
  {
    if (!$this->session->userdata('nis')) {
      redirect('login_siswa');
    }
    $data['judul']  = 'Absen';
    $data['user_session'] = $this->db->get_where('siswa', ['nis' => $this->session->userdata('nis')])->row_array();
    $data_session = $this->db->get_where('siswa', ['nis' => $this->session->userdata('nis')])->row_array();
    $data['get_data'] = $this->siswa_model->get_data_absen($data_session['nis']);
    $this->load->view('temp_siswa/header', $data, FALSE);
    $this->load->view('temp_siswa/side_bar', $data, FALSE);
    $this->load->view('temp_siswa/top_bar', $data, FALSE);
    $this->load->view('halaman_siswa/index', $data, FALSE);
    $this->load->view('temp_siswa/footer', $data, FALSE);
    
  }

}

/* End of file Login_siswa.php */