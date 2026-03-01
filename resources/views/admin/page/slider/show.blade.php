@extends('admin.layout.app')
@section('content')

    <!-- Main content -->
    <a href="{{route('slider.index')}}" class="btn btn-xs btn-warning mb-2"><i class="fas fa-undo"></i> Back</a>
    <section class="card p-5">
        
        <div class="row">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset('public/storage/'.$slider->image)}}" alt="Photo" style="max-height: 160px;">
            </div>
            <div class="col px-4">
                <div>
                   
                       
                    <div class="float-right badge badge-warning"> Posted : {{$slider->created_at}}</div>
                
                    <h3>{{$slider->title}}</h3>
                   
                    <p class="mb-0">{!!$slider->content!!}</p>
                </div>
               
            </div>
        </div>
        
    </section>
    
  @endsection