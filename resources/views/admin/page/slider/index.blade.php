@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="">
        <a href="{{route('slider.create')}}" class="btn btn-success ">Add New Slider</a>

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <div class="row gx-2">
             @foreach($sliders as $slider)
              <div class="col-md-2 px-2">
              <div class="card shadow-sm">
            <img src="{{ asset('public/storage/'.$slider->image)}}"  class="bd-placeholder-img card-img-top" height="120">
           
                  
                  <p class="card-text p-2">
                    {!!Str::limit($slider->title, 50, ('...'))!!}
                  </p> 
                
                    <div class="btn-group w-50 mx-auto">
            <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-sm btn-success">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{route('slider.show', $slider->id)}}" class="btn btn-sm btn-warning">
              <i class="fas fa-search"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaldelete{{$slider->id}}">
              <i class="fas fa-trash"></i>
            </button>
            @include('admin.page.slider.destroy')
          </div>
                    <small class="text-body-secondary">{{$slider->created_at}}</small>
                
                </div>
              </div>
              @endforeach
       </div>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
@endsection

        