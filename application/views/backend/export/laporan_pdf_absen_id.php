<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Document</title>
</head><body>
<h4><center><b>PEMERINTAH KABUPATEN LUWU UTARA<br>
DINAS PENDIDIKAN <br>
UPT SMP NEGERI 4 BAEBUNTA</b></center></h4><br>
<center><p>Jalan Poros Malangke, Desa Mario, Kecamatan Baebunta, 92965</p></center>
<hr>
<h4><center><b>DAFTAR HADIR SISWA TAHUN AJARAN 2020/<?= date("Y")?></b></center></h4>
        <table class="table table-bordered border-primary" border="1" width="100%">
            <tr>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NO.</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NIS</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NAMA</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">P/L</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">KELAS</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">M. KE</th>
              <th colspan="6" style="vertical-align:middle; text-align:center;">HARI/JAM
                PERTEMUAN</th>
              <th rowspan="2" colspan="3" style="vertical-align:middle; text-align:center;">ABSEN</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">KET.</th>
            </tr>
            <tr>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SENIN</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SELASA</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">RABU</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">KAMIS</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">JUMAT</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SAPTU</th>
            </tr>
            <tr>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">A</td>
              <td style="vertical-align:middle; text-align:center;">S</td>
              <td style="vertical-align:middle; text-align:center;">I</td>
            </tr>
            <?php 
                  
                  $no = 1;

                  foreach ($data_absen as $data):
                  
                  ?>
            <tr>
              <td style="vertical-align:middle; text-align:center;"><?= $no++;?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['nis'];?></td>
              <td style="vertical-align:middle;"><?= $data['nama'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['kelamin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['kelas'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['minggu'];?></td>
              <td style=" text-align:center;">
                <?= $data['senin'];?>
              </td>
              <td style=" text-align:center;">
                <?= $data['selasa'];?>
              </td>
              <td style=" text-align:center;">
                <?= $data['rabu'];?>
              </td>
              <td style=" text-align:center;">
                <?= $data['kamis'];?>
              </td>
              <td style=" text-align:center;">
                <?= $data['jumat'];?>
              </td>
              <td style=" text-align:center;">
                <?= $data['saptu'];?>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['alfa'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['sakit'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['izin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['keterangan'];?></td>
            </tr>
            <?php endforeach;?>
        </table>

        <p>Kepala Sekolah</p><br><br><br>
        <p><b><u>HJ.RABAIYA, S.Ag.</u></b><br> NIP 19730504 2007012028</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body></html>