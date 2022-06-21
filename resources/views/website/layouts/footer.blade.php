<!-- Footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5 py-5">
   <!-- Footer -->
   <footer class="text-center text-lg-start text-white mt-auto pt-5 pb-4" id="footer">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
         <div class="d-flex justify-content-between">
            <img src="{{get_company_logo()}}" alt="{{ get_company_name() }}">
            <div class="text-cent text-md-end">
               @if($link = settings('facebook'))
               <a class="btn btn-outline-light btn-floating m-1" class="text-white" href="{{ $link }}"><i
                     class="bi bi-facebook"></i>
               </a>
               @endif
               <!-- Twitter -->
               @if($link = settings('twitter'))

               <a class="btn btn-outline-light btn-floating m-1" class="text-white" href="{{ $link }}"><i
                     class="bi bi-twitter"></i></a>
               @endif

               <!-- Instagram -->
               @if($link = settings('instagram'))

               <a class="btn btn-outline-light btn-floating m-1" class="text-white" href="{{ $link }}"><i
                     class="bi bi-instagram"></i></a>
               @endif
               <!-- Linkedin -->
               @if($link = settings('linkedin'))
               <a class="btn btn-outline-light btn-floating m-1" class="text-white" href="{{ $link }}"><i
                     class="bi bi-linkedin"></i></a>
               @endif
            </div>
         </div>
         <!-- Section: Links -->
         <section class="pt-5 pb-3">
            <!--Grid row-->
            <div class="row">
               <!-- Grid column -->
               <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
                  <p>
                     <a class="text-white" href="{{route('service_page')}}">Services</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('about_page')}}">About Us</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('contact_page')}}">Contact Us</a>
                  </p>
               </div>
               <!-- Grid column -->

               <hr class="w-100 clearfix d-md-none" />

               <!-- Grid column -->
               <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold">Useful Links</h5>
                  <p>
                     <a class="text-white" href="{{route('privacy_policy')}}">Privacy Policy</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('terms_and_conditions')}}">Terms & Conditions</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('revision_policy')}}">Revision Policy</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('money_back_guarantee')}}">Money Back Guarantee</a>
                  </p>
                  <p>
                     <a class="text-white" href="{{route('disclaimer')}}">Disclaimer</a>
                  </p>


               </div>
               <!-- Grid column -->

               <hr class="w-100 clearfix d-md-none" />

               <!-- Grid column -->
               <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold">
                     Office Address
                  </h5>
                  <p>
                     <a class="text-white">

                        76 Division St, New York,
                        NY 723619, USA
                     </a>
                  </p>
                  <p>
                     <a class="text-white">012, moke road,
                        2 notron street, USA.</a>
                  </p>

               </div>

               <!-- Grid column -->
               <hr class="w-100 clearfix d-md-none" />

               <!-- Grid column -->
               <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
                  <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fas fa-envelope mr-3"></i> support@competentwriter.com</p>
                  <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
               </div>
               <!-- Grid column -->
            </div>
            <!--Grid row-->
         </section>
         <!-- Section: Links -->

         <hr class="mt-5 mb-3">

         <!-- Section: Copyright -->
         <div class="text-center">
            <!-- Copyright -->
            <div class="p-3">
               Copyright © {{ date("Y") }}
               <a class="text-white" href="{{url('/')}}">{{get_company_name()}}.</a>
               All Rights Reserved.
            </div>
            <!-- Copyright -->
         </div>
      </div>
      <!-- Grid container -->
   </footer>
   <!-- Footer -->