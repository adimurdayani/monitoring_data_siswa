<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('nilai_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Kelas';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_kelas'] = $this->db->get('data_kelas')->result_array();

    $this->form_validation->set_rules('nama_kelas', 'kelas', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_kelas/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nama_kelas' => $this->input->post('nama_kelas'),
        'created_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('data_kelas', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_kelas');
      
    }
    
  }

  public function update_kelas()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Kelas';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_kelas'] = $this->db->get('data_kelas')->result_array();

    $this->form_validation->set_rules('nama_kelas', 'kelas', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_kelas/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'nama_kelas' => $this->input->post('nama_kelas'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->nilai_model->update_data_kelas($data, $id);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/data_kelas');
      
    }
  }

  public function delete_kelas($id)
  {
    # code...
    $this->db->delete('data_kelas', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_kelas');
  }

}

/* End of file Data_kelas.php */