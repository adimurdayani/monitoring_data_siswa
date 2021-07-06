<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Document</title>
</head><body>
        <table class="table table-bordered border-primary" border="1">
            <tr>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Aksi
              </th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">No.</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NJP</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Nama</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Pendidikan
                Terkahir</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">L/P
              </th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NUPTK</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NRG</th>
              <th colspan="2" class="text-center" style="vertical-align:middle; text-align:center;">Status
                Sertifikasi</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">No. Sertifikat
              </th>
              <th class="text-center" colspan="5" style="vertical-align:middle; text-align:center;">Melaksanakan
                Tugas Mengajar dan Tugas Lain Sesuai SK</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Keterangan
              </th>
            </tr>

            <tr>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Sudah</th>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Belum</th>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Mapel yang diajarkan dan Tugas
                Lain</th>
              <th style="vertical-align:middle; text-align:center;" colspan="4">Kelas dan Jam</th>
            </tr>
            <tr>
              <th style="vertical-align:middle; text-align:center;">VII</th>
              <th style="vertical-align:middle; text-align:center;">VIII</th>
              <th style="vertical-align:middle; text-align:center;">IX</th>
              <th style="vertical-align:middle; text-align:center;">Jumlah</th>
            </tr>
            <?php
                  $total = 0;
                  $no = 1;
                  foreach ($data_guru as $guru):
                  ?>
            <tr>
              <td style="vertical-align:middle; text-align:center;">

                <a href="javascript:;" data-id="<?= $guru['id'];?>" data-njp="<?= $guru['njp'];?>"
                  data-nama="<?= $guru['nama'];?>" data-pendterakhir="<?= $guru['pend_terakhir'];?>"
                  data-kelamin="<?= $guru['jenis_kelamin'];?>" data-nuptk="<?= $guru['nuptk'];?>"
                  data-nrg="<?= $guru['nrg'];?>" data-statussertifikasi="<?= $guru['status_sertifikasi'];?>"
                  data-nosertifikasi="<?= $guru['no_sertifikasi'];?>" data-mapel="<?= $guru['mapel'];?>"
                  data-kelasvii="<?= $guru['kelas_vii'];?>" data-kelasviii="<?= $guru['kelas_viii'];?>"
                  data-kelasix="<?= $guru['kelas_ix'];?>" data-keterangan="<?= $guru['keterangan'];?>"
                  class="badge badge-warning" data-toggle="modal" data-target="#updateguru"><i
                    class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/data_guru/delete_guru/') . $guru['id'] ?>" class="badge badge-danger"><i
                    class="fas fa-fw fa-trash"></i></a>

              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $no++; ?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['njp'];?></td>
              <td style="vertical-align:middle;"><?= $guru['nama'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['pend_terakhir'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['jenis_kelamin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['nuptk'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['nrg'];?></td>
              <td style="vertical-align:middle; text-align:center;">
                <div class="form-check">
                  <?php if($guru['status_sertifikasi'] != 1):?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                  <?php else:?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                  <?php endif;?>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;">
                <div class="form-check">
                  <?php if($guru['status_sertifikasi'] != 0):?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                  <?php else:?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                  <?php endif;?>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['no_sertifikasi'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['mapel'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_vii'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_viii'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_ix'];?></td>
              <td style="vertical-align:middle; text-align:center;">
                <?= $guru['kelas_vii']+$guru['kelas_viii']+$guru['kelas_ix'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['keterangan'];?></td>

            </tr>
            <?php endforeach;?>
        </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body></html>