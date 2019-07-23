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
                      <?php $daftar_typography = \App\Typography::all(); ?>
                          @if(session('success'))
                            <div class="alert alert-success" role="alert">
                              {{session('success')}}
                            </div>
                          @endif
                        <h1>Typography</h1>
                        @can('isGuru')
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                          Tambah Materi
                        </button>
                        @endcan
                        <!-- <p>Home<span>/</span>Blog Single</p> -->
                     <!-- </div> -->
                  <!-- </div> -->
               </dir>
            </div>
         </div>
      <!-- </section> -->
      <!--::breadcrumb part start::-->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                    @foreach($daftar_typography as $typography)
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <h1>{{$typography->judul}}</h1>
                        </div>
                        <div class="blog_details">
                          <h4>{{$typography->deskripsi}}</h4>
                        </div>
                        <div class="blog_details">
                          <a href="{{ route('typography.download', $typography->id) }}">
                            <button type="button" class="btn btn-primary float-left">
                              Download Materi
                            </button>
                          </a>
                        </div>
                        @if(Gate::check('isGuru') || Gate::check('isStaff'))
                        <a href="/typography/{{$typography->id}}/delete" class="btn btn-danger float-right"onclick="return confirm('Apakah anda yakin ingin menghapus materi ini?')">Delete</a>
                        @endif
                      </article>
                      <hr class="border">
                    @endforeach


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Materi Typography</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                      <form action="{{ route('typography.store') }}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="judul">Judul Materi</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan judul materi">
                      </div>

                      <div class="form-group">
                        <label for="deksripsi">Deskripsi Materi</label>
                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan deskripsi"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="materi">File Materi</label>
                        <input type="file" class="form-control" name="materi">
                      </div>

                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <!-- <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                <div class="username">Login User</div>
                                <div class="input-group-append">
                                 <input type="text" class="form-control" placeholder = 'Username' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                
                                 <input type="text" class="form-control" placeholder = 'Password' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                 <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100" type="submit">Login</button>
                        </form>
                     </aside> -->
                     @if(Gate::check('isMurid1')|| Gate::check('isGuru') || Gate::check('isStaff'))
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Mata Pelajaran Kejuruan Kelas 10</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="/nirmana" class="d-flex">
                                 <p>Nirmana</p>
                              </a>
                           </li>
                           <li>
                              <a href="/photography" class="d-flex">
                                 <p>Photography</p>
                              </a>
                           </li>
                           <li>
                              <a href="/sistemkomputer" class="d-flex">
                                 <p>Sistem Komputer</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     @endif
                     @if(Gate::check('isMurid2')|| Gate::check('isGuru') || Gate::check('isStaff'))
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Mata Pelajaran Kejuruan Kelas 11</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="/typography" class="d-flex">
                                 <p>Typography</p>
                              </a>
                           </li>
                           <li>
                              <a href="/videography" class="d-flex">
                                 <p>Videography</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     @endif
                     @if(Gate::check('isMurid3')|| Gate::check('isGuru') || Gate::check('isStaff'))
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Mata Pelajaran Kejuruan Kelas 12</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="/multimedia" class="d-flex">
                                 <p>Multimedia</p>
                              </a>
                           </li>
                           <li>
                              <a href="/webdesign" class="d-flex">
                                 <p>Web Design</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     @endif
                  </div>
               </div>
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