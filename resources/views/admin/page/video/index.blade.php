@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="btn btn-success btn-sm">
        <a href="#" data-toggle="modal" data-target="#modal-video" class="btn btn-success ">Add New video</a>
        @include('admin.page.video.create')
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="row gx-2">
             @foreach($videos as $video)
              <div class="col-md-2 px-2">
              <div class="card shadow-sm">
                <iframe 
src="https://www.youtube.com/embed/{{ $video->embed }}" class="bd-placeholder-img card-img-top" height="120" frameborder="0" 
allowfullscreen ></iframe>
           
                  
                  <p class="card-text p-2">
                    {!!Str::limit($video->title, 50, ('...'))!!}
                  </p> 
                
                    <div class="btn-group w-50 mx-auto">
            <a href="#" data-toggle="modal" data-target="#modal-videoedit{{$video->id}}" class="btn btn-sm btn-success">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{route('video.show', $video->id)}}" class="btn btn-sm btn-warning">
              <i class="fas fa-search"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaldelete{{$video->id}}">
              <i class="fas fa-trash"></i>
            </button>
            @include('admin.page.video.destroy')
            @include('admin.page.video.edit')

          </div>
                
                </div>
              </div>
              @endforeach
       </div>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
@endsection

        