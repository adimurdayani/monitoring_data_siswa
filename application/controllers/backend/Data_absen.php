<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_absen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('apsen_model');
    
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Absen';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    
    $data['data_absen'] =  $this->apsen_model->get_all_data();

    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_status'] = $this->db->get('status')->row_array();
    $data['data_minggu'] = $this->db->get('data_mingguan')->result_array();
    

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'jenis kelamin', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_absen/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kelamin' => $this->input->post('kelamin'),
        'minggu_ke' => $this->input->post('minggu_ke'),
        'kelas_id' => $this->input->post('kelas_id'),
        'senin' => $this->input->post('senin'),
        'selasa' => $this->input->post('selasa'),
        'rabu' => $this->input->post('rabu'),
        'kamis' => $this->input->post('kamis'),
        'jumat' => $this->input->post('jumat'),
        'saptu' => $this->input->post('saptu'),
        'total' => $this->input->post('senin')+$this->input->post('selasa')+$this->input->post('rabu')+$this->input->post('kamis')+$this->input->post('jumat')+$this->input->post('saptu'),
        'alfa' => $this->input->post('alfa'),
        'sakit' => $this->input->post('sakit'),
        'izin' => $this->input->post('izin'),
        'keterangan' => $this->input->post('keterangan')

      ];

      $this->db->insert('data_absen', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/data_absen/index');
    }
  }

  public function update_absen()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'Absen';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_absen'] = $this->apsen_model->get_all_data();
    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_status'] = $this->db->get('status')->result_array();
    $data['data_minggu'] = $this->db->get('data_mingguan')->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'jenis kelamin', 'trim|required');

    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('temp_backend/header', $data, FALSE);
      $this->load->view('temp_backend/side_bar', $data, FALSE);
      $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/data_absen/kelas_viib', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kelamin' => $this->input->post('kelamin'),
        'minggu_ke' => $this->input->post('minggu_ke'),
        'senin' => $this->input->post('senin'),
        'selasa' => $this->input->post('selasa'),
        'rabu' => $this->input->post('rabu'),
        'kamis' => $this->input->post('kamis'),
        'jumat' => $this->input->post('jumat'),
        'saptu' => $this->input->post('saptu'),
        'total' => $this->input->post('senin')+$this->input->post('selasa')+$this->input->post('rabu')+$this->input->post('kamis')+$this->input->post('jumat')+$this->input->post('saptu'),
        'alfa' => $this->input->post('alfa'),
        'sakit' => $this->input->post('sakit'),
        'izin' => $this->input->post('izin'),
        'keterangan' => $this->input->post('keterangan')

      ];

      $this->db->where('id', $id);
      $this->db->update('data_absen', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/data_absen/index');
    }
  }

  public function delete_absen($id)
  {
    $this->db->delete('data_absen', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/data_absen/index');
  }

  public function cari_data()
  {
    $kelas_id = $this->input->post('id_kelas');
    $minggu_id = $this->input->post('id');

    $data['judul'] = 'Absen';
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_absen'] = $this->apsen_model->data_get($kelas_id,$minggu_id);
    $data['data_kelas'] = $this->db->get('kelas')->result_array();
    $data['data_minggu'] = $this->db->get('data_mingguan')->result_array();
    $data['data_status'] = $this->db->get('status')->row_array();

    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/data_absen/cari_data', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

}

/* End of file Data_absen_kelas_viib.php */