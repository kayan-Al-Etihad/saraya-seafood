<x-layout>

   <section id="page-title" class="page-title page-title-layout1 text-center bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <h1 class="pagetitle__heading">{{__('about.about')}}</h1>
            </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <section id="bannerLayout1" class="banner banner-layout1 pb-70">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
             <div class="banner__content">
                <div class="banner__content-text" data-aos="fade-right">
                   <div class="banner__content-text-inner">
                      <div class="heading">
                         <h2 class="heading__title pb-3">{{__('about.about_header')}}</h2>
                         <p class="heading__desc colorblue">{{__('about.about_body')}}</p>
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



</x-layout>
