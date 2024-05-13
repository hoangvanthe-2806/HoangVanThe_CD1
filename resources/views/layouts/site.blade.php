
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    @yield('header')
</head>
<body>
    <header>header</header>
    <section class="mainmenu">
        <div class="logo_section bg-dark">
        <!-- logo section end -->
        <!-- header section start -->
       
           <div class="container">
              <div class="containt_main py-4">
                 <div class="main">
                    <!-- Another variation with a button -->
                    <div class="input-group">
                      
                       <li class="col-md-4 "><a href="#"><img src="images/logo.png"></a></li>
                   
                       <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm....">
                       <div class="input-group-append">
                          <button class="btn btn-secondary" type="button" style="background-color: #2d2e2b; border-color:#e6e6ec ">
                          <i class="fa fa-search"></i>
                          </button>
                       </div>
                    </div>
                 </div>
                 <div class="header_box">
                    <div class="lang_box ">
                       <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                       <img src="images/R.jpg " width="20" height="20" alt="flag" class="mr-2 " title="United Kingdom"> Tiếng Việt <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                       </a>
                       <div class="dropdown-menu ">
                          <a href="#" class="dropdown-item">
                          <img src="images/flag-uk.png" class="mr-2" alt="flag">
                           English
                          </a>
                       </div>
                    </div>
                    <style>
                      .box-cat .count-cart{
                          background-color: rgb(242, 125, 16);
                          width: 20px;
                          height: 20px;
                          line-height: 25px;
                          text-align: center;
                          position: absolute;
                          top:22px;
                          right: 327px;
                          border-radius: 50%;
                          color: rgb(250, 237, 237);
                          font-size: 15px;
                          font-weight: 500;
                       }
                    </style>
                    <div class="login_menu">
                       <ul>
                          <li><a href="#">
                             <div class="box-cat">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>  
                             <div class="count-cart" id="count-cart">1</div>
                             <span class="padding_10">Giỏ hàng</span></a>
                             </div>
                          </li>
                          <li><a href="#">
                             <i class="fa fa-user" aria-hidden="true"></i>
                             <span class="padding_10">Đăng nhập</span></a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
       </div>
       </section>
    <main>
        @yield('content')
    </main>

    <div class="footer_section layout_padding">
        <div class="container">
           <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
           <div class="input_bt">
              <input type="text" class="mail_bt" placeholder="Email của bạn" name="Email của bạn">
              <span class="subscribe_bt" id="basic-addon2"><a href="#">Đăng ký</a></span>
           </div>
           <div class="footer_menu">
              <ul>
                 <li><a href="#">Bán chạy nhất</a></li>
                 <li><a href="#">Ý tưởng quà tặng</a></li>
                 <li><a href="#">Bản phát hành mới</a></li>
                 <li><a href="#">Ưu đãi hôm nay</a></li>
                 <li><a href="#">Dịch vụ khách hàng</a></li>
              </ul>
           </div>
           <div class="location_main">Số dòng trợ giúp : <a href="#">+1 1800 1200 1200</a></div>
        </div>
     </div>


     <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
            
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <footer>Footer</footer>


    @yield('footer')
</body>
</html>