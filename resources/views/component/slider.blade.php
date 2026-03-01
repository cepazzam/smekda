    

      <div id="myCarousel" class="carousel slide mb-2" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" class="">
            <img src="{{asset('public/storage/'.$slideractive->image)}}" alt="">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>{{$slideractive->title}}</h1>
                <p>
                 {!! Str::words($slideractive->content,20,'...')!!}
                </p>
                <p>
                  <a class="btn btn-xs btn-dark" href="{{route('read',$slideractive->slug)}}">Selengkapnya</a>
                </p>
              </div>
            </div>
          </div>
          @foreach ($slider as $item)             
       
          <div class="carousel-item">
            <img src="{{asset('public/storage/'.$item->image)}}" alt="" class="">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>{{$item->title}}</h1>
                <p>
                {!! Str::words($item->content,20,'...')!!}
                </p>
                <p>
                  <a class="btn btn-xs btn-dark" href="{{route('read',$item->slug)}}">Selengkapnya</a>
                </p>
              </div>
            </div>
          </div>
         @endforeach
          
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>