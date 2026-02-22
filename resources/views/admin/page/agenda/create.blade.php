@extends('admin.layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('dist')}}/vendor/summernote/summernote-bs4.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3>{{$title}}</h3>
        <a href="{{route('agenda.create')}}" class="btn btn-success btn-sm">Add Agenda</a>
    </div>
    <div class="card-body">
        <form action="{{route('agenda.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Title</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="agenda">lokasi</label>
                    <input type="text" name="location" class="form-control" value="{{old('location')}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="agenda">Tanggal</label>
                    <input type="date" name="date" class="form-control" value="{{old('location')}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Content</label>
                    <textarea name="content" id="summernote" cols="30" rows="10">

                    </textarea>
                </div>
            </div>

        
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">Simpan</button>
        <button class="btn btn-danger" type="reset">Reset</button>

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