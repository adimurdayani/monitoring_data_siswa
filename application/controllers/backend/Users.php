<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
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
    $data['judul'] = 'Users';
    $data['users'] = $this->user_model->get_all_data();
    $data['user_role'] = $this->user_model->get_all_jenis_user();
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
    $this->load->view('backend/users/index', $data, FALSE);
    $this->load->view('temp_backend/footer', $data, FALSE);
  }

  public function add_user()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'User';
    $data['user_role'] = $this->user_model->get_all_jenis_user();
    $data['users'] = $this->user_model->get_all_data();
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[konf_pass]');
    $this->form_validation->set_rules('konf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
      
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/users/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {
      $data = [
        'user_id' => $this->input->post('user_id'),
        'user_active' => 1,
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email',true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'created_at' => format_indo(date("Y-m-d")) 
      ];

      $this->db->insert('users', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('backend/users');
    }
    
  }

  public function update_user()
  {
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
    $data['judul'] = 'User';
    $data['user_role'] = $this->user_model->get_all_jenis_user();
    $data['users'] = $this->user_model->get_all_data();
    $data['user_session'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[konf_pass]');
    $this->form_validation->set_rules('konf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
      
      $this->load->view('temp_backend/header', $data, FALSE);
    $this->load->view('temp_backend/side_bar', $data, FALSE);
    $this->load->view('temp_backend/top_bar', $data, FALSE);
      $this->load->view('backend/users/index', $data, FALSE);
      $this->load->view('temp_backend/footer', $data, FALSE);
    } else {

      $id = $this->input->post('id');

      $data = [
        'user_id' => $this->input->post('user_id'),
        'user_active' => 1,
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email',true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'updated_at' => format_indo(date("Y-m-d")) 
      ];

      $this->user_model->update_data($data, $id);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend/users');
  }
}

  public function delete_user($id)
  {
    $this->db->delete('users', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend/users');
  }

}

/* End of file Users.php */