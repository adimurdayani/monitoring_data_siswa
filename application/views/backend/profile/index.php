<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profile User</h1>

  <div class="row">
    <div class="col-lg">
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
        </div>
        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <div class="card" style="width: 15rem;">
                <img class="img-profile rounded-circle" src="<?= base_url('asset/back/')?>img/undraw_profile.svg">
                <!-- <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the
                          card's
                          content.</p>
                      </div> -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><?= $user_session['email'];?></li>
                  <li class="list-group-item"><?= $user_session['username'];?></li>
                  <li class="list-group-item"><?= $get_user['tipe_user'];?></li>
                </ul>
              </div>
            </div>

            <div class="col-md-4">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <div class="form-input">
                      <input type="text" name="nama" id="nama" placeholder="<?= $user_session['nama']?>"
                        class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="form-input">
                      <input type="email" name="email" id="email" placeholder="<?= $user_session['email']?>"
                        class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <div class="form-input">
                      <input type="text" name="username" id="username" value="<?= $user_session['username']?>"
                        class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">User Tipe</label>
                    <div class="form-input">
                      <input type="text" value="<?= $user_session['user_id']?>" class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Jenis Kelamin</label>
                    <div class="form-input">
                      <input type="text" value="<?= $user_session['jenis_kelamin']?>" class="form-control" disabled>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <div class="col-md-5">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                </div>
                <div class="card-body">

                  <form action="<?= base_url('backend/profile/')?>" method="post">

                    <div class="form-group">
                      <label for="username">Username</label>
                      <div class="form-input">
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="jenis_kelamin" name="jenis_kelamin"
                          value="<?= $user_session['jenis_kelamin']?>">
                        <input type="text" name="username" id="username" value="<?= $user_session['username']?>"
                          class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password_lama">Password Lama</label>
                      <div class="form-input">
                        <input type="password" name="password_lama" id="password_lama"
                          value="<?= $user_session['password']?>" class="form-control" disabled>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password">Password Baru</label>
                      <div class="form-input">
                        <input type="password" name="password" id="password" class="form-control">
                      </div>
                      <?= form_error('password','<div class="text-danger small" role="alert">','</div>');?>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Show Password</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="conf_pass">Konfirmasi Password</label>
                      <div class="form-input">
                        <input type="password" name="conf_pass" id="conf_pass" class="form-control">
                      </div>
                      <?= form_error('conf_pass','<div class="text-danger small" role="alert">','</div>');?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                  </form>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->