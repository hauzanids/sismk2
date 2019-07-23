<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SisIn SMK 2</title>
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
                        <a href="/"><img src="img/SMK.png" alt="" title="" /></a>
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
                                      <a class="nav-link active" href="/">Beranda</a>
                                  </li>
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
    <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <!-- <div class="breadcrumb_iner"> -->
                     <!-- <div class="breadcrumb_iner_item"> -->
                        <h1>Sistem Informasi SMK 2</h1>
                        <!-- <p>Home<span>/</span>Blog Single</p> -->
                     <!-- </div> -->
                  <!-- </div> -->
               </dir>
            </div>
         </div>
      </section>
     <!--::breadcrumb part start::-->

    <!-- social_connect_part part start-->
      <div class="whole-wrap">
    <div class="container box_1170">
      <div class="section-top-border">
        
        <div class="row justify-content-center">
          <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
<!-- 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>

        </div>

      </div>
    </div>
  </div>
        <!-- <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-xl-2">
                    <div class="section_tittle text-center">
                        <div class="form-label"><label for="username">Username</label></div>
                        <div class="form-input">
                            <input type="text" class="form-control" placeholder = 'username' onfocus="this.placeholder = ''" onblur="this.placeholder = 'username'">
                        </div>
                        <div class="clearer"></div>
                        <br>
                        <div class="form-label"><label for="password">Password</label></div>
                        <div class="form-input">
                            <input type="text" class="form-control" placeholder = 'password' onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'">
                        </div>
                        <div class="clearer"></div>
                        <br>
                        <a href="index.html" class="register_icon"><button class="button rounded-0 primary-bg text-white w-20" type="submit">Login</button></a>
                    </div>
                </div>
            </div>
        </div> -->
    <section class="social_connect_part">
      <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    
                </div>
                <div class="col-xl-4 col-sm-8 mb-4 mb-xl-0 single-footer-widget">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- social_connect_part part end-->

    <!-- footer part start-->

    <!-- <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </footer> -->
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
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- carousel js -->
    <script src="js/swiper.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

   
</body>

</html>
