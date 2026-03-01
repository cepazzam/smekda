<div class="mt-5">
             <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-primary">Berita Terbaru </h4>
              <a href=""> <span class="badge bg-dark shadow float-end">Lebih Banyak Berita</span></a>
               </div>
              <ul class="list-unstyled">
                @foreach ($newslist as $item)
                    
               
                <li>
                  <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                    href="{{route('read',$item->slug)}}"
                  >
                   <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->title}}" width="100" height="100">
                    <div class="col-lg-8">
                      <h6 class="mb-0">{{$item->title}}</h6>
                      <small class="text-body-secondary"
                      
                        >{{ Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans()}}</small
                      >
                    </div>
                  </a>
                </li>
                 @endforeach
              </ul>
            </div>
