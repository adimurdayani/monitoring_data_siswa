<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan_excel extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('guru_model');
  }
  

  public function index()
  {
    $i = 1;
    $j = 2;
    $a = 6;
    $spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
      $sheet->getColumnDimension('A')->setAutoSize(true);
      $sheet->getColumnDimension('B')->setAutoSize(true);
      $sheet->getColumnDimension('C')->setAutoSize(true);
      $sheet->getColumnDimension('D')->setAutoSize(true);
      $sheet->getColumnDimension('E')->setAutoSize(true);
      $sheet->getColumnDimension('F')->setAutoSize(true);
      $sheet->getColumnDimension('G')->setWidth(10);
      $sheet->getColumnDimension('H')->setWidth(10);
      $sheet->getColumnDimension('I')->setAutoSize(true);
      $sheet->getColumnDimension('J')->setAutoSize(true);
      $sheet->getColumnDimension('K')->setAutoSize(true);
      $sheet->getColumnDimension('L')->setAutoSize(true);
      $sheet->getColumnDimension('M')->setAutoSize(true);
      $sheet->getColumnDimension('N')->setAutoSize(true);
      $sheet->getColumnDimension('O')->setAutoSize(true);
      
			$sheet->setCellValue('A4', 'No.');
      $sheet->mergeCells('A4'.':A6');
			$sheet->setCellValue('B4', 'Nama Guru / NJP');
      $sheet->mergeCells('B4'.':B6');
			$sheet->setCellValue('C4', 'Pend Terakhir');
			$sheet->setCellValue('C5', 'Jurusan');
      $sheet->mergeCells('C5'.':C6');
			$sheet->setCellValue('D4', 'L/P');
      $sheet->mergeCells('D4'.':D6');
			$sheet->setCellValue('E4', 'NUPTK');
      $sheet->mergeCells('E4'.':E6');
			$sheet->setCellValue('F4', 'NRG');
      $sheet->mergeCells('F4'.':F6');
			$sheet->setCellValue('G4', 'STATUS SERTIFIKASI');
      $sheet->mergeCells('G4'.':H4');
			$sheet->setCellValue('G5', 'Sudah');
      $sheet->mergeCells('G5'.':G6');
			$sheet->setCellValue('H5', 'Belum');
      $sheet->mergeCells('H5'.':H6');
			$sheet->setCellValue('I4', 'Nomor Sertifikasi Pendidikan');
      $sheet->mergeCells('I4'.':I6');
			$sheet->setCellValue('J4', 'Melaksanakan tugas mengajar & tugas lain sesuai SK');
      $sheet->mergeCells('J4'.':N4');
			$sheet->setCellValue('J5', 'Mapel yang diajarkan dan Tugas Lain');
      $sheet->mergeCells('J5'.':J6');
			$sheet->setCellValue('K5', 'Kelas dan Jam');
      $sheet->mergeCells('K5'.':N5');
			$sheet->setCellValue('K6', 'VII');
			$sheet->setCellValue('L6', 'VIII');
			$sheet->setCellValue('M6', 'IX');
			$sheet->setCellValue('N6', 'Jumlah');
			$sheet->setCellValue('O4', 'Keterangan');
      $sheet->mergeCells('O4'.':O6');

      $data = $this->db->get('data_guru')->result();
      $no = 1;
      $s = 7;
      $n = $s+$no;
      foreach ($data as $guru) {
        $sheet->setCellValue('A'.$s, $no++);
        $sheet->setCellValue('B'.$s, $guru->nama. ' / '.$guru->njp);
        $sheet->setCellValue('C'.$s, $guru->pend_terakhir);
        $sheet->setCellValue('D'.$s, $guru->jenis_kelamin);
        $sheet->setCellValue('E'.$s, $guru->nuptk);
        $sheet->setCellValue('F'.$s, $guru->nrg);
        $sheet->setCellValue('G'.$s, $guru->status_sertifikasi);
        $sheet->setCellValue('H'.$s, $guru->status_sertifikasi);
        $sheet->setCellValue('I'.$s, $guru->no_sertifikasi);
        $sheet->setCellValue('J'.$s, $guru->mapel);
        $sheet->setCellValue('K'.$s, $guru->kelas_vii);
        $sheet->setCellValue('L'.$s, $guru->kelas_viii);
        $sheet->setCellValue('M'.$s, $guru->kelas_ix);
        $sheet->setCellValue('O'.$s, $guru->keterangan);
        $s++;
      }

  $horizontalCenter = [
    'alignment' => [
    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ]
];

$sheet->getStyle('A4:O4')->applyFromArray($horizontalCenter);
$sheet->getStyle('A5:O5')->applyFromArray($horizontalCenter);
$sheet->getStyle('A6:O6')->applyFromArray($horizontalCenter);

      $styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A4:O4'.$i)->applyFromArray($styleArray);

      $writer = new Xlsx($spreadsheet);
			$filename = 'laporan-guru';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
    
  }

}

/* End of file Laporan_excel.php */