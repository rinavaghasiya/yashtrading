<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>yash</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <!--<link href="assets/img/favicon.png" rel="icon">-->
  <link href="{{ URL::asset('asset/client/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('asset/client/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('asset/client/vendor/aos/aos.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    
  </style> -->

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('asset/client/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://boot/clientstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +91 97699 88634 | +91 70574 91334
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}" class="logo mr-auto"></a> <img src="{{ URL::asset('asset/client/img/logooo.png')}}" alt="" class="img-fluid"></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('about')}}">About</a>
          <li class="drop-down"><a href="">Products</a>
            <?php
            use App\Category;
            $cat = Category::with(["subCategory"])->get();
            ?>
            <?php $subcat = App\SubCategory::get(); ?>
            <ul>
              @foreach($cat as $data)
              <li class="drop-down"><a href="#">{{$data->cname}}</a>
                <ul>
                  @foreach($data->subCategory as $data1)
                  <li><a href="{{url('product')}}/{{$data1->id}}">{{$data1->subcname}}</a></li>
                  @endforeach
                  <!-- @foreach(App\SubCategory::get() as $data1)@endforeach  -->
                </ul>
              </li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{url('marketing')}}">Marketing</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>yash trading</h3>
              <?php $data=App\Address::get();?>
              @foreach($data as $add)
              <p>
                Address:
               {{$add->address}}<br><br>
                <strong>Phone:</strong> +91 {{$add->phone}}<br>
                <strong>Email:</strong> {{$add->email}}<br>
              </p>
              @endforeach
              <div class="social-links mt-3">
              <?php $data=App\SocialMedia::get();?>
              @foreach($data as $social)
                <a href="{{$social->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$social->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$social->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$social->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Products</h4>
            <ul>
            <?php
            $cat = Category::with(["subCategory"])->get();
            ?>
           
            @foreach($cat as $data)
            
             <li><i class="bx bx-chevron-right"></i> <a href="{{url('#')}}">{{$data->cname}}</a></li>
             
             
              @endforeach
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <p>YASH TRADING was established in 2020 and has been setting up with his own brand in food and agro commodities, Our Agricultural products include varieties such as Varieties of Pulses, All Spices Potato, Red Onions and many more. With a vast experience of direct and indirect exporting and manufacturing Agricultural products.</p>
            <p>Our good quality products are managed by a team of committed and experienced people. </p>
            <p>Our products pass through the stringent quality checks as per international standards.</p>
            <form action="#" method="get">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yashtrading</span></strong> | Designed by <a href="https://g.page/vr-digital-media?gm"> VR Digital Media </a>
      </div>
      <!-- <div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/"> Vr Digital Media</a> -->
      <!-- </div> -->
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('asset/client/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('asset/client/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ URL::asset('asset/client/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('asset/client/js/main.js') }}"></script>
</body>
</html>