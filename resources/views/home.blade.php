@extends('layout.app')

@section('content')
<main>
    @include('component.slider')
    @include('component.beritautama')
    

      <div class="container px-4 py-2">
     
      <div
          class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-2"
        >
          <div class="col d-flex flex-column align-items-start position-relative gap-2 ">
                      

            
              
              <a href="" class="text-body-secondary position-absolute top-0 start-0 z-3 ms-5 mt-2">
              <span class="badge bg-dark shadow mb-3">Selengkapnya Profil Sekolah</span>
              </a>
              <img src="{{asset('storage/'.$utama->image)}}" class="card-img card shadow" alt="">
             
            
            
          </div>
          
          <div class="col card">
            <span class="badge bg-dark shadow border col-3 my-3">Guru Menulis</span>
            <div class="d-flex py-3">
              <img src="{{asset('storage/'.$artikel->image)}}" alt="smekda"  class="me-4 p-2 border img-resposive" width="200">
              <article class="pe-3">
                <h5>{{$artikel->title}}</h5>
                {!! Str::words($artikel->content,60,'...')!!}
                <a href="{{route('read-artikel',$artikel->slug)}}" class="nav-link float-end"><span class="badge bg-secondary">Selengkapnya >></span></a>
               
              </article>
            </div>
      
          </div>
      </div>
      @include('component.galeri')
</main>
@endsection