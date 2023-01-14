<x-layout>
   <section id="page-title" class="page-title page-title-layout1 text-center bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="{{ asset('images/backgrounds/team1.jpg') }}" alt="background"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <h1 class="pagetitle__heading">{{__('team.our_chefs')}}</h1>
            </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

    <!-- ========================
        Team
    ========================== -->
    <section id="team" class="team text-center pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout2 text-center mb-40">
              <h2 class="heading__title">{{__('team.talented_chefs')}}</h2>
              <p class="heading__desc">{{__('team.about')}}</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="/images/team/4.jpg" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social__icons  justify-content-center list-unstyled">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="/images/team/2.jpg" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social__icons justify-content-center list-unstyled">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="/images/team/3.jpg" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social__icons justify-content-center list-unstyled">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.team -->

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


</x-layout>
