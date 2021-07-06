<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai extends CI_Controller {

  
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
    $data['judul'] = 'Nilai';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_nilai'] = $this->nilai_model->get_all_data();
    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_semester'] = $this->db->get('data_semester')->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelas_id', 'kelas', 'trim|required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
    $this->form_validation->set_rules('semester_id', 'semester', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_nilai/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      
      $data = [
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'kelas_id' => $this->input->post('kelas_id'),
        'semester_id' => $this->input->post('semester_id'),
        'tahun' => $this->input->post('tahun'),
        'nilai_mtk' => $this->input->post('nilai_mtk'),
        'created_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('data_nilai', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_nilai');
    }
  }

  public function update_nilai()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Nilai';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_nilai'] = $this->nilai_model->get_all_data();
    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_kelas'] = $this->db->get('data_semester')->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelas_id', 'kelas', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_nilai/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'kelas_id' => $this->input->post('kelas_id'),
        'semester_id' => $this->input->post('semester_id'),
        'tahun' => $this->input->post('tahun'),
        'nilai_mtk' => $this->input->post('nilai_mtk'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->where('id', $id);
      $this->db->update('data_nilai', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/data_nilai');
    }
  }

  public function delete_nilai($id)
  {
    # code...
    $this->db->delete('data_nilai', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_nilai');
  }

  public function cari_nilai()
  {
    $id_kelas = $this->input->post('id_kelas');
    $id_semester = $this->input->post('semester_id');
    $data['judul'] = 'Nilai';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_nilai'] = $this->nilai_model->get_nilai($id_kelas,$id_semester);
    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_semester'] = $this->db->get('data_semester')->result_array();
    $data['get'] = $this->db->get_where('data_nilai', ['kelas_id' => $id_kelas])->row_array();
    $data['get_semester'] = $this->db->get_where('data_nilai', ['semester_id' => $id_semester])->row_array();
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/data_nilai/cari_nilai', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }
}

/* End of file Data_nilai.php */