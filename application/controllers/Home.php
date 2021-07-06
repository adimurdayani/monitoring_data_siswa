<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('monitoring_model');
    $this->load->model('nilai_model');
    
  }
  

  public function index()
  {
    $data['judul'] = 'Home';
    $data['data_nilai1'] = $this->monitoring_model->get_data_nilai();
    $data['data_nilai2'] = $this->monitoring_model->get_data_nilaiB();
    $data['data_nilai3'] = $this->monitoring_model->get_data_nilai_viiia();
    $data['data_nilai4'] = $this->monitoring_model->get_data_nilai_viiib();

    $this->rssparser->set_feed_url('https://www.tribunnews.com/rss');
    $this->rssparser->set_cache_life(30);
    $data['list'] = $this->rssparser->getFeed(5);
    
    $this->load->view('temp_frontend/head', $data, FALSE);
    $this->load->view('temp_frontend/header', $data, FALSE);
    $this->load->view('temp_frontend/slide', $data, FALSE);
    $this->load->view('frontend/home', $data, FALSE);
    $this->load->view('temp_frontend/footer', $data, FALSE);
  }

}

/* End of file Home.php */