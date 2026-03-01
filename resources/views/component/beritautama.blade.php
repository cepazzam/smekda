<div class="container px-4 py-5">
      <div class="row g-5">
        <div class="col-md-8">
          
<article class="blog-post card p-3 shadow">
  <div class="row g-5">
    <div class="col-md-6 py-3">
              <span class="badge bg-dark shadow mb-2">Utama</span>

      <img src="{{asset('storage/'.$utama->image)}}" class="img-fluid rounded-start" alt="...">
      <small class="text-italic">Foto: smkn 2 purwakarta/dok-foto</small>
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h3 class="card-title">{{$utama->title}}</h3>
        <p class="card-text"><small class="text-muted">Posted: {{Carbon\Carbon::parse($utama->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</small></p>

        <p class="card-text">{!! Str::words($utama->content,50, '...')!!}
          <a href="{{route('read',$utama->slug)}}" class="nav-link float-end"><span class="badge bg-secondary">Selengkapnya >></span></a>
        </p>
      </div>
    </div>
  </div>
</article>
<div class="row g-5">
        <div class="col-md-12">
  <div class="row g-5">
          <div class="col-md-7">
         @include('component.newslist')        
        </div> 
        <div class="col-md-5">
         @include('component.quotes')        
        </div> 
  </div>
</div> 
</div>
        
        
       
        
<div class="card shadow-sm mt-5">
  <iframe 
src="https://www.youtube.com/embed/{{ $yt->embed }}" class="bd-placeholder-img card-img-top" height="400" frameborder="0" 
allowfullscreen ></iframe>
  </div>

        </div>
        <div class="col-md-4">
         @include('component.kepsek')
        </div>
      </div>
      
      </div>
        