<div class="swal-success" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="swal-danger" data-flashdata="<?= $this->session->flashdata('msg-danger') ?>"></div>

<div class="row">
<div class="col-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Menu</h3>
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
        <?php foreach ($roles as $role):  ?>
          <tr>
            <td><?= $i ?> </td>
            <td><?= $role['role'] ?></td>
            <td>
              <a href="<?= base_url('admin/roleAccess/') . $role['id'] ?>" class="badge badge-warning">Accsess</a>
              <a href="" class="badge badge-success">edit</a>
              <a href="" class="badge badge-danger">delete</a>
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

