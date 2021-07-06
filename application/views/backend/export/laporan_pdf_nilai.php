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
<h4><center><b>DAFTAR NILAI ULANGAN SEMESTER 2020/<?= date("Y")?></b></center></h4>
        <table class="table table-bordered border-primary" border="1" width="100%">
            <tr>
              <th class="text-center" style="vertical-align:middle; text-align:center;">No.</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">NIS</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">
                NAMA SISWA(i)
              </th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">KELAS</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">P/L</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">SEMESTER</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TAHUN AJARAN</th>
              <th style="vertical-align:middle; text-align:center;">NILAI MATEMATIKA</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TANGGAL BUAT
              </th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TANGGAL UPDATE
              </th>
            </tr>
            <?php 
                  $no = 1;
                  foreach ($data_nilai as $nilai):
                  ?>
            <tr>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $no++;?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['nis'];?></td>
              <td><?= $nilai['nama'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['nama_kelas'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['jenis_kelamin'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['semester'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['tahun'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['nilai_mtk'];?>
              </td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['created_at'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['updated_at'];?></td>

            </tr>
            <?php endforeach;?>
        </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body></html>