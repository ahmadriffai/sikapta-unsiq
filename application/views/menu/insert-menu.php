<div class="col-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Menu</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="menu">Menu</label>
                <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter Menu">
            </div>
            <small class="form-text text-danger"><?= form_error('menu') ?></small>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>

        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</div>
          
</div>