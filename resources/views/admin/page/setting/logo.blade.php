
<div class="modal fade" id="modal-logo">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form action="{{route('logo-sekolah',$skl->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
            <div class="form-group">
                <label for="name">Caption</label>
                <input type="file" name="logo" class="form-control" required>
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