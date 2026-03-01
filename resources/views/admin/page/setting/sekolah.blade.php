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
      <h5>{{$title}}</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('update-sekolah',$skl->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="row">
        <div class="col-md-4">
        <div class="form-group">
          <label for="judulBerita">Nama Sekolah</label>
          <input type="text" name="nm_skl" class="form-control" value="{{ $skl->nm_skl}}">
        </div>
        </div>
        <div class="col-md-8">
        <div class="form-group">
          <label for="judulBerita">Alamat</label>
          <input type="text" name="alamat" class="form-control" value="{{ $skl->alamat}}">
        </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
             <label for="judulBerita">Kode POS</label>
          <input type="text" name="pos" class="form-control" value="{{ $skl->pos}}">
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">NPSN</label>
          <input type="text" name="npsn" class="form-control" value="{{ $skl->npsn}}">
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Telp/Fax</label>
          <input type="text" name="telp_fax" class="form-control" value="{{ $skl->telp_fax}}">
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Email</label>
          <input type="text" name="email" class="form-control" value="{{ $skl->email}}">
            </div>              
            </div>

          </div>
          

       <div class="row">
          <div class="col-md-3">
            <div class="form-group">
             <label for="judulBerita">Website</label>
          <input type="text" name="website" class="form-control" value="{{ $skl->website}}">
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Nama Kepsek</label>
          <input type="text" name="kepsek" class="form-control" value="{{ $skl->kepsek}}">
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">NIP Kepsek</label>
          <input type="text" name="nip" class="form-control" value="{{ $skl->nip}}">
            </div>              
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Logo Sekolah</label>
             <button type="button" class="form-control" data-toggle="modal" data-target="#modal-logo">
              <img src="{{asset('storage/'.$skl->logo)}}" alt="" width="20"> update logo sekolah
             </button>
             
            </div>              
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Logo Facebook</label>
             <button type="button" class="form-control" data-toggle="modal" data-target="#modal-logofb">
            <img src="{{asset('storage/'.$skl->logofb)}}" alt="" width="20"> update logo facebook

             </button>
             
            </div>              
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Logo Tiktok</label>
             <button type="button" class="form-control" data-toggle="modal" data-target="#modal-logotiktok">
            <img src="{{asset('storage/'.$skl->logotiktok)}}" alt="" width="20"> update logo tiktok

             </button>
             
            </div>              
            </div>
            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Logo Instagram</label>
             <button type="button" class="form-control" data-toggle="modal" data-target="#modal-logoig">
            <img src="{{asset('storage/'.$skl->logoig)}}" alt="" width="20"> update logo instagram

             </button>
             
            </div>              
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="judulBerita">Logo Youtube</label>
             <button type="button" class="form-control" data-toggle="modal" data-target="#modal-logoyt">
            <img src="{{asset('storage/'.$skl->logoyt)}}" alt="" width="20"> update logo youtube

             </button>
             
            </div>              
            </div>

            <div class="col-md-12">
            <div class="form-group">
              <label for="judulBerita">Tagline</label>
            <input type="text" name="tagline" class="form-control" value="{{ $skl->tagline}}">
            </div>              
            </div>

            
      
      </div>
      


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>
  </div>
  
@include('admin.page.setting.logo')
@include('admin.page.setting.logofb')
@include('admin.page.setting.logotiktok')
@include('admin.page.setting.logoig')
@include('admin.page.setting.logoyt')




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