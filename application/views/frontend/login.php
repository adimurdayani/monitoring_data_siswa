<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="pageTitle">Login</h2>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">

    <div class="about">

      <div class="row">
        <div class="col-md-12">
          <div class="about-logo">
            <h3>Login<span class="color"> siswa</span></h3>


            <div class="row">
              <div class="col-lg-5">
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Login</h4>
                  <?= $this->session->flashdata('message');?>
                  <form action="<?= base_url('login_siswa')?>" method="POST">

                    <div class="form-group">
                      <label for="nis">NIS</label>
                      <div class="form-input">
                        <input type="text" class="form-control" name="nis" value="<?= set_value('nis')?>" id="nis">
                      </div>
                      <?= form_error('nis', '<div class="text-danger small" role="alert">','</div>')?>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <div class="form-input">
                        <input type="password" class="form-control" name="password" id="password">
                      </div>
                      <?= form_error('password', '<div class="text-danger small" role="alert">','</div>')?>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="custom-control-input" type="checkbox" value="" id="password">
                        <label class="form-check-label" for="password">
                          Show password
                        </label>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                  </form>
                  <hr>
                  <p class="text-justify mb-0"><strong>Catatan:</strong><br>
                    Form ini digunakan untuk melihat monitoring kehadiran dan nilai siswa SMP Negeri 4 Baebunta, <br>
                    siswa yang ingin melihat fitur tersebut harus menginputkan <b>Nama</b> dan <b>NISN</b> agar bisa
                    mengakses fitur tersebut.</p>
                </div>
              </div>

              <div class="col-lg-7">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15940.415620707796!2d120.2454663!3d-2.7855936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1d9aeec1ad88756!2sUPT%20SMP%20NEGERI%204%20BAEBUNTA!5e0!3m2!1sid!2sid!4v1620463173782!5m2!1sid!2sid"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p><strong>Maps Lokasi SMP Negeri 4 Baebunta</strong></p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <hr>
      <br>

      <div class="row">
        <div class="col-md-4">
          <!-- Heading and para -->
          <div class="block-heading-two">
            <h3><span>Kontak</span></h3>
          </div>
          Alamat : DESA MARIO<br>
          RT / RW : 0 / 0<br>
          Dusun : Mario<br>
          Desa / Kelurahan : Mario<br>
          Kecamatan : Kec. Baebunta<br>
          Kabupaten : Kab. Luwu Utara<br>
          Provinsi : Prov. Sulawesi Selatan<br>
          Kode Pos : 92965<br>
          Lintang : -2<br>
          Bujur : 120 <br>
          <i class="icon-phone"></i> Website: http://www.smpn4baebunta.com <br>
          <i class="icon-envelope-alt"></i>Email: rikotu90@gmail.com
        </div>
        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Identitas Sekolah</span></h3>
          </div>
          <ul class="link-list">
            <li><b>NPSN : 69761717</b> </li>
            <li><b>Status : Negeri</b></li>
            <li><b>Bentuk Pendidikan : SMP</b></li>
            <li><b>Status Kepemilikan : Pemerintah Daerah</b></li>
            <li><b>SK Pendirian Sekolah : 188.4.45/125/I/2018</b></li>
            <li><b>Tanggal SK Pendirian : 2018-02-01</b></li>
            <li><b>SK Izin Operasional : 188.4.45/125/I/2018</b></li>
            <li><b>Tanggal SK Izin Operasional : 2018-02-01</b></li>
          </ul>

        </div>

        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Data Rinci</span></h3>
          </div>
          <ul class="link-list">
            <li><b>Status BOS : Bersedia Menerima</b></li>
            <li><b>Waku Penyelenggaraan : Pagi</b></li>
            <li><b>Sertifikasi ISO : 9001:2000</b></li>
            <li><b>Sumber Listrik : PLN</b></li>
            <li><b>Daya Listrik : 900</b></li>
            <li><b>Akses Internet : Tidak Ada</b></li>
          </ul>
        </div>

      </div>



      <br>
      <!-- Our Team starts -->

      <!-- Heading -->
      <div class="block-heading-six">
        <h4 class="bg-color">Guru</h4>
      </div>
      <br>

      <!-- Our team starts -->

      <div class="team-six">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_1.svg" alt="">
              <!-- Name -->
              <h4>Hj. Rabaiyah, S.Ag</h4>
              <span class="deg">Kepala Sekolah</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_2.svg" alt="">
              <!-- Name -->
              <h4>Hiderana, S.Pd.</h4>
              <span class="deg">Guru Kelas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_3.svg" alt="">
              <img class="img-responsive" src="img/team3.jpg" alt="">
              <!-- Name -->
              <h4>Drs. Indar</h4>
              <span class="deg">Guru Kelas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_1.svg" alt="">
              <!-- Name -->
              <h4>Masrial.S.Pd</h4>
              <span class="deg">Kepala Perpustakaan</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Our team ends -->


    </div>

  </div>
</section>