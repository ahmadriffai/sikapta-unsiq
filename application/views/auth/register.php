
<div class="login-box mx-auto mt-5">
    <div class="login-logo">
        <a href="../../index2.html">SIKAPTA UNSIQ</a>
    </div>
    <?= $this->session->flashdata('msg'); ?>
  <!-- /.login-logo -->
    <div class="card shadow">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Daftar Akun Sikapta</p>

        <form action="<?= base_url('auth/register'); ?>" method="post">

        <!--  -->
        <div class="input-group mb-3">
            <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" value="<?= set_value('nim'); ?>">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
            </div>
        </div>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('nim') ?></small>

        <div class="input-group mb-3">
            <input type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <small id="emailHelp" class="form-text text-danger"><?= form_error('email') ?></small>


        <div class="input-group mb-3">
            <input type="password" name="password1" class="form-control" placeholder="Password">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>

        <small id="emailHelp" class="form-text text-danger"><?= form_error('password1') ?></small>


        <div class="input-group mb-3">
            <input type="password" name="password2" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>

        <small id="emailHelp" class="form-text text-danger"><?= form_error('password2') ?></small>

        <!--  -->
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
