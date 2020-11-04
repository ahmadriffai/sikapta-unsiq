<div class="swal-success" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
<div class="col-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Role Akses : <?= $role['role'] ?></h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Menu</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        <?php foreach ($menus as $menu):  ?>
          <tr>
            <td><?= $i ?> </td>
            <td><?= $menu['menu'] ?></td>
            <td>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox<?= $menu['id'] ?>" <?= check_akses($role['id'], $menu['id']) ?> data-role="<?= $role['id'] ?>" data-menu="<?= $menu['id'] ?>">
                <label for="customCheckbox<?= $menu['id'] ?>" class="custom-control-label" ></label>
              </div>
            </td>
          </tr>
        <?php $i++ ?>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
      <!-- /.card-body -->
  </div>
    <!-- /.card -->
</div>

