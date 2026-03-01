
<div class="modal fade" id="modal-video">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-dark">Add Youtube Video</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('video.store')}}" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="name">Video Embed</label>
            <input type="text" name="embed" value="{{old('embed')}}" class="form-control" required>
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