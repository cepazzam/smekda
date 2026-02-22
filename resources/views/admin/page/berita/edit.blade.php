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
      <h5>Edit Post</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
       @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ $post->title}}">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Kategori</label>
              <div>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-listcategory"><i class="fas fa-minus-circle"></i> del</button>
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus-circle"></i> add</button>
                </div>
            </div>

                <select class="form-control select2bs4" style="width: 100%;" name="category_id">
                                @foreach ($categories as $category)
                                    @if ($post->category_id == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>

               
             
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                          <img src="{{ asset('storage/'.$post->image)}}" width="100" alt="">
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
          
            <textarea id="summernote" name="content" class="form-control">
                {{$post->content}}
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