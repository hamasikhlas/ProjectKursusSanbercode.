<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>13</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset("user/css/bootstrap.min.css")}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('user/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('user/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset("user/images/loading.gif")}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="/master"><img src="{{asset("user/images/logo21.png")}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/produk">Products</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/computer">Computer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/laptop">Laptop</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/tablet">Tablet</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/about">About</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="/contact">Contact</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="/login">Login</a>
                               </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <br>
      <div class="row">
         <div class="col-2">
         <div class="list-group">
             <a href="#" class="list-group-item list-group-item-action">CATEGORIES</a>
             <a href="/computer" class="list-group-item list-group-item-action list-group-item-primary">Computer</a>
             <a href="/laptop" class="list-group-item list-group-item-action list-group-item-secondary">Laptop </a>
             <a href="tablet" class="list-group-item list-group-item-action list-group-item-success">Tablet</a>
    
            </div>
         </div>
         <div class="col-9">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{asset('user/images/pc111.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('user/images/a.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
               <img src="{{asset('user/images/about.jpg')}}" class="d-block w-100" alt="...">
             </div>
            </div>
         </div>
{{--          
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="{{asset('user/images/pc111.png')}}" class="d-block w-1000" alt="...">
                  </div> 
                  <div class="carousel-item active">
                     <img src="{{asset('user/images/about.jpg')}}" class="d-block w-1000" alt="...">
                 </div> 
                   --}}
                  <br>
      <div class="row ">
         @forelse ($product as $key=>$p)
         <div class="col-3">
            <div class="card d-flex justify-content-start">
               @foreach ($p->ProductImages as $item)
               <img src="{{$item->image_url}}" class="card-img-top" style="width: 500%;height: 500%;">
               @endforeach
               <div class="card-body">
                  <h5 class="card-title">{{$p->name}}</h5>
                  <p class="card-text">{{$p->description}}</p>
               </div>
            </div>  
         </div> 
         @empty
         @endforelse 
      </div>
      <!-- end products -->
      <!--  footer -->
      {{-- <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="{{asset('user/images/logo21.png')}}" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>Semoga Terhibur dengan Website Yang kami tampilkan</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>0212343434232<br>kel.12@gmail.com<br>kel.12@website.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>?? 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer> --}}
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('user/js/jquery.min.js')}}"></script>
      <script src="{{asset('user/js/popper.min.js')}}"></script>
      <script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('user/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('user/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('user/js/custom.js')}}"></script>
   </body>
</html>

