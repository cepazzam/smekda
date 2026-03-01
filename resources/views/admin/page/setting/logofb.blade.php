
<div class="modal fade" id="modal-logofb">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logo Facebook</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form action="{{route('logo-fb',$skl->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
           <div class="form-group">
                <label for="name">URL </label>
                <input type="text" name="urlfb" class="form-control" value="{{$skl->urlfb}}" required>
                </div>
                <div class="form-group">
                <label for="name">Logo</label>
                <input type="file" name="logofb" class="form-control">
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