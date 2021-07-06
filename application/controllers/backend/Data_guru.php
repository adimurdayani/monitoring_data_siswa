<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('guru_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
  

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Guru';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_guru'] = $this->guru_model->get_all_data();
    $data['status_sertifikasi'] = $this->guru_model->get_all_status();
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/data_guru/index', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

  public function add_guru()
  {
    $data['judul'] = 'Guru';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_guru'] = $this->guru_model->get_all_data();
    $data['status_sertifikasi'] = $this->guru_model->get_all_status();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('pend_terakhir', 'pendidikan terkahir', 'trim|required');
    
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_guru/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'njp' => $this->input->post('njp'),
        'nama' => $this->input->post('nama'),
        'pend_terakhir' => $this->input->post('pend_terakhir'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'nuptk' => $this->input->post('nuptk'),
        'nrg' => $this->input->post('nrg'),
        'status_sertifikasi' => $this->input->post('status_sertifikasi'),
        'no_sertifikasi' => $this->input->post('no_sertifikasi'),
        'mapel' => $this->input->post('mapel'),
        'kelas_vii' => $this->input->post('kelas_vii'),
        'kelas_viii' => $this->input->post('kelas_viii'),
        'kelas_ix' => $this->input->post('kelas_ix'),
        'keterangan' => $this->input->post('keterangan'),
        'created_at' => format_indo(date("Y-m-d"))

      ];

      $this->db->insert('data_guru', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_guru');
    }
    

  }

  public function update_guru()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Guru';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_guru'] = $this->guru_model->get_all_data();
    $data['status_sertifikasi'] = $this->guru_model->get_all_status();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('pend_terakhir', 'pendidikan terkahir', 'trim|required');
    
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_guru/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'njp' => $this->input->post('njp'),
        'nama' => $this->input->post('nama'),
        'pend_terakhir' => $this->input->post('pend_terakhir'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'nuptk' => $this->input->post('nuptk'),
        'nrg' => $this->input->post('nrg'),
        'status_sertifikasi' => $this->input->post('status_sertifikasi'),
        'no_sertifikasi' => $this->input->post('no_sertifikasi'),
        'mapel' => $this->input->post('mapel'),
        'kelas_vii' => $this->input->post('kelas_vii'),
        'kelas_viii' => $this->input->post('kelas_viii'),
        'kelas_ix' => $this->input->post('kelas_ix'),
        'keterangan' => $this->input->post('keterangan'),
        'updated_at' => format_indo(date("Y-m-d"))

      ];
      
      $this->db->where('id', $id);
      $this->db->update('data_guru', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/data_guru');
  }
}

  public function delete_guru($id)
  {
    $this->db->delete('data_guru', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_guru');
  }

}

/* End of file Data_guru.php */