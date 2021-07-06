<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('monitoring_model');
    $this->load->model('user_model');
    
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Profile';
    $data['user_session'] = $this->db->get_where('users', [
      
      'id',
      'username' => $this->session->userdata('username')
      
      ])->row_array();
    $data['get_user'] = $this->user_model->get_data_user();

    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[conf_pass]');
    $this->form_validation->set_rules('conf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/profile/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      
      $data = [
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'updated_at' => format_indo(date("Y-m-d"))
      ];

      $this->user_model->update_profile($data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('auth/login');
    }
    
  }

}

/* End of file Profile.php */