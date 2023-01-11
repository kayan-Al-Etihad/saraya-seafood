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
                          <a href="{{route('index')}}" class="dropdown-toggle nav__item-link ">{{ __('index.home') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                          <a href="{{route('menu')}}" class="dropdown-toggle nav__item-link active">{{ __('index.menu') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                          <a href="{{route('team')}}" class="dropdown-toggle nav__item-link">{{ __('index.team') }}</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item with-dropdown">
                        <a href="{{route('offers')}}" class="dropdown-toggle nav__item-link">{{ __('index.offer') }}</a>
                    </li>
                      <li class="nav__item with-dropdown">
                          <a href="{{route('about')}}" class="dropdown-toggle nav__item-link">{{ __('index.about') }}</a>
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
    <section id="page-title" class="page-title page-title-layout3 text-center bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/10.jpg" alt="background"></div>
      <svg class="pagetitle__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
        viewBox="0 0 22 61">
        <path
          d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
          transform="translate(-789 -769)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <span class="pagetitle__subheading">Discover</span>
            <h1 class="pagetitle__heading">Our Menu</h1>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
        Text Block 
    =========================== -->
    <section id="textBlock" class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
              <span class="heading__subtitle">Taste The Best</span>
              <h2 class="heading__title">Discover Our Menu</h2>
              <div class="heading__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path
                    d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                    transform="translate(-505 -925)"></path>
                </svg>
              </div>
              <p class="heading__desc">Even if you're not a great chef, there's nothing to stop you understanding
                the difference between what tastes good and what doesn't.</p>
              <img src="/images/about/signature.png" alt="signature">
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Block -->

    <!-- ========================
       Text Banner layout 1
    =========================== -->
    <section id="textBanner"
      class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/1.jpg" alt="background"></div>
      <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
        <path
          d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
          transform="translate(-729 -583)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Starts At 11:00 am</span>
            <h2 class="banner__title">Breakfast Menu</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout 1 -->

    <!-- ========================
        Menu layout 
    =========================== -->
    <section id="menulayout1" class="menu-layout1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
              <span class="menu__item-price">$12.95</span>
              <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Sandwich</h4>
              <span class="menu__item-price">$15.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Pan of Fried Eggs</h4>
              <span class="pricing__tag">Recommended</span>
              <span class="menu__item-price">$13.95</span>
              <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Breakfast Set</h4>
              <span class="menu__item-price">$20.95</span>
              <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Healthy Breakfast</h4>
              <span class="menu__item-price">$18.95</span>
              <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Breast</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$41.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Crispy</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Grilled Fillet</h4>
              <span class="menu__item-price">$26.95</span>
              <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$27.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 1 -->

    <!-- ========================
       text Banner layout1
    =========================== -->
    <section id="textBanner2"
      class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/2.jpg" alt="background"></div>
      <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
        <path
          d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
          transform="translate(-729 -583)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Starts At 2:00 pm</span>
            <h2 class="banner__title">Lunch Menu</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout1 -->

    <!-- ========================
        Menu layout 
    =========================== -->
    <section id="menu-layout1" class="menu-layout1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
              <span class="pricing__tag">Selection</span>
              <span class="menu__item-price">$12.95</span>
              <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Sandwich</h4>
              <span class="menu__item-price">$15.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Pan of Fried Eggs</h4>
              <span class="menu__item-price">$13.95</span>
              <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Breakfast Set</h4>
              <span class="menu__item-price">$20.95</span>
              <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Healthy Breakfast</h4>
              <span class="menu__item-price">$18.95</span>
              <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Breast</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="pricing__tag">New</span>
              <span class="menu__item-price">$41.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Crispy</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Grilled Fillet</h4>
              <span class="menu__item-price">$26.95</span>
              <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$27.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 1 -->

    <!-- ========================
       text Banner layout1
    =========================== -->
    <section id="textBanner3"
      class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/3.jpg" alt="background"></div>
      <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
        <path
          d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
          transform="translate(-729 -583)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Starts At 7:00 pm</span>
            <h2 class="banner__title">Dinner Menu</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout1 -->

    <!-- ========================
        Menu layout 
    =========================== -->
    <section id="menulayout" class="menu-layout1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
              <span class="pricing__tag">Selection</span>
              <span class="menu__item-price">$12.95</span>
              <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Sandwich</h4>
              <span class="menu__item-price">$15.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Pan of Fried Eggs</h4>
              <span class="menu__item-price">$13.95</span>
              <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Breakfast Set</h4>
              <span class="pricing__tag">Selection</span>
              <span class="menu__item-price">$20.95</span>
              <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Healthy Breakfast</h4>
              <span class="menu__item-price">$18.95</span>
              <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Breast</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$41.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Crispy</h4>
              <span class="pricing__tag">New</span>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Grilled Fillet</h4>
              <span class="menu__item-price">$26.95</span>
              <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$27.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 1 -->

    <!-- ========================
       text Banner layout1
    =========================== -->
    <section id="textBanner4"
      class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/4.jpg" alt="background"></div>
      <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
        <path
          d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
          transform="translate(-729 -583)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Don’t Miss</span>
            <h2 class="banner__title">Dessert Menu</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout1 -->

    <!-- ========================
        Menu layout 
    =========================== -->
    <section id="menuLayout1" class="menu-layout1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
              <span class="pricing__tag">Selection</span>
              <span class="menu__item-price">$12.95</span>
              <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Breakfast Set</h4>
              <span class="menu__item-price">$20.95</span>
              <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Healthy Breakfast</h4>
              <span class="menu__item-price">$18.95</span>
              <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Crispy</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Grilled Fillet</h4>
              <span class="menu__item-price">$26.95</span>
              <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Salmon Steak</h4>
              <span class="menu__item-price">$27.95</span>
              <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 1 -->

    <!-- ========================
       text Banner layout1
    =========================== -->
    <section id="textBanner5"
      class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/5.jpg" alt="background"></div>
      <svg class="divider-shape" xmlns="http://www.w3.org/2000/svg" width="142" height="17" viewBox="0 0 142 17">
        <path
          d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
          transform="translate(-729 -583)"></path>
      </svg>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Don’t Miss</span>
            <h2 class="banner__title">Dessert Menu</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout1 -->

    <!-- ========================
        Menu layout 
    =========================== -->
    <section id="menuLayout" class="menu-layout1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Drinks Set</h4>
              <span class="menu__item-price">$20.95</span>
              <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Healthy Breakfast</h4>
              <span class="menu__item-price">$18.95</span>
              <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu-item">
              <h4 class="menu__item-title">Chicken Crispy</h4>
              <span class="menu__item-price">$33.95</span>
              <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
            </div><!-- /.menu-item -->
            <div class="menu-item">
              <h4 class="menu__item-title">Grilled Fillet</h4>
              <span class="menu__item-price">$26.95</span>
              <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
            </div><!-- /.menu-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 1 -->

    <!-- =====================
       Clients
    ======================== -->
    <section id="clients" class="clients text-center pt-0 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <h2 class="heading__title mb-30">A recognized track-record of excellence</h2>
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="3" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="/images/clients/1.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="/images/clients/2.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="/images/clients/3.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="/images/clients/4.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="/images/clients/5.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="/images/clients/6.png" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

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