<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">



            <form action="<?= base_url('menu/insertSubMenu') ?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Menu</label>
                    <select class="custom-select" name="menu_id">
                        <option>Select Menu</option>
                        <?php  foreach($menus as $menu): ?>
                            <option value="<?= $menu['id'] ?>"><?= $menu['menu'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" name="url" class="form-control" id="url" placeholder="Enter url">
                </div>
                <div class="form-group">
                    <label for="icon">icon</label>
                    <input type="text" name="icon" class="form-control" id="icon" placeholder="Enter icon">
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="is_active" type="checkbox" id="customCheckbox2" checked>
                    <label for="customCheckbox2" class="custom-control-label">Active?</label>
                </div>
                <br>
            
    
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->