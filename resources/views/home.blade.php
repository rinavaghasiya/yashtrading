@extends('header_footer')
@section('title')
Home Page
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
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally </p>
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally </p>
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally </p>
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
                  <p class="btn-book1 animated fadeInUp scrollto"> Exporters | Domestic – Globally </p>
                </div>
                </div>
                <div class="text-block2">
                  <div class="btns">
                    <a href="#menu" class="btn-book animated fadeInUp scrollto">View all</a>
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
  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Products</p>
        </div>
        <?php
            use App\Category;
            $cat = Category::with(["subCategory"])->get();
            ?>
            <?php $subcat = App\SubCategory::get(); ?>
          
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">

         
            <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li> 
              @foreach($cat as $data)
              <li data-filter=".{{$data->cname}}">{{$data->cname}}</li> 
              @endforeach
            </ul>
            
          </div>
        </div>


        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($cat as $data)
          <div class="col-lg-6 menu-item {{$data->cname}}">
          <?php
            $productQuery =DB::table('product');
            $d = $productQuery->where("scid", $data->id)->get();
            $price = 0;
            if(isset($d->price)){
              $price = $d->price;
            }
            $item_img = "";
            if(isset($d->item_img)){
              $item_img = $d->item_img;
            }
            ?> 
            <!-- <img src="asset/img/menu/{{$item_img}}" class="menu-img" alt=""> -->
            @foreach($data->subCategory as $data1)
            <div class="menu-content">
            <a href="{{url('product')}}/{{$data1->id}}">{{$data1->subcname}}</a>
            </div>
            @endforeach
          </div>
        @endforeach
        </div>        
      </div>
    </section><!-- End Menu Section -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Business Opportunity
            Trusted Products</h2>
          <p>Organize Your in our Products</p>
        </div>

        <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{ URL::asset('asset/client/img/masala.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>MASALA</h3>
              <!--<div class="price">-->
              <!--  <p><span>$150</span></p>-->
              <!--</div>-->
              <p class="font-italic">
                “Add “Masala Khakhara” for a mouthwatering teate
                Reseal zip-lock after opening the pack & maintain the freshness”
                
                ‘refresh your breakfast, have a new blent of crispy crunchy & yummy “khakhara”.
                your excellent ready to eat snack gives you a delightful taste with traditional indian
                tea & refreshing beverages
              </p>
            
            </div>
          </div>
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{ URL::asset('asset/client/img/methi.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Methi Khakhara</h3>
              <!--<div class="price">-->
              <!--  <p><span>$155</span></p>-->
              <!--</div>-->
              <p class="font-italic">
                “Add “Methi Khakhara” for a mouthwatering teate
                Reseal zip-lock after opening the pack & maintain the freshness”
                
                ‘refresh your breakfast, have a new blent of crispy crunchy & yummy “khakhara”.
                your excellent ready to eat snack gives you a delightful taste with traditional indian
                tea & refreshing beverages
                
              </p>
             
            </div>
          </div>
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{ URL::asset('asset/client/img/plain.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Plain Khakhara</h3>
              <!--<div class="price">-->
              <!--  <p><span>$130</span></p>-->
              <!--</div>-->
              <p class="font-italic">
                “Add “Plain Khakhara” for a mouthwatering teate
                Reseal zip-lock after opening the pack & maintain the freshness”
  
                ‘refresh your breakfast, have a new blent of crispy crunchy & yummy “khakhara”.
                your excellent ready to eat snack gives you a delightful taste with traditional indian
                tea & refreshing beverages
              </p>  
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Events Section -->
    <!-- ======= Book A Table Section ======= -->
    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials section-bg">-->
    <!--  <div class="container" data-aos="fade-up">-->
    <!--    <div class="section-title">-->
    <!--      <h2>Testimonials</h2>-->
    <!--      <p>What they're saying about us</p>-->
    <!--    </div>-->
    <!--    <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">-->
    <!--      <div class="testimonial-item">-->
    <!--        <p>-->
    <!--          <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
    <!--          <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--        </p>-->
    <!--        <img src="{{ URL::asset('asset/client/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">-->
    <!--        <h3>Saul Goodman</h3>-->
    <!--        <h4>Ceo &amp; Founder</h4>-->
    <!--      </div>-->
    <!--      <div class="testimonial-item">-->
    <!--        <p>-->
    <!--          <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.-->
    <!--          <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--        </p>-->
    <!--        <img src="{{ URL::asset('asset/client/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">-->
    <!--        <h3>Sara Wilsson</h3>-->
    <!--        <h4>Designer</h4>-->
    <!--      </div>-->
    <!--      <div class="testimonial-item">-->
    <!--        <p>-->
    <!--          <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.-->
    <!--          <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--        </p>-->
    <!--        <img src="{{ URL::asset('asset/client/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">-->
    <!--        <h3>Jena Karlis</h3>-->
    <!--        <h4>Store Owner</h4>-->
    <!--      </div>-->
    <!--      <div class="testimonial-item">-->
    <!--        <p>-->
    <!--          <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--          Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.-->
    <!--          <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--        </p>-->
    <!--        <img src="{{ URL::asset('asset/client/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">-->
    <!--        <h3>Matt Brandon</h3>-->
    <!--        <h4>Freelancer</h4>-->
    <!--      </div>-->
    <!--      <div class="testimonial-item">-->
    <!--        <p>-->
    <!--          <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.-->
    <!--          <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--        </p>-->
    <!--        <img src="{{ URL::asset('asset/client/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">-->
    <!--        <h3>John Larson</h3>-->
    <!--        <h4>Entrepreneur</h4>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- End Testimonials Section -->
    <!-- ======= Chefs Section ======= -->
  </main><!-- End #main --> 
  @stop