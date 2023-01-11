<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Babette">
  <link href="/images/favicon/favicon.png" rel="icon">
  <title>Sarayi</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7cShadows+Into+Light&display=swap">
    <link rel="stylesheet" href="{{ asset('css/libraries.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container">
              <a class="navbar-brand" href="index.html" style="width: 285px;">
                  <img src="/images/logo/logo-light.png" class="logo-light" alt="logo">
                  <img src="/images/logo/logo-light.png" class="logo-dark" alt="logo">
              </a>
              <button class="navbar-toggler" type="button">
                  <span class="menu-lines"><span></span></span>
              </button>
              <div class="collapse navbar-collapse" id="mainNavigation">
                  <ul class="navbar-nav ml-auto">
                    
                      <li class="nav__item with-dropdown">
                          <a href="{{route('index')}}" class="dropdown-toggle nav__item-link">{{ __('index.home') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                          <a href="{{route('menu')}}" class="dropdown-toggle nav__item-link">{{ __('index.menu') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                          <a href="{{route('team')}}" class="dropdown-toggle nav__item-link">{{ __('index.team') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                        <a href="{{route('offers')}}" class="dropdown-toggle nav__item-link">{{ __('index.offer') }}</a>
                    </li>
                      <li class="nav__item with-dropdown">
                          <a href="{{route('about')}}" class="dropdown-toggle nav__item-link active">{{ __('index.about') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                          <a href="{{route('contact')}}" class="dropdown-toggle nav__item-link">{{ __('index.contact') }}</a>
                      </li><!-- /.nav-item -->
                  </ul>
              </div>
              <div class="navbar-actions-wrap">
                  <div class="navbar-actions d-flex align-items-center">
                      <ul class="social__icons">
                        <li class="nav__item with-dropdown">
                          @if(app()->getLocale() == 'ar')
                          <a class="dropdown-toggle nav__item-link" href="lang/en">
                              EN
                          </a>
                          @else
                          <a class="dropdown-toggle nav__item-link" href="lang/ar">
                              AR
                          </a>
                          @endif
                      </li>
                      </ul>
                  </div><!-- /.navbar-actions -->
              </div><!-- /.navbar-actions-wrap -->
          </div><!-- /.container -->
      </nav><!-- /.navabr -->
  </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout1 text-center bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/2.jpg" alt="background"></div>
      <svg class="pagetitle__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
        viewBox="0 0 22 61">
        <path
          d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
          transform="translate(-789 -769)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">All About Us</span>
            <h1 class="pagetitle__heading">Our Story</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =====================
       Banner layout1
    ======================== -->
    <section id="bannerLayout1" class="banner banner-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="banner__content">
              <div class="banner__content-text" data-aos="fade-right">
                <div class="banner__content-text-inner">
                  <div class="heading">
                    <span class="heading__subtitle">Hello Dear</span>
                    <h2 class="heading__title">Welcome To Babette</h2>
                    <div class="heading__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path
                          d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                          transform="translate(-505 -925)"></path>
                      </svg>
                    </div>
                    <p class="heading__desc">Babette was the first restaurant to open in Egypt, the resturant was
                      designed
                      with the history in mind we have created a soft industrial dining room, combined with an open
                      kitchen, coffee take out bar and alovely awesome on site coffee roastery..</p>
                    <img src="/images/about/signature.png" alt="signature">
                  </div><!-- /.heading -->
                </div><!-- /.banner__content-text-inner -->
              </div><!-- /.banner__content-text -->
              <div class="banner__content-img" data-aos="fade-left">
                <img src="/images/banners/1.png" alt="banner">
              </div><!-- /.banner__content-img -->
            </div><!-- /.banner__content -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- =====================
       Banner layout2
    ======================== -->
    <section id="bannerLayout2" class="banner banner-layout2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="banner__content">
              <div class="banner__content-text" data-aos="fade-left">
                <div class="banner__content-text-inner">
                  <div class="heading mb-40">
                    <span class="heading__subtitle">A Warm, Charming Atmosphere</span>
                    <h2 class="heading__title">Private Dining & Events</h2>
                    <div class="heading__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path
                          d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                          transform="translate(-505 -925)"></path>
                      </svg>
                    </div>
                    <p class="heading__desc">Allow us to make your next special event extra special. We cater for all
                      sized functions, ideal for your larger functions or an intimate gathering, our team can curate a
                      menu to suit your taste.</p>
                  </div><!-- /.heading -->
                  <a href="#" class="btn btn__secondary btn__link mx-2 my-1">Explore Events</a>
                  <a href="#" class="btn btn__primary mx-2 my-1">Explore Events</a>
                </div><!-- /.banner__content-text-inner -->
              </div><!-- /.banner__content-text -->
              <div class="banner__content-img" data-aos="fade-right">
                <img src="/images/banners/2.png" alt="banner">
              </div><!-- /.banner__content-img -->
            </div><!-- /.banner__content -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- ========================= 
      Testimonial Layout 1
    =========================  -->
    <section id="testimonialsLayout1" class="testimonials testimonials-layout1 bg-overlay pt-130 pb-110">
      <div class="bg-img"><img src="/images/backgrounds/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-white text-center mb-50">
              <span class="heading__subtitle">Our Guestbook</span>
              <h2 class="heading__title">People Say About Us!</h2>
              <div class="heading__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path
                    d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                    transform="translate(-505 -925)"></path>
                </svg>
              </div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots carousel-dots-light" data-slide="3" data-slide-md="2"
              data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
              data-speed="800">
              <!-- Testimonial Item #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Lovely atmosphere staff were excellent, very attentive and polite. We
                    felt taken care of! Food came out quickly and was hot and delicious.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">John Peter</h5>
                  <p class="testimonial__meta-desc">Guest</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Been to this stunning place many times over the last years. Tonight I
                    have to say, it was good as it ever was. Superb food, exceedingly good staff.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">Sami Wade</h5>
                  <p class="testimonial__meta-desc">Guest</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #3 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Once again, I feel compelled to write about our wonderful dining
                    experience. We have shared meals or conversations about our meals at your restaurant.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">Martin Hope</h5>
                  <p class="testimonial__meta-desc">ProMov</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #4 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Lovely atmosphere staff were excellent, very attentive and polite. We
                    felt taken care of! Food came out quickly and was hot and delicious.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">John Peter</h5>
                  <p class="testimonial__meta-desc">Guest</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #5 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Been to this stunning place many times over the last years. Tonight I
                    have to say, it was good as it ever was. Superb food, exceedingly good staff.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">Sami Wade</h5>
                  <p class="testimonial__meta-desc">Guest</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class=" testimonial-item">
                <div class="testimonial__icon"></div>
                <div class="testimonial__content">
                  <div class="testimonial__thumb">
                    <img src="/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Once again, I feel compelled to write about our wonderful dining
                    experience. We have shared meals or conversations about our meals at your restaurant.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <h5 class="testimonial__meta-title">Martin Hope</h5>
                  <p class="testimonial__meta-desc">ProMov</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Testimonials Layout 1 -->

    <!-- ==========================
         fancybox layout 1
    =========================== -->
    <section id="fancyboxLayout1" class="fancybox-layout1 text-center pb-40">
      <div class="container">
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/1.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Daily Fresh Menus</h4>
                <p class="fancybox__desc">We help you treat yourself with a different meal everyday, thanks to our daily
                  changing menus and our awesome creative chefs!</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/2.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Fresh Ingredient</h4>
                <p class="fancybox__desc">Who said healthy food can't also be delicious? Our creative chefs use fresh
                  and seasonal ingredients to make affordable, tasty</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/3.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Tasty Meals</h4>
                <p class="fancybox__desc">We help you treat yourself with a different meal everyday, thanks to our daily
                  changing menus and our awesome creative chefs!</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/4.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Creative Chef</h4>
                <p class="fancybox__desc">Who said healthy food can't also be delicious? Our creative chefs use fresh
                  and seasonal ingredients to make affordable, tasty</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/5.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Real Pizza</h4>
                <p class="fancybox__desc">We help you treat yourself with a different meal everyday, thanks to our daily
                  changing menus and our awesome creative chefs!</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="/images/icons/6.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Awesome Coffee</h4>
                <p class="fancybox__desc">Who said healthy food can't also be delicious? Our creative chefs use fresh
                  and seasonal ingredients to make affordable, tasty</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. fancybox layout 1 -->
 
    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-layout1 text-center bg-dark">
      <div class="footer-inner">
        <div class="container">
          <div class="footer-top">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                <svg class="footer__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
                  viewBox="0 0 22 61">
                  <path
                    d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
                    transform="translate(-789 -769)"></path>
                </svg>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Our Address</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>22 Alnahas Building, 2 AlBahr St, Tanta Al-Gharbia Governorate, Egypt</li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Opening Hours</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>Mon - Fri: 10 AM - 11 PM</li>
                    <li>Sat - Sun: 9 AM - 1 PM</li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Private Dinning</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li><span>Main Email:</span><a href="mailto:Babette@7oroof.com">Babette@7oroof.com</a></li>
                    <li><span>Phone:</span><a href="tel:020101236547">02 0101236547</a></li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div><!-- /.footer-top -->
          <div class="footer-middle">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                <div class="footer__logo-wrap text-center">
                  <img src="/images/logo/footer-logo.png" alt="logo" class="footer__logo">
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <p class="mb-20">Babette was designed with the history in mind we have created a soft industrial dining
                  room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.
                </p>
                <a href="reservation.html" class="btn btn__primary btn__bordered btn__lg">Book Your Table Now!</a>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.footer-middle -->
        </div><!-- /.container -->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="footer__copyright mb-30">
                  <span>&copy; Babette, With Love by </span>
                  <a href="http://themeforest.net/user/7oroof" class="color-theme">7oroof.com</a>
                </div>
                <ul class="social__icons social__icons-white justify-content-center">
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul><!-- /.social__icons -->
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
          <svg class="footer__divider-shape-bottom" xmlns="http://www.w3.org/2000/svg" width="142" height="17"
            viewBox="0 0 142 17">
            <path
              d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
              transform="translate(-729 -583)"></path>
          </svg>
        </div><!-- /.Footer-bottom -->
      </div><!-- /.Footer-inner -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-angle-up"></i></button>

    <div class="search-popup">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.search-popup -->

  </div>
  <!-- /.wrapper -->

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>