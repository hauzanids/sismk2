<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIS Mk 2</title>
    <link rel="icon" href="img/SMK.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                                  @if(Gate::check('isMurid1') || Gate::check('isStaff'))
                                  <li class="nav-item">
                                      <a href="/jadwal1" class="nav-link">Jadwal Kelas 10</a>
                                  </li>
                                  @endif
                                  @if(Gate::check('isMurid2') || Gate::check('isStaff'))
                                  <li class="nav-item">
                                      <a href="/jadwal2" class="nav-link">Jadwal Kelas 11</a>
                                  </li>
                                  @endif
                                  @if(Gate::check('isMurid3') || Gate::check('isStaff'))
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
                  <h1>Tentang SMK 2</h1>
                  <div class="row">
                  <div class="col-md-6">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/blog/STM13.jpg" alt="SMK 2">
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about_text">
                        <p>SMK Negeri 2 Kota Depok didirikan pada bulan Desember 2003 berdasarkan SK Walikota Depok No. 421.5/Kep/HK/2003 dengan nomor Statistik 400560 yang dipercaya Walikota Depok Melalui Kepala Dinas Pendidikan.
Dengan jumlah siswa angkatan I tahun pelajaran 2004/2005 yakni berjumlah 140 siswa, yang dimana lokasi kegiatan belajar dan mengajar dilaksanakan di SMP Negeri 8 Kota Depok di Komplek PT. Timah Kelapa Dua, Jalan Tugu Raya, Tugu, Cimanggis, Tugu, Cimanggis, Kota Depok, Jawa Barat 16451. Memasuki tahun kedua yakni pada tahun pelajaran 2005/2006 kegiatan belajar mengajar siswa terbagi 2 tempat yakni: di SMP Negeri 8 Depok dan MTs Islamiyah Sawangan Kota Depok. Ditahun Ke 3 tahun pelajaran 2006/2007 kegiatan belajar dan mengajar sudah dilaksanakan di gedung sendiri yakni di Jalan Abdul Wahab Pintu 2 Telaga Golf Sawangan Kota Depok sampai dengan saat ini. Alumni pertama SMKN 2 Kota Depok yakni siswa yang lulus pada tahun 2007. Pada Tahun 2014 yakni pada tahun pelajaran 2014/2015 SMK Negeri 2 Kota Depok membuka jurusan baru yakni Teknik Pendingin dan Tata Udara (TPTU) dengan membuka 1 kelas yang berjumlah 36 siswa.</p>
                    </div>
                  </div>
                </div>
               </div>
            </div>
         </div>
      <!-- </section> -->
      <!--::breadcrumb part start::-->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mb-5 mb-lg-0">
                  
               
            </div>
         </div>
      </section>
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
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- aos js -->
  <script src="js/aos.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- carousel js -->
  <script src="js/swiper.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>



  </body>
  
  </html>