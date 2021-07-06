<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pdf extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('guru_model');
    $this->load->model('apsen_model');
    $this->load->model('nilai_model');
		$this->load->library('dompdf_gen');
  }
  

  public function index()
  {
    $data['judul'] = 'Laporan PDF Data Guru';
    $data['data_guru'] = $this->guru_model->get_all_data();
    $this->load->view('backend/export/laporan_pdf', $data);
    
    $paper_size = 'A3';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_dataguru.pdf", array('Attachment' => 0));
  }

  public function export_data_absen()
  {
    $data['judul'] = 'Laporan PDF Data Absen';
    $data['data_absen'] = $this->apsen_model->get_all_data();
    $this->load->view('backend/export/laporan_pdf_absen', $data);
    
    $paper_size = 'A3';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_dataabsen.pdf", array('Attachment' => 0));
  }

  public function export_data_absen_id()
  {
    $kelas_id = $this->input->post('id_kelas');
    $minggu_id = $this->input->post('id');

    $data['judul'] = 'Laporan PDF Data Absen';
    $data['data_absen'] = $this->apsen_model->data_get($kelas_id,$minggu_id);
    $this->load->view('backend/export/laporan_pdf_absen_id', $data);
    
    $paper_size = 'A3';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_dataabsen.pdf", array('Attachment' => 0));
  }

  public function export_nilai_siswa()
  {
    $data['judul'] = 'Laporan PDF Data Nilai';
    $data['data_nilai'] = $this->nilai_model->get_all_data();
    $this->load->view('backend/export/laporan_pdf_nilai', $data);
    
    $paper_size = 'A3';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_datanilai.pdf", array('Attachment' => 0));
  }

}

/* End of file Laporan_pdf.php */