<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIS Mk 2</title>
    <link rel="icon" href="../../img/SMK.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="header_area">
      <div class="sub_header">
          <div class="container">
              <div class="row align-items-center">
                <div class="col-md-4 col-xl-6">
                    <div id="logo">
                        <a href="/beranda"><img src="img/SMK.png" alt="" title="" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="sub_header_social_icon float-right">
                      @guest

                                <a class="register_icon" href="{{ route('login') }}"><i class="ti-arrow-right"></i>{{ __('Login') }}</a>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                                <a id="navbarDropdown" class="register_icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}<i class="ti-arrow-right"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                      <!-- <a href="/login" class="register_icon"><i class="ti-arrow-right"></i>Login</a> -->
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="main_menu">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <nav class="navbar navbar-expand-lg navbar-light">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                  <li class="nav-item active">
                                      <a class="nav-link active" href="/beranda">Beranda</a>
                                  </li>
                                  @if(Gate::check('isMurid1') || Gate::check('isGuru')
                                   || Gate::check('isStaff'))
                                  <li class="nav-item">
                                      <a href="/jadwal1" class="nav-link">Jadwal Kelas 10</a>
                                  </li>
                                  @endif
                                  @if(Gate::check('isMurid2') || Gate::check('isGuru') || Gate::check('isStaff'))
                                  <li class="nav-item">
                                      <a href="/jadwal2" class="nav-link">Jadwal Kelas 11</a>
                                  </li>
                                  @endif
                                  @if(Gate::check('isMurid3') || Gate::check('isGuru') || Gate::check('isStaff'))
                                  <li class="nav-item">
                                      <a href="/jadwal3" class="nav-link">Jadwal Kelas 12</a>
                                  </li>
                                  @endif
                                  <li class="nav-item">
                                      <a href="/about" class="nav-link">Tentang Sekolah</a>
                                  </li>
                              </ul>
                              
                          </div>
                      </nav>
                      
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Header part end-->
      <!--::breadcrumb part start::-->
      <!-- <section class="breadcrumb breadcrumb_bg"> -->
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <!-- <div class="breadcrumb_iner"> -->
                     <!-- <div class="breadcrumb_iner_item"> -->
                      <?php $daftar_informasi = \App\Informasi::all(); ?>
                        <h1>Sistem Informasi SMK 2</h1>
                        
                        <!-- <p>Home<span>/</span>Blog Single</p> -->
                     <!-- </div> -->
                  <!-- </div> -->
               </dir>
            </div>
         </div>

         <div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="text-center">Edit Informasi</h1>
      <div class="row">
      <div class="col-md-12">
        <form action="{{ route('informasi.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukan judul informasi" value="{{$informasi->judul}}">
          </div>

          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar">
            <img src="{{ URL::to('/') }}/img/{{ $informasi->gambar }}" class="img" width="100%" />
            <input type="hidden" name="hidden_gambar" value="{{ $informasi->gambar }}" />
          </div>

          <div class="form-group">
            <label for="Deksripsi">Deskripsi Informasi</label>
            <textarea class="form-control" rows="10" name="deskripsi" placeholder="Masukan deskripsi informasi">
            {{$informasi->deskripsi}}
            </textarea>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Acara</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $informasi->tanggal }}">
          </div>

          <div class="modal-footer">
            <a href="/beranda" class="btn btn-warning">Close</a>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

      <!--================Blog Area end =================-->
  
  </div>
  <footer class="copyright_part">
      <div class="container">
          <div class="row align-items-center">
              <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              
          </div>
      </div>
  </footer>
  <!-- footer part end-->
  
  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="../../js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="../../js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="../../js/bootstrap.min.js"></script>
  <!-- aos js -->
  <script src="../../js/aos.js"></script>
  <!-- easing js -->
  <script src="../../js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="../../js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="../../js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="../../js/owl.carousel.min.js"></script>
  <!-- carousel js -->
  <script src="../../js/swiper.min.js"></script>
  <!-- custom js -->
  <script src="../../js/custom.js"></script>



  </body>
  
  </html>