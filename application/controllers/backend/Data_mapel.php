<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mapel extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('mapel_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Mapel';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->mapel_model->get_all_data();

    $this->form_validation->set_rules('nama_mapel', 'mata pelajaran', 'trim|required');

    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_mapel/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...

      $data = [
        'nama_mapel' => $this->input->post('nama_mapel'),
        'created_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('data_mapel', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_mapel');
      
    }
  }

  public function update_mapel()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    # code...
    $data['judul'] = 'Mapel';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_mapel'] = $this->mapel_model->get_all_data();

    $this->form_validation->set_rules('nama_mapel', 'mata pelajaran', 'trim|required');

    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_mapel/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...

      $id = $this->input->post('id');
      
      $data = [
        'nama_mapel' => $this->input->post('nama_mapel'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->mapel_model->update_data($data, $id);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/data_mapel');
      
    }
  }

  public function delete_mapel( $id)
  {
    # code...
    $this->db->delete('data_mapel', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_mapel');
  }

}

/* End of file Data_mapel.php */