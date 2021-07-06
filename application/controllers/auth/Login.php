<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $data['judul'] = "Login";

    
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');

    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_login/header', $data, FALSE);
      $this->load->view('auth/login', $data, FALSE);
      $this->load->view('temp_login/footer', $data, FALSE);
    } else {
      # code...      
      $this->_login();
    }
  }

  private function _login()
  {
    # code...
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('users', ['username' => $username])->row_array();

    if ($user) {
      if ($user['user_active'] == 1) {
        # code...
        if (password_verify($password, $user['password'])) {
          # code...
          $data = [
            'username' => $user['username'],
            'user_id' => $user['user_id']
          ];

          $this->session->set_userdata($data);
          if ($user['user_id'] == 1) {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            
            redirect('backend/dashboard');
            
          }else {
            
            redirect('home');
            
          }
        }else{
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
          
          redirect('auth/login','refresh');
          
        }
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This username has not been activated!</div>');
        redirect('auth/login','refresh');
      }
    }else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
      redirect('auth/login','refresh');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('user_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah berhasil logout!</div>');
    redirect('auth/login');
  }

  public function blocked()
  {
    $data['judul'] = '';
    $this->load->view('auth/blocked', $data);
  }

}

/* End of file Login.php */