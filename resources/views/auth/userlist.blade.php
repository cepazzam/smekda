@extends('admin.layout.app')
@section('content')

<div class="card">
    @session('info')
    <div class="alert alert-success">{{$value}}</div>
    @endsession
    <div class="card-header d-flex justify-content-between">
        <h5>User List</h5>
        <a href="{{url('registrasi')}}" class="btn btn-success btn-sm">Add User</a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th><th>Nama</th><th>Username</th><th>Role</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($user as $item)
                    
                
                <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->is_role}}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm">Edit</a>
                     <a href="{{route('userdelete',$item->id)}}" onclick="return confirm('yakin anda menghapus data ini')" class="btn btn-danger btn-sm">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection