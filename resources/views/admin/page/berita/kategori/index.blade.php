
<div class="modal fade" id="modal-listcategory">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">LIST CATEGORIES</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            
                    @foreach ($categories as $category)
                    <div class="d-flex justify-content-between align-items-center my-1 px-5 border-bottom">
                    <p>{{$category->name}}</p>
                    <form action="{{route('category.destroy', $category->id)}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin menghapus')"></button>
                    </form>
                    @endforeach
               
          
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->