
<div class="modal fade" id="modal-widget">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-dark">Add New widget</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('widget.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="name">Image</label>
            <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="name">Kategori</label>
            <select name="kategori" id="" class="form-control">
                <option value="" selected>--pilih kategori--</option>
                <option value="quotes">Quotes</option>
                <option value="agenda">Agenda Harian</option>
            </select>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->