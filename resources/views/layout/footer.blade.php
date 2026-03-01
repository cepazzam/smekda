<div class="b-example-divider"></div>
    <div class="container-fluid  border-warning border-3 shadow-lg">
      <footer class="py-5 container">
        <div class="row">
          <div class="col-12 col-md-5 mb-3">
            
            <ul style="list-style:none;line-height:35px">
              <li class="d-flex w-75 gap-2 justify-content-center align-items-center rounded-pill bg-info text-light"> <img src="{{asset('storage/'.$skl->logo)}}" class="me-2" alt="smkn2 pwk" width="25" height="30"> <p class="fw-bold"> SMKN 2 PURWAKARTA</p></li>
              
              <li> {{$skl->alamat}}</li>
              <li>Kode Pos :  {{$skl->pos}} - Telp/Fax :  {{$skl->telp_fax}}</li>
              <li>Email:  {{$skl->email}}</li>
              <li>Website :  {{$skl->website}}</li>
              <li class="d-flex gap-3">
                <a href="{{$skl->urlyt}}" target="_blank"><img src="{{asset('storage/'.$skl->logoyt)}}"  alt="" width="25"></a>
                <a href="{{$skl->urlig}}" target="_blank"><img src="{{asset('storage/'.$skl->logoig)}}"  alt="" width="25"></a>
                <a href="{{$skl->urltiktok}}" target="_blank"><img src="{{asset('storage/'.$skl->logotiktok)}}"  alt="" width="25"></a>
                <a href="{{$skl->urlfb}}" target="_blank"><img src="{{asset('storage/'.$skl->logofb)}}"  alt="" width="25"></a>
              </li>              
            </ul> 
         
          </div>
          <div class="col-12 col-md-3 mb-3">
            <h5>Konsentrasi Keahlian</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i> Manajemen Perkantoran</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"
                  ><i class="fa fa-angle-double-right me-3"></i> Akuntansi Keuangan</a
                >
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i>  Bisnis Digital</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i> Bisnis Ritel</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i> Desain dan Produksi Busana</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i> Rekayasa Perangkat Lunak</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary list"><i class="fa fa-angle-double-right me-3"></i> Teknik Komputer dan Jaringan</a>
              </li>
            </ul>
          </div>
          
          <div class="col-md-4 mb-3">
            <form>
              <h5>Kirimkan email anda</h5>
              <p>Ikuti informasi menarik lainnya dari kami</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"
                  >Email address</label
                >
                <input
                  id="newsletter1"
                  type="email"
                  class="form-control"
                  placeholder="Email address"
                />
                <button class="btn btn-success" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4  border-top"
        >
          <p>&copy; 2026 SMKN 2 Purwakarta. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3">
              IT.Departement-SMKN 2 Purwakarta
            </li>
            
          </ul>
        </div>
      </footer>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
@yield('js')  
</body>
</html>