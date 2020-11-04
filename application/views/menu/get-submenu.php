<div class="swal-success" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
<div class="col-12">
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah Sub Menu
            </button>
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Menu</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>icon</th>
                    <th>Active</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                <?php foreach ($subMenus as $subMenu):  ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><?= $subMenu['menu'] ?></td>
                        <td><?= $subMenu['title'] ?></td>
                        <td><?= $subMenu['url'] ?></td>
                        <td>
                            <i class="nav-icon <?= $subMenu['icon'] ?>"></i>
                        </td>
                        <td><?= $subMenu['is_active'] ?></td>
                        
                        <td>
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

