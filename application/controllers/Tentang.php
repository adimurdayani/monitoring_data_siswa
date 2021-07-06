<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

  public function index()
  {
    $data['judul'] = 'Tentang';
    $this->load->view('temp_frontend/head', $data, FALSE);
    $this->load->view('temp_frontend/header', $data, FALSE);
    $this->load->view('frontend/tentang', $data, FALSE);
    $this->load->view('temp_frontend/footer', $data, FALSE);
  }

}

/* End of file Tentang.php */