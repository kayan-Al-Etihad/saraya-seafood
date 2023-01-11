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
    <link rel="stylesheet" href="{{ asset('css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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
                            <a href="{{route('about')}}" class="dropdown-toggle nav__item-link">{{ __('index.about') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="{{route('contact')}}" class="dropdown-toggle nav__item-link active">{{ __('index.contact') }}</a>
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

        <section id="page-title" class="page-title page-title-layout1 text-center bg-overlay bg-overlay-2 bg-parallax">
            <div class="bg-img"><img src="/images/backgrounds/10.jpg" alt="background"></div>
            <svg class="pagetitle__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
                viewBox="0 0 22 61">
                <path
                    d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
                    transform="translate(-789 -769)"></path>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <span class="pagetitle__subheading">Get In Toutch</span>
                        <h1 class="pagetitle__heading">Contact Us</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->


        <section id="google-map" class="google-map pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div id="map" style="height:"></div>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=cairo&t=&z=11&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://fmovies-online.net"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 932px;
                                    }

                                </style><a href="https://www.embedgooglemap.net">embed google map location</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 500px;
                                        width: 1100px;
                                    }

                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p>Babette was the first restaurant to open in Egypt, the resturant was designed with
                                    the history in
                                    mind we
                                    have created a soft industrial dining room, combined with an open kitchen, coffee
                                    take out bar and on
                                    site coffee roastery.</p>
                            </div><!-- /.col-lg-12 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="contact-box">
                                    <h6 class="contact__box-title">Our Address</h6>
                                    <ul class="contact__box-list list-unstyled">
                                        <li>22 Alnahas Building, 2 AlBahr St, Tanta Al-Gharbia Governorate, Egypt</li>
                                    </ul>
                                    <a href="#" class="btn btn__link">Get Directions</a>
                                </div><!-- /.contact-box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="contact-box">
                                    <h6 class="contact__box-title">Opening Hours</h6>
                                    <ul class="contact__box-list list-unstyled">
                                        <li>Mon - Fri: 10 AM - 11 PM</li>
                                        <li>Sat - Sun: 9 AM - 1 PM</li>
                                    </ul>
                                    <a href="#" class="btn btn__link">Call Us</a>
                                </div><!-- /.contact-box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="contact-box">
                                    <h6 class="contact__box-title">Our Email</h6>
                                    <ul class="contact__box-list list-unstyled">
                                        <li><span>Main Email:</span><a
                                                href="mailto:Babette@7oroof.com">Babette@7oroof.com</a></li>
                                        <li><span>Phone:</span><a href="tel:020101236547">02 0101236547</a></li>
                                    </ul>
                                    <a href="#" class="btn btn__link">Send a Message</a>
                                </div><!-- /.contact-box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="contact-box">
                                    <h6 class="contact__box-title">Follow Us</h6>
                                    <ul class="social__icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul><!-- /.social__icons -->
                                </div><!-- /.contact-box -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <form method="post" action="/php/contact.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name:"
                                            id="contact-first-name" name="contact-first-name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name:"
                                            id="contact-last-name" name="contact-last-name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email:" id="contact-email"
                                            name="contact-email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone:" id="contact-phone"
                                            name="contact-phone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-30">
                                        <textarea class="form-control" placeholder="Message" id="contact-message"
                                            name="contact-message" required></textarea>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__primary btn__block">Send Message</button>
                                    <div class="contact-result mt-3"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact 1 -->

        <!-- ========================
      Footer
    ========================== -->
        <footer id="footer" class="footer footer-layout1 text-center bg-dark">
            <div class="footer-inner">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                                <svg class="footer__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22"
                                    height="61" viewBox="0 0 22 61">
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
                                        <li><span>Main Email:</span><a
                                                href="mailto:Babette@7oroof.com">Babette@7oroof.com</a></li>
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
                                <p class="mb-20">Babette was designed with the history in mind we have created a soft
                                    industrial dining
                                    room, combined with an open kitchen, coffee take out bar and alovely awesome on site
                                    coffee roastery.
                                </p>
                                <a href="reservation.html" class="btn btn__primary btn__bordered btn__lg">Book Your
                                    Table Now!</a>
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
