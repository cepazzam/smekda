@extends('layout.app')
@section('content')

      

<div class="container py-5">
 <div class="row g-5">
    
        <div class="col-md-8">
        
          <article class="blog-post">
            <h2 class="display-6 link-body-emphasis mb-3">{{$read->title}}</h2>
            <p class="card-text"><small class="text-muted">Posted: {{Carbon\Carbon::parse($read->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</small></p>
            
                <img src="{{asset('storage/'.$read->image)}}" alt="" class="card border shadow w-100">
            
           <p class="mt-5">
              {!! $read->content !!}
            </p>
          </article>
        </div>

        <div class="col-md-4 ">
          <div class="position-sticky" style="top: 2rem">            
              <img src="{{asset('storage/'.$sambutan->image)}}" alt="" class="w-100 card shadow border">
           
            <div>
                <br>
              <h4 class="mt-5">Berita lainnya</h4>
              <ul class="list-unstyled mt-3">
                @foreach ($newslist as $item)
                    
                
                <li>
     <a class="d-flex flex-row flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
     href="{{route('read',$item->slug)}}">
     <img src="{{asset('storage/'.$item->image)}}" alt="" class="bd-placeholder-img "
                      height="96"  width="100">
                   
                    <div class="col-lg-8">
                      <h6 class="mb-0">{{$item->title}}</h6>
                      <small class="text-body-secondary"
                        >{{Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</small
                      >
                    </div>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
 </div>
</div>
@endsection