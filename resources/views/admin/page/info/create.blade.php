@extends('admin.layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('dist')}}/vendor/summernote/summernote-bs4.min.css">
@endsection
@section('content')

  <!-- general form elements -->
  <div class="card card-primary">
    @session('info')
    <script> window.alert('{{$value}}')</script>
    @endsession
    <div class="card-header d-flex justify-content-between">
      <h5>News Info {{$kategori}}</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('info.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="kategori" value="{{$kategori}}">
      <div class="card-body">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ old('title')}}">
        </div>
        <div class="form-group col-md-3">
          <label for="judulBerita">Gambar</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group col-md-3">
          <label for="judulBerita">Kategori</label>
          <input type="text"  class="form-control" value="{{$kategori}}" disabled>
           
        </div>
      </div>
        
      <div class="row">
          <div class="form-group col-md-12">
          <div class="form-group">
          <label for="konten">Konten</label>
          
            <textarea id="summernote" name="content" class="form-control"></textarea>
          </div>
          </div>
      </div>

      <div class="row">
       
        </div>
      
      </div>
      


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>
  </div>
  


@endsection
@section('js')
<script src="{{asset('dist')}}/vendor/summernote/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write your content here...',
                tabsize: 2,
                height: 200,
            lineHeight :1.0
            });
        });
</script>
@endsection