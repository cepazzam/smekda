@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="btn btn-success btn-sm">
        <a href="#" data-toggle="modal" data-target="#modal-widget" class="btn btn-success ">Add New widget</a>
        @include('admin.page.widget.create')
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="row gx-2">
             @foreach($widgets as $widget)
              <div class="col-md-2 px-2">
              <div class="card shadow-sm">
            <img src="{{ asset('storage/'.$widget->image)}}"  class="bd-placeholder-img card-img-top" height="120">
           
                  
                  <p class="card-text p-2">
                    {!!Str::limit($widget->kategori, 50, ('...'))!!}
                  </p> 
                
                    <div class="btn-group w-50 mx-auto">
            <a href="#" data-toggle="modal" data-target="#modal-widgetedit{{$widget->id}}" class="btn btn-sm btn-success">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{route('widget.show', $widget->id)}}" class="btn btn-sm btn-warning">
              <i class="fas fa-search"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaldelete{{$widget->id}}">
              <i class="fas fa-trash"></i>
            </button>
            @include('admin.page.widget.destroy')
            @include('admin.page.widget.edit')

          </div>
                    <small class="text-body-secondary">{{$widget->created_at}}</small>
                
                </div>
              </div>
              @endforeach
       </div>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
@endsection

        