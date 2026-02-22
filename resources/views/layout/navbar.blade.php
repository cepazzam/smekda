
@section('css')
<style>


</style>

@endsection

     <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark"
        aria-label="Offcanvas navbar large" style="z-index:99999"
      >
        <div class="container py-2">
          <div>
            <img src="{{asset('storage/'.$skl->logo)}}" class="me-2" alt="smkn2 pwk" width="40">
          <a class="navbar-brand fs-3 fw-bolder" href="#">{{$skl->nm_skl}}</a>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar2"
            aria-controls="offcanvasNavbar2"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end text-bg-dark"
            tabindex="-1"
            id="offcanvasNavbar2"
            aria-labelledby="offcanvasNavbar2Label"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
                SMKN 2 PURWAKARTA
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav ms-auto pe-1">
                <li class="nav-item mx-1 px-2">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}"
                    >Beranda</a
                  >
                </li>
                <li class="nav-item mx-1 px-2"><a class="nav-link active" href="#">Profil</a></li>
                <li class="nav-item mx-1 px-2"><a class="nav-link active" href="#">Agenda</a></li>
                <li class="nav-item dropdown mx-1 px-2">
                  <a
                    class="nav-link dropdown-toggle active"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Konsentrasi Keahlian
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Manajemen Perkantoran</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Akuntansi Keuangan</a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item" href="#">Bisnis Digital</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Bisnis Ritel</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Desain dan Produksi Busana</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Teknik Komputer dan Jaringan</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item bg-success rounded-2 shadows px-2 mx-1">
                 <a href="" class="nav-link active">Panca Waluya</a>
                </li>
                <li class="nav-item bg-danger rounded-2 shadows px-2 mx-1">
                 <a href="" class="nav-link active">SPMB 2026</a>
                </li>
              </ul>
             
            </div>
          </div>
        </div>
      </nav>

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
  
   $(document).on('click','ul  li',function(){
    $(this).addClass('bg-warning  rounded-2 shadows px-2').siblings().removeClass('bg-warning')
  })
</script>

@endsection