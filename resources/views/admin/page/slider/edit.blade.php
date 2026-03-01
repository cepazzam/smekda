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
      <h5>News Sliders</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ $slider->title}}">
        </div>
        <div class="form-group col-md-3">
          <label for="judulBerita">Gambar</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group col-md-3">
          <label for="judulBerita">Text Position</label>
          <select name="textpos" class="form-control">
            @if($slider->textpos == 'text-start')
            <option value="{{$slider->textpos}}" selected>Kiri</option>
            @elseif($slider->textpos == 'text-center')
            <option value="{{$slider->textpos}}" selected>Tengah</option>
            @else
            <option value="text-end" selected>Kanan</option>
            @endif
            <option value="text-start">Kiri</option>
            <option value="text-center">Tengah</option>
            <option value="text-end">Kanan</option>
          </select>
        </div>
      </div>
        
      <div class="row">
          <div class="form-group col-md-12">
          <div class="form-group">
          <label for="konten">Konten</label>
          
            <textarea id="summernote" name="content" class="form-control">
                {{$slider->content}}
            </textarea>
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