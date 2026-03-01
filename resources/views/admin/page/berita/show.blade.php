@extends('admin.layout.app')
@section('content')

    <!-- Main content -->
    <a href="{{route('post.index')}}" class="btn btn-xs btn-warning mb-2"><i class="fas fa-undo"></i> Back</a>
    <section class="card p-5">
        
        <div class="row">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset('public/storage/'.$post->image)}}" alt="Photo" style="max-height: 160px;">
            </div>
            <div class="col px-4">
                <div>
                   
                       
                    <div class="float-right badge badge-warning"> Posted : {{$post->created_at}}</div>
                
                    <h3>{{$post->title}}</h3>
                   
                    <p class="mb-0">{!!$post->content!!}</p>
                </div>
                <div class="mt-5">
                    <h6>
                        Category :
                    <span class="badge badge-success">{{$post->category->name}}</span>
                </h6>
                    
                </div>
            </div>
        </div>
        
    </section>
    
  @endsection