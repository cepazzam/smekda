
<div class="bg-green p-3 navbar-custom">
  <div class="container d-flex justify-content-between align-items-center px-3">
  <small class="text-light"><i class="fa fa-envelope"></i>  {{$skl->email}} - <i class="fa fa-phone"></i> {{$skl->telp_fax}}</small>
  <div class="d-flex gap-3 ">
     <a href="{{$skl->urlyt}}"><img src="{{asset('storage/'.$skl->logoyt)}}"  alt="" width="25"></a>
     <a href="{{$skl->urlig}}" target="_blank"><img src="{{asset('storage/'.$skl->logoig)}}"  alt="" width="25"></a>
     <a href="{{$skl->urltiktok}}" target="_blank"><img src="{{asset('storage/'.$skl->logotiktok)}}"  alt="" width="25"></a>
     <a href="{{$skl->urlfb}}" target="_blank"><img src="{{asset('storage/'.$skl->logofb)}}"  alt="" width="25"></a>

  </div>
  </div>

</div>
     <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top border-bottom border-warning border-2"
        aria-label="Offcanvas navbar large" style="z-index:99999"
      >
        <div class="container py-2">
          <div>
            <img src="{{asset('storage/'.$skl->logo)}}" class="me-2" alt="smkn2 pwk" width="30">
          <a class="navbar-brand fs-5 shadow" href="#">{{$skl->nm_skl}}</a>
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
                <li class="nav-item mx-1 px-1">
                  <a id="cep" class="nav-link btn btn-secondary btn-sm text-light" href="{{route('home')}}"
                    >Beranda</a
                  >
                </li>
                <li class="nav-item mx-1 px-1"><a id="cep" class="nav-link btn btn-secondary btn-sm text-light" href="{{route('profil')}}">Profil</a></li>
                <li class="nav-item mx-1 px-1"><a id="cep" class="nav-link btn btn-secondary btn-sm text-light" href="{{route('agenda')}}">Agenda</a></li>
                <li class="nav-item dropdown mx-1 px-1">
                  <a id="cep"
                    class="nav-link dropdown-toggle btn btn-secondary btn-sm text-light"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Konsentrasi Keahlian
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item btn btn-light rounded" href="#">Manajemen Perkantoran</a></li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Akuntansi Keuangan</a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bisnis Digital</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bisnis Ritel</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Desain dan Produksi Busana</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Rekayasa Perangkat Lunak</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Teknik Komputer dan Jaringan</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown mx-1 px-1">
                  <a
                    class="nav-link dropdown-toggle btn btn-secondary btn-sm text-light"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Pendidikan
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item btn btn-light rounded" href="#">Bidang Kurikulum</a></li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bidang Kesiswaan</a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bidang Sarana Prasarana</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bidang Hubinmas</a>
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-light rounded" href="#">Bidang Manajemen Mutu</a>
                    </li>
                    
                  </ul>
                </li>
                <li class="nav-item mx-1 px-1"><a id="cep" class="nav-link btn btn-secondary btn-sm text-light" href="#">Panca Waluya</a></li>
                <li class="nav-item mx-1 px-1"><a id="cep" class="nav-link btn btn-secondary btn-sm text-light" href="#">SPMB 2026</a></li>


                
              </ul>
             
            </div>
          </div>
        </div>
      </nav>

@section('js')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const currentUrl = window.location.href;
    document.querySelectorAll('#cep').forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('bg-warning');
        }
    });
});
</script>
 

@endsection