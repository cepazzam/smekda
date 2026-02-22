@extends('admin.layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('dist')}}/vendor/summernote/summernote-bs4.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3>Edit Agenda</h3>
    </div>
    <div class="card-body">
        <form action="{{route('agenda.update', $agenda->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Title</label>
                    <input type="text" name="name" class="form-control" value="{{$agenda->name}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="agenda">lokasi</label>
                    <input type="text" name="location" class="form-control" value="{{$agenda->location}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="agenda">Tanggal</label>
                    <input type="date" name="date" class="form-control" value="{{$agenda->date}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Content</label>
                    <textarea name="content" id="summernote" cols="30" rows="10">
{{$agenda->content}}
                    </textarea>
                </div>
            </div>

       
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">Update</button>
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