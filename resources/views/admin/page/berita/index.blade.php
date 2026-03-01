@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="">
        <a href="{{route('post.create')}}" class="btn btn-success ">Add News</a>

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="row gx-2">
             @foreach($posts as $post)
              <div class="col-md-2 px-2">
              <div class="card shadow-sm">
                <div class="d-flex justify-content-between">
             <span class="badge bg-info text-light d-block mb-2">{{$post->category->name}}</span>
            <span class="badge bg-warning text-light d-block mb-2">{{$post->position}}</span>
                  </div>
            <img src="{{ asset('public/storage/'.$post->image)}}"  class="bd-placeholder-img card-img-top" height="120">
           
                  
                  <h6 class="card-text p-2">
                    {!!Str::limit($post->title, 50, ('...'))!!}
                  </h6> 
                
          <div class="btn-group w-50 mx-auto mb-2">
            <a href="{{route('post.edit', $post->id)}}" class="btn btn-sm btn-success">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{route('post.show', $post->id)}}" class="btn btn-sm btn-warning">
              <i class="fas fa-search"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaldelete{{$post->id}}">
              <i class="fas fa-trash"></i>
            </button>
            @include('admin.page.berita.destroy')
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

        