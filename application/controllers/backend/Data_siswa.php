<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('siswa_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Siswa';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_siswa'] = $this->siswa_model->get_data();
    $data['data_kelas'] = $this->db->get('data_kelas')->result_array();
    $data['data_tipe_user'] = $this->db->get('user_role')->result_array();
    $data['data_verifikasi'] = $this->db->get('verifikasi')->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('nis', 'NIS', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[conf_pass]');
    $this->form_validation->set_rules('conf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');    
    $this->form_validation->set_rules('actived_id', 'verifikasi', 'trim|required');
    $this->form_validation->set_rules('kelas_id', 'kelas', 'trim|required');
    $this->form_validation->set_rules('user_id', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_siswa/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'actived_id' => $this->input->post('actived_id'),
        'user_id' => $this->input->post('user_id'),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'nis' => htmlspecialchars($this->input->post('nis', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'kelas_id' => $this->input->post('kelas_id')
      ];

      $this->db->insert('siswa', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_siswa');
    }
  }

  public function update_data()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Siswa';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_siswa'] = $this->siswa_model->get_data();
    $data['data_kelas'] = $this->db->get('data_kelas')->result_array();
    $data['data_tipe_user'] = $this->db->get('user_role')->result_array();
    $data['data_verifikasi'] = $this->db->get('verifikasi')->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('nis', 'NIS', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[conf_pass]');
    $this->form_validation->set_rules('conf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');    
    $this->form_validation->set_rules('actived_id', 'verifikasi', 'trim|required');
    $this->form_validation->set_rules('kelas_id', 'kelas', 'trim|required');
    $this->form_validation->set_rules('user_id', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_siswa/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'actived_id' => $this->input->post('actived_id'),
        'user_id' => $this->input->post('user_id'),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'nis' => htmlspecialchars($this->input->post('nis', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'kelas_id' => $this->input->post('kelas_id')
        
      ];

      $this->siswa_model->update_data_siswa($data,$id);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_siswa');
    }
  }

  public function delete_data($id)
  {
    $this->db->delete('siswa', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_siswa');
  }

}

/* End of file Data_siswa.php */