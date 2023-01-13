<x-layout>
   <section id="page-title" class="page-title page-title-layout1 text-center bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="/images/backgrounds/10.jpg" alt="background"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <h1 class="pagetitle__heading">Contact Us</h1>
            </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <section id="google-map" class="google-map pb-0">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div id="map" style="height:"></div>
               <div class="mapouter">
                  <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=cairo&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe><a
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
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <div class="contact-box">
                        <h6 class="contact__box-title">Our Address</h6>
                        <ul class="contact__box-list list-unstyled">
                           <li>Tivoli Dome, Heliopolis القاهرة، محافظة القاهرة،مصر 12111</li>
                        </ul>
                     </div><!-- /.contact-box -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <div class="contact-box">
                        <h6 class="contact__box-title">Opening Hours</h6>
                        <ul class="contact__box-list list-unstyled">
                           <li>Mon: 10:00 AM - 2:00 AM</li>
                           <li>Sat - Sun: 11:00 AM - 2:00 AM</li>
                        </ul>
                        <a href="#" class="btn btn__link">Call Us</a>
                     </div><!-- /.contact-box -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <div class="contact-box">
                        <h6 class="contact__box-title">Our Email</h6>
                        <ul class="contact__box-list list-unstyled">
                           <li><span>Main Email:</span><a href="mailto:Info.Sarayirestaurant.eg@gmail.com">Info.Sarayirestaurant.eg@gmail.com</a></li>
                           <li><span>Phone:</span><a href="tel:01222743666">01222743666</a></li>
                        </ul>
                     </div><!-- /.contact-box -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <div class="contact-box">
                        <h6 class="contact__box-title">Follow Us</h6>
                        <ul class="social__icons">
                           <li><a href="https://www.facebook.com/sarayiseafood/?mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://www.instagram.com/sarayi_sea_food/"><i class="fa fa-instagram"></i></a></li>
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
                           <input type="text" class="form-control" placeholder="First Name:" id="contact-first-name"
                              name="contact-first-name" required>
                        </div>
                     </div><!-- /.col-lg-6 -->
                     <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Last Name:" id="contact-last-name"
                              name="contact-last-name" required>
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
                           <textarea class="form-control" placeholder="Message" id="contact-message" name="contact-message" required></textarea>
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
   </section>

</x-layout>
