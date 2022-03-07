@extends('layouts.layout')

@section('content')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
      <h2>Welcome to <span>myMusic</span></h2>
      <p>ASIA'S LEADING MULTI-BRAND RETAILER ANCHORED IN MUSIC</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
    @yield('content')
  </section>
  <main id="main">
      
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Free Shipping</a></h4>
              <p>Enjoy free shipping nationwide</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Reliable Delivery</a></h4>
              <p>Packed with care, delivered to your door</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Secure Payment</a></h4>
              <p>Shop online with ease and confidence</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Tax Included</a></h4>
              <p>All prices inclusive of tax</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Our journey began in 1946, when Singapore was entering a new chapter of history, and rock 'n' roll was taking the USA by storm. Seeing that music could shape both soul and society, we set out to establish a legacy of our own.</p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($brands as $brand)
            <div class="swiper-slide"><img src="{{ asset('storage/' . $brand->thumbnail) }}" class="img-fluid" alt=""></div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Product</h2>
        </div>

        <div class="row gy-5">

          @foreach ($products as $product)
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                
                <a href="#" class="stretched-link">
                  <h3>{{ substr($product->name, 0, 40) . '...' }}</h3>
                </a>
                <p>{{ substr($product->desc, 0, 150) . '...' }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          @endforeach
          

     
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </div>

        <div class="row">

          @foreach ( $blogs as $blog)
          <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('storage/' . $blog->thumbnails) }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">{{ date('D, M Y', strtotime($blog->created_at)) }}</span>
                <span class="post-author"> / {{ $blog->user->name }}</span>
              </div>
              <h3 class="post-title">{{ $blog->title }}</h3>
              <p>{{ substr($blog->desc, 0, 150) . '...' }}</p>
              <a href="/blogs/details/{{ $blog->slug }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach
          


        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->
@endsection
