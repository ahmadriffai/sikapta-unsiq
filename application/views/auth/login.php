
<?= $this->session->flashdata('msg'); ?>

<div class="login-box mx-auto mt-5">
  <div class="login-logo">
    <img src="<?= base_url('assets') ?>/img/icon.png" class="img-circle img-fluid" width="100px" alt=""><br>
    
    <a href="../../index2.html">SIKAPTA UNSIQ</a>
  </div>
  <!-- /.login-logo -->
  <div class="card shadow">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Sikapta</p>

      <form action="<?= base_url('auth') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nim" class="form-control" placeholder="Nomer Identitas">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('nim') ?></small>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('password') ?></small>
        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p class="mb-0">
            <a href="<?= base_url('auth/register') ?> " class="text-center">Registrasi</a>
        </p>
        </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
