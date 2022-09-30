@extends('header_footer')
@section('title')
masala
@endsection
@section('content')
<section id="hero" class="d-flex align-items-center"> 
  <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ URL::asset('asset/client/img/banner/banner1.jpg')}}" class="responsive" alt="YashTranding" width="1100" height="500">
                <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ URL::asset('asset/client/img/banner/banner2.jpg')}}" alt="YashTranding" width="1100" height="500">
                 <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div> 
               </div>   
              <div class="carousel-item">
                <img src="{{ URL::asset('asset/client/img/banner/banner3.jpg')}}" alt="YashTranding" width="1100" height="500">
                 <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ URL::asset('asset/client/img/banner/banner4.jpg')}}" alt="YashTranding" width="1100" height="500">
                 <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ URL::asset('asset/client/img/banner/banner5.jpg')}}" alt="YashTranding" width="1100" height="500">
                 <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
              </div>  

             <div class="carousel-item">
                <img src="{{ URL::asset('asset/client/img/banner/banner6.jpg')}}" alt="YashTranding" width="1100" height="500">
                 <div class="text-block">
                <div class="btns">
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally</p>  
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">Product</a>
                  </div>
                </div>
                <div class="text-block1">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
              </div> 
           

          
            </div> 
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
    </div>
  </div>
  </div>
</section> 
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="menu" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="about-img">

              @foreach($data as $d1)

              @if($d1->item_img!="")

              @php $a = explode(",",$d1->item_img); @endphp
                  
              <img class="thumbnail no-margin" src="{{ url('public/item_img') }}/{{ $a[0] }}" alt="img" height="500px" width="400px">

                  @else
              <p>Noimage</p>
              @endif
                <!-- <img src="{{ URL::asset('asset/client/img/menu/3.jpg')  }}" alt=""> -->
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 content">
            
                <h1>{{$d1->subcname}}</h1>
                <h2 >{{$d1->price}}</h2>
                <br>
                <p>{!! nl2br($d1->description) !!}</p>
               
            @endforeach
                <!-- <p>Masala Khakhra is a thin cracker common in the Gujarati cuisine of western India, especially among Jains. 
                  It is made from mat bean, wheat flour and oil. 
                  It is served usually during breakfast.
              </p> -->
              
            </div>
          </div>
        </div>
      </section><!-- End About Section -->
      <!-- ======= Why Us Section ======= -->
    </main><!-- End #main -->
@stop