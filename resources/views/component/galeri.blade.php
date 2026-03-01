
 <div class="b-example-divider"></div>
      <div class="container px-0 py-5" id="custom-cards">
        <span class="badge bg-dark shadow">Galeri Aktivitas</span>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          @foreach ($galeri as $item)
          <div class="col">
            <div
              class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
              style="background-image: url({{asset('public/storage/'.$item->image)}})"
            >
              <div
                class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"
              >
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                  {{$item->caption}}
                </h3>
                <ul class="d-flex list-unstyled mt-auto">
                  
                     <li class="me-auto">
                    <img
                      src="{{asset('public/storage/'.$skl->logo)}}"
                      alt="Bootstrap"
                      width="32"
                      height="32"
                      class="rounded-circle border border-white"
                    />
                  </li>  
                 
                 
                 
                  <li class="d-flex align-items-center">
                   
                                        <small>{{Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('D MMMM Y')}}</small>

                  </li>
                </ul>
              </div>
            </div>
          </div>

 @endforeach
          
        </div>
      </div>