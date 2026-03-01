@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="btn btn-success btn-sm">
        <a href="#" data-toggle="modal" data-target="#modal-galeri" class="btn btn-success ">Add New Photo</a>
        @include('admin.page.galeri.create')
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="row gx-2">
             @foreach($photos as $photo)
              <div class="col-md-2 px-2">
              <div class="card shadow-sm">
            <img src="{{ asset('storage/'.$photo->image)}}"  class="bd-placeholder-img card-img-top" height="120">
           
                  
                  <p class="card-text p-2">
                    {!!Str::limit($photo->caption, 50, ('...'))!!}
                  </p> 
                
                    <div class="btn-group w-50 mx-auto">
            <a href="#" data-toggle="modal" data-target="#modal-galeriedit{{$photo->id}}" class="btn btn-sm btn-success">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{route('photo.show', $photo->id)}}" class="btn btn-sm btn-warning">
              <i class="fas fa-search"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaldelete{{$photo->id}}">
              <i class="fas fa-trash"></i>
            </button>
            @include('admin.page.galeri.destroy')
            @include('admin.page.galeri.edit')

          </div>
                    <small class="text-body-secondary">{{$photo->created_at}}</small>
                
                </div>
              </div>
              @endforeach
       </div>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
@endsection

        