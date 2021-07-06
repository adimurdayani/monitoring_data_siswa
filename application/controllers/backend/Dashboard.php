<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('dasboard_model');

    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Dashboard';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['jumlah_siswa'] = $this->dasboard_model->jumlah_siswa();
    $data['jumlah_absen'] = $this->dasboard_model->jumlah_siswa();
    $data['jumlah_nilai'] = $this->dasboard_model->jumlah_nilai();
    $data['jumlah_guru'] = $this->dasboard_model->jumlah_guru();
    
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/dashboard', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
    
  }

}

/* End of file Dashboard.php */