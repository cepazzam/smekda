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
      <h5>News Post</h5>
      <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus-circle"></i> Add Category</button>
               <div class="dropdown">
                                        <button class="btn btn-danger mx-2 btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-minus-circle"></i> Delete Category
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            @foreach ($categories as $item)
                                               <a class="dropdown-item" href="{{url('admin/page/post/category', $item->id)}}" onclick="return confirm('yakin menghapus kategori!?')">{{$item->name}}</a> 
                                            @endforeach
                                            
                                            </div>
                                    </div>
            </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value={{ old('title')}}>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Kategori</label>
              
            </div>
              <select class="form-control select2bs4" style="width: 100%;" name="category_id" required>

                <option selected="selected">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
 <option value="{{ $category->id
}}">{{ $category->name }}</option>
 @endforeach

               
              </select>
            </div>
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputFile">News Position</label>
                      <div class="input-group">
                       <select name="position" id="" class="form-control">
                        <option value="" selected>-- select --</option>
                        <option value="slider">News Slider</option>
                        <option value="headline">News Headline</option>
                        <option value="latest">News Latest</option>

                       </select>
                      </div>
          
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="form-control btn btn-info" id="exampleInputFile" name="image">
                        </div>
                      </div>          
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
  

@include('admin.page.berita.kategori.create')
@include('admin.page.berita.kategori.index')


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