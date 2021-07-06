<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login admin</h1>
                  <?= $this->session->flashdata('message');?>
                </div>
                <form class="user" action="<?= base_url('auth/login')?>" method="post">

                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" id="username" name="username"
                        value="<?= set_value('username');?>" placeholder="Username">
                    </div>
                    <?= form_error('username','<div class="text-danger small" role="alert">','</div>');?>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <?= form_error('password','<div class="text-danger small" role="alert">','</div>');?>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Show Password</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>