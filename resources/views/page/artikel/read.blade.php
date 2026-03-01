@extends('layout.app')
@section('content')

      

<div class="container py-5">
 <div class="row g-5">
    
        <div class="col-md-8">
        
          <article class="blog-post p-3">
            
            <h2 class="display-6 link-body-emphasis mb-3">{{$artikel->title}}</h2>
            <p class="card-text"><small class="text-muted"><span class="badge bg-info">{{$artikel->kategori}}</span> {{Carbon\Carbon::parse($artikel->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</small></p>
            
            
           <p class="mt-5">
            <img src="{{asset('storage/'.$artikel->image)}}" alt="" class="card border shadow w-25 float-start me-3">

              {!! $artikel->content !!}
            </p>
          </article>
        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem">   
           
            <div>
                <br>
              <h4 class="px-3">Baca Juga ...</h4>
              <ul class="list-unstyled mt-3">
                @foreach ($list as $item)
                    
                
                <li>
     <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
     href="{{route('read-artikel',$item->slug)}}">
    
                   
                    <div class="col-lg-8">
                      <h6 class="mb-0">{{$item->title}}</h6>
                      <small class="text-body-secondary"
                        >{{Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans()}}</small
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