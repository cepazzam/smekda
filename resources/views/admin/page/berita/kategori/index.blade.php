
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

            <table>
                <thead>
                    <tr><th>Category Name</th><th>ACtion</th></tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr><td><span class="btn btn-outline-success btn-block">{{$category->id}}{{$category->name}}</span> </td><td><a href="" onclick="return confirm('yakin menghapus')"><i class="fas fa-trash"></i>delete</a></td></tr>
                    @endforeach
                </tbody>
            </table>
          
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->