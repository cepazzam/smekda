<div class="modal fade" id="modaldelete{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h4 class="modal-title">Delete Info</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <form action="{{route('info.destroy', $item->id)}}" method="POST">
            @csrf
            @method('DELETE')                  
              
            <h5 class="align-center text-danger"><i class="fas fa-exclamation-triangle text-danger"></i> 
              Yakin Anda Menghapus data ini!!</h5>                  
            
        </div>
        <div class="modal-footer border-0 justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Delete</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>