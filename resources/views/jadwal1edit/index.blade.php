<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIS Mk 2</title>
    <link rel="icon" href="img/SMK.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
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
                      <?php $daftar_jadwal1 = \App\Jadwal1::all(); ?>
                          @if(session('success'))
                            <div class="alert alert-success" role="alert">
                              {{session('success')}}
                            </div>
                          @endif
                        <h1>Sistem Informasi SMK 2</h1>
                        <!-- <p>Home<span>/</span>Blog Single</p> -->
                     <!-- </div> -->
                  <!-- </div> -->
               </dir>
            </div>
         </div>
      <!-- </section> -->
      <!--::breadcrumb part start::-->
      <!--================Blog Area =================-->

  <!-- Start Button -->
  <section class="button-area">
    <div class="section-top-border">
        <h3 class="mb-30">Jadwal Kelas 10</h3>
        <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <!-- <th>Mulai</th>
         <th>Selesai</th> -->
         <th>Senin</th>
         <th>Selasa</th>
         <th>Rabu</th>
         <th>Kamis</th>
         <th>Jum'at</th>
         <!-- <th>Delete</th>
 -->        </tr>
       </thead>
       <tbody>
       
       </tbody>
      </table>
      <a href="/jadwal1" class="btn btn-warning float-right">Back</a>
        <!-- <div class="progress-table-wrap">
          <div class="progress-table">
            <div class="table-head">
              <div class="serial">Mulai</div>
              <div class="visit">Selesai</div>
              <div class="visit">Senin</div>
              <div class="visit">Selasa</div>
              <div class="visit">Rabu</div>
              <div class="visit">Kamis</div>
              <div class="visit">Jum'at</div>
            </div>
            @foreach($daftar_jadwal1 as $jadwal1)
            <div class="table-row">
              <div class="serial">{{$jadwal1->jammulai}}</div>
              <div class="visit">{{$jadwal1->jamselesai}}</div>
              <div class="visit">{{$jadwal1->senin}}</div>
              <div class="visit">{{$jadwal1->selasa}}</div>
              <div class="visit">{{$jadwal1->rabu}}</div>
              <div class="visit">{{$jadwal1->kamis}}</div>
              <div class="visit">{{$jadwal1->jumat}}</div>
            </div>
            @endforeach
          </div>
        </div>
      </div> -->
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

  <script>
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"/jadwal1edit/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    // html += '<tr>';
    // html += '<td contenteditable id="mulai"></td>';
    // html += '<td contenteditable id="selesai"></td>';
    // html += '<td contenteditable id="senin"></td>';
    // html += '<td contenteditable id="selasa"></td>';
    // html += '<td contenteditable id="rabu"></td>';
    // html += '<td contenteditable id="kamis"></td>';
    // html += '<td contenteditable id="jumat"></td></tr>';
    // html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';
     // html +='<td contenteditable class="column_name" data-column_name="mulai" data-id="'+data[count].id+'">'+data[count].mulai+'</td>';
     // html += '<td contenteditable class="column_name" data-column_name="selesai" data-id="'+data[count].id+'">'+data[count].selesai+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="senin" data-id="'+data[count].id+'">'+data[count].senin+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="selasa" data-id="'+data[count].id+'">'+data[count].selasa+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="rabu" data-id="'+data[count].id+'">'+data[count].rabu+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="kamis" data-id="'+data[count].id+'">'+data[count].kamis+'</td>';
     html += '<td contenteditable class="column_name" data-column_name="jumat" data-id="'+data[count].id+'">'+data[count].jumat+'</td></tr>';
     // html += '<td><button type="button" class="btn btn-danger btn-xs delete" id="'+data[count].id+'">Delete</button></td></tr>';
    }
    $('tbody').html(html);
   }
  });
 }

 var _token = $('input[name="_token"]').val();

 $(document).on('click', '#add', function(){
  var mulai = $('#mulai').time();
  var selesai = $('#selesai').time();
  var senin = $('#senin').text();
  var selasa = $('#selasa').text();
  var rabu = $('#rabu').text();
  var kamis = $('#kamis').text();
  var jumat = $('#jumat').text();
  if(mulai != '' && selesai != '' && senin != '' && selasa != '' && rabu != '' && kamis != '' && jumat != '')
  {
   $.ajax({
    url:"{{ route('jadwal1.add_data') }}",
    method:"POST",
    data:{mulai:mulai, selesai:selesai, senin:senin, selasa:selasa, rabu:rabu, kamis:kamis, jumat:jumat, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
  }
 });

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var id = $(this).data("id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('jadwal1.update_data') }}",
    method:"POST",
    data:{column_name:column_name, column_value:column_value, id:id, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
    }
   })
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
  }
 });

 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('jadwal1.delete_data') }}",
    method:"POST",
    data:{id:id, _token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
 });


});
</script>