<x-layout>
   <section id="slider" class="slider slider-layout1">
      <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
         data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000"
         data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
         <div class="slide-item align-v-h text-center bg-overlay">
            <div class="bg-img"><img src="{{ asset('images/backgrounds/2.jpg') }}" alt="slide img"></div>
            <div class="slide__conten">
               <img src="{{ asset('images/logo/logo-light.png') }}" class="image" alt="slide img"
                  style="display: inline;">
               <a href="{{ route('menu') }}" class="btn btn__white btn__bordered my-5">{{ __('menu.menu') }}</a>
            </div>
         </div>
         <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
            <div class="bg-img"><img src="{{ asset('images/backgrounds/1.jpg') }}" alt="slide img"></div>
            <div class="slide__conten">
               <img src="{{ asset('images/logo/logo-light.png') }}" alt="slide img" width="10"
                  style="display: inline;">
               <a href="{{ route('menu') }}" class="btn btn__white btn__bordered my-5">{{ __('menu.menu') }}</a>
            </div>
         </div>
      </div>
   </section>

   <section class="pt-0">
      <div class="bg-img"><img src="{{ asset('images/backgrounds/pattern/2.png') }}" alt="background"></div>
   </section>

   <section id="bannerLayout1" class="banner banner-layout1 pb-70">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="banner__content">
                  <div class="banner__content-text" data-aos="fade-right">
                     <div class="banner__content-text-inner">
                        <div class="heading">
                           <h2 class="heading__title pb-3">{{ __('menu.welcome') }}</h2>
                           <p class="heading__desc">{{__('menu.main_objective')}}</p>
                        </div>
                     </div>
                  </div>
                  <div class="banner__content-img" data-aos="fade-left">
                     <img src="{{ asset('gif/RotatingSeaFood.gif') }}" alt="banner">
                  </div><!-- /.banner__content-img -->
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="menulayout5" class="menu-layout5 pb-60 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="{{ asset('images/476/backgroundDiscover.jpg') }}" alt="background"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
               <div class="heading heading-white text-center mb-50">
                  <h2 class="heading__title">{{__('menu.discover_menu')}}</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="menu-wrapper">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="tab1">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                              <div class="menu-item">
                                 <h4 class="menu__item-title">كلاسيك بريك فاست</h4>
                                 <span class="pricing__tag">New</span>
                                 <span class="menu__item-price">60 EGP</span>
                                 <p class="menu__item-desc">اومليت, توست, مشروم, فرايز.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">سراي بريك فاست</h4>
                                 <span class="menu__item-price">80 EGP</span>
                                 <p class="menu__item-desc">ميكس اومليت سلامي او سجق, مشروم, توست, فرايز.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">كلوب ساندوتش</h4>
                                 <span class="pricing__tag">Recommended</span>
                                 <span class="menu__item-price">$13.95</span>
                                 <p class="menu__item-desc">وست اومليت, سموك بيف , سموك تركى طماطم , مايونيز فراي.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">باستا سى فود</h4>
                                 <span class="menu__item-price">$20.95</span>
                                 <p class="menu__item-desc">وايت صوص - ريد صوص جمبرى-فيليه -سبيط-كلمارى </p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Healthy Breakfast</h4>
                                 <span class="menu__item-price">$18.95</span>
                                 <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                              </div><!-- /.menu-item -->
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
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
                                 <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.
                                 </p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Salmon Steak</h4>
                                 <span class="menu__item-price">$27.95</span>
                                 <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                              </div><!-- /.menu-item -->
                           </div>
                        </div><!-- /.row  -->
                     </div><!-- /.tab  -->
                     <div class="tab-pane fade" id="tab2">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                                 <span class="pricing__tag">Recommended</span>
                                 <span class="menu__item-price">$13.95</span>
                                 <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
                              </div><!-- /.menu-item -->
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
                                 <h4 class="menu__item-title">Breakfast Set</h4>
                                 <span class="menu__item-price">$20.95</span>
                                 <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Healthy Breakfast</h4>
                                 <span class="menu__item-price">$18.95</span>
                                 <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                              </div><!-- /.menu-item -->
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Chicken Crispy</h4>
                                 <span class="menu__item-price">$33.95</span>
                                 <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                              </div><!-- /.menu-item -->
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
                                 <h4 class="menu__item-title">Salmon Steak</h4>
                                 <span class="menu__item-price">$27.95</span>
                                 <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Grilled Fillet</h4>
                                 <span class="menu__item-price">$26.95</span>
                                 <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.
                                 </p>
                              </div><!-- /.menu-item -->
                           </div>
                        </div><!-- /.row  -->
                     </div><!-- /.tab  -->
                     <div class="tab-pane fade" id="tab3">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
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
                                 <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.
                                 </p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Salmon Steak</h4>
                                 <span class="menu__item-price">$27.95</span>
                                 <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                              </div><!-- /.menu-item -->
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
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
                                 <h4 class="menu__item-title">Healthy Breakfast</h4>
                                 <span class="menu__item-price">$18.95</span>
                                 <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                              </div><!-- /.menu-item -->
                           </div>
                        </div><!-- /.row  -->
                     </div><!-- /.tab  -->
                     <div class="tab-pane fade" id="tab4">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Breakfast Set</h4>
                                 <span class="menu__item-price">$20.95</span>
                                 <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                              </div><!-- /.menu-item -->
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
                                 <h4 class="menu__item-title">Healthy Breakfast</h4>
                                 <span class="menu__item-price">$18.95</span>
                                 <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                              </div><!-- /.menu-item -->
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Chicken Crispy</h4>
                                 <span class="menu__item-price">$33.95</span>
                                 <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Grilled Fillet</h4>
                                 <span class="menu__item-price">$26.95</span>
                                 <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.
                                 </p>
                              </div><!-- /.menu-item -->
                              <div class="menu-item">
                                 <h4 class="menu__item-title">Salmon Steak</h4>
                                 <span class="menu__item-price">$27.95</span>
                                 <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                              </div><!-- /.menu-item -->
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
                           </div>
                        </div><!-- /.row  -->
                     </div><!-- /.tab  -->
                  </div><!-- /.tab-content  -->
               </div><!-- /.menu-wrapper  -->
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
               <a href="{{route('menu')}}" class="btn-custom">{{__('menu.menu')}}</a>
            </div>
         </div>
      </div>
   </section>

   <section id="bannerLayout2" class="banner banner-layout2 pb-130">
      <div class="bg-img"><img src="/images/backgrounds/pattern/1.png" alt="background"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="banner__content">
                  <div class="banner__content-text" data-aos="fade-left">
                     <div class="banner__content-text-inner">
                        <div class="heading mb-40">
                           <h2 class="heading__title">{{__('menu.sarayi_breakfast')}}</h2>
                           <div class="heading__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 viewBox="0 0 20 20">
                                 <path
                                    d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                                    transform="translate(-505 -925)"></path>
                              </svg>
                           </div>
                           <p class="heading__desc">{{__('menu.food_moments')}}</p>
                        </div>
                        {{-- <a href="#" class="btn btn__secondary btn__link mx-2 my-1">{{__('menu.explore_events')}}</a> --}}
                        <a href="#" class="btn btn__primary mx-2 my-1">{{__('menu.explore_events')}}</a>
                     </div>
                  </div>
                  <div class="banner__content-img" data-aos="fade-right">
                     <img src="{{ asset('gif/RotatingSeaFood.gif') }}" style="transform: scaleX(-1);" alt="banner">
                  </div><!-- /.banner__content-img -->
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="portfolioGallery" class="portfolio portfolio-gallery portfolio-gallery-no-margin py-0">
      <div class="container-fluid col-padding-0">
         <div class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/1.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/1.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #2 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/2.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/2.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #3 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/3.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/3.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #4 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/4.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/4.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #5 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/5.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/5.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #6 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/6.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/6.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #7 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/7.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/7.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="portfolio-item">
                  <div class="portfolio__img">
                     <img src="{{ asset('images/476/8.jpg') }}" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__hover">
                     <a href="{{ asset('images/476/8.jpg') }}" data-lightbox="lightbox" class="zoom__icon"></a>
                  </div><!-- /.portfolio__hover-->
               </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
         </div>
      </div>
   </section>

</x-layout>
