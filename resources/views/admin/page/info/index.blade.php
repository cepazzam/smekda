@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between align-items-center">
      
            <h3>{{$title}} - {{$kategori}}</h3>
            <a href="{{route('create',$kategori)}}" class="btn btn-success btn-sm">Add New info</a>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
       
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($infos as $item)
                        
                    
                    <tr>
                        <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60"></td>
                        <td>{{$item->title}}</td>
                        <td>{!!Str::limit($item->content,'50',('...'))!!}</td>
                        <td>
                            <a href="{{route('info.show', $item->id)}}" class="btn btn-success btn-xs">Detail</a> 
                            <a href="{{route('info.edit', $item->id)}}" class="btn btn-warning btn-xs">Edit</a> 
                            <a href="#" data-toggle="modal" data-target="#modaldelete{{$item->id}}" class="btn btn-danger btn-xs">Delete</a> 
                            @include('admin.page.info.destroy')

                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>

@endsection