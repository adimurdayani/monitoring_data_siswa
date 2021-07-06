<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_siswa extends CI_Controller {

  public function index()
  {
    $data['judul'] = 'Login';

    $this->form_validation->set_rules('nis', 'nis', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_frontend/head', $data, FALSE);
      $this->load->view('temp_frontend/header', $data, FALSE);
      $this->load->view('frontend/login', $data, FALSE);
      $this->load->view('temp_frontend/footer', $data, FALSE);
    } else {
      # code...
      $this->_login();
    }

  }

  private function _login()
  {
    $nis = $this->input->post('nis');
    $password = $this->input->post('password');

    $siswa = $this->db->get_where('siswa', ['nis' => $nis])->row_array();

    if ($siswa) {
      # code...
      if ($siswa['actived_id'] == 1) {
        # code...
        if (password_verify($password, $siswa['password'])) {
          # code...
          $data = [
            'nis' => $siswa['nis'],
            'kelas_id' => $siswa['kelas_id']
          ];

          $this->session->set_userdata($data);

          if ($siswa['kelas_id'] == 1) {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            
          }elseif($siswa['kelas_id'] == 2){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif($siswa['kelas_id'] == 3){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');

          }elseif ($siswa['kelas_id'] == 4) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif($siswa['kelas_id'] == 5){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif($siswa['kelas_id'] == 6){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');

          }elseif ($siswa['kelas_id'] == 7) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif ($siswa['kelas_id'] == 8) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif($siswa['kelas_id'] == 9){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif($siswa['kelas_id'] == 10){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');

          }elseif ($siswa['kelas_id'] == 11) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }elseif ($siswa['kelas_id'] == 12) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            redirect('dashboard_siswa/dashboard_siswa');
            # code...
          }
          
        }else {
          # code...
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
          redirect('login_siswa','refresh');
        }
      }else {
        # code...
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password belum di aktifasi!</div>');
        redirect('login_siswa','refresh');
      }
    }else {
      # code...
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak terdaftar!</div>');
      redirect('login_siswa','refresh');
    }
    
  }

    public function logout()
  {
    $this->session->unset_userdata('nis');
    $this->session->unset_userdata('kelas_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah berhasil logout!</div>');
    redirect('login_siswa');
  }

}

/* End of file Login_siswa.php */