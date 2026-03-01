@extends('admin.layout.app')
@section('content')

    <!-- Main content -->
    <a href="#" onclick="history.back()" class="btn btn-xs btn-warning mb-2"><i class="fas fa-undo"></i> Back</a>
    <section class="card p-5">
        
        <div class="row">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset('public/storage/'.$info->image)}}" alt="Photo" style="max-height: 160px;">
            </div>
            <div class="col px-4">
                <div>
                   
                       
                    <div class="float-right badge badge-warning"> Posted : {{$info->created_at}}</div>
                
                    <h3>{{$info->title}}</h3>
                   
                    <p class="mb-0">{!!$info->content!!}</p>
                </div>
                <div class="mt-5">
                    <h6>
                        Category :
                    <span class="badge badge-success">{{$info->kategori}}</span>
                </h6>
                    
                </div>
            </div>
        </div>
        
    </section>
    
  @endsection