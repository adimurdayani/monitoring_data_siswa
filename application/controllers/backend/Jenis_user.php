<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_user extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('jenis_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Jenis';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['jenis_user'] =  $this->jenis_model->get_all_data();

    $this->form_validation->set_rules('tipe_user', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/jenis_user/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'tipe_user' => $this->input->post('tipe_user'),
        'created_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('user_role', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/jenis_user');
    }
    
  }

  public function update_jenis()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    # code...
    $data['judul'] = 'Jenis';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['jenis_user'] =  $this->jenis_model->get_all_data();

    $this->form_validation->set_rules('tipe_user', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/jenis_user/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'tipe_user' => $this->input->post('tipe_user'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->jenis_model->update_data($data, $id);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/jenis_user');
    }
  }

  public function delete_jenis( $id)
  {
    # code...
    $this->db->delete('user_role', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/jenis_user');
  }

}

/* End of file Jenis_user.php */