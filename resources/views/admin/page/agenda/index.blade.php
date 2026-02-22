@extends('admin.layout.app')
@section('content')
<div class="card">
  @session('info')
  <script> window.alert('{{$value}}')</script>

  @endsession
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{$title}}</h3>

      <div class="">
        <a href="{{route('agenda.create')}}" class="btn btn-success ">Add Agendas</a>

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari-Tanggal</th>
                <th>Uraian Kegiatan</th>
                <th>Lokasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($agendas as $item)
                
            
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->content}}</td>
                <td>
                    <a href="{{route('agenda.edit',$item->id)}}" class="btn-info btn-sm">Edit</a>
                    <a href="#" data-toggle="modal" data-target="#modal-delete{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                    @include('admin.page.agenda.destroy')
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
@endsection

        