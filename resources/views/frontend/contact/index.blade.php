@extends('frontend.app')

@section('seo')
   <meta name="description"
      content="We providing Best Handyman Service Singapore focus on providing a series of
    high-quality home repair services at affordable prices. With our experts knowledge and experience,
    our team of maintenance personnel proudly solved multiple maintenance projects in Singapore.
    We provide plumbing, Sliding Door repair service, Electric service, Plastering Service,
    Door repair service, Painting Service, Furniture assemble service etc, handyman services.
    And We offer cheap rated express handyman service . Call us 24/7 for emergency plumber." />

   <meta name="keywords"
      content="Best Handyman Service Singapore, Express Handyman Service Singapore, Plumbing Service,
    Sliding Door Repair singapore, Electrician in singapore,Painting service singapore,
    All Handyman Solution singapore, joo ave handyman service, handyman service singapore,Sliding Door Repair,
    Sliding Glass Door Repair, Door Repair Singapore, Handyman Service Singapore, Handyman Services, Handyman Singapore,
    Plumbing Service Singapore, Plumbers Near Me, 24 Hour Plumber, Door Repair Singapore, Door Repair Near Me,
    Glass Swing Door Repair" />

   <title>ContactUs -Best Handyman Service Singapore - Plumbing Service, Sliding Door Repair, Electric and All Emergency
      Handyman Solution</title>
@endsection

@section('content')
   <main role="main">
      <section class="w3l-contact-breadcrum" style="margin-top: 70px">
         <div class="breadcrum-bg py-sm-5 py-4">
            <div class="py-lg-3 container py-2">
               <h2>Contact Us</h2>
            </div>
         </div>
      </section>

      <!-- contact form -->
      <section class="w3l-contacts-2">
         <div class="contacts-main">
            <div class="contant11-top-bg py-5">
               <div class="py-md-3 container">
                  <div class="d-grid contact section-gap">
                     <div class="contact-info-left d-grid text-center">
                        <div class="contact-info">
                           <span class="fa fa-phone" aria-hidden="true"></span>
                           <h4>Phone</h4>
                           <a href="tel:+65 98112405">+65 98112405</a>
                        </div>

                        <div class="contact-info">
                           <span class="fa fa-whatsapp" aria-hidden="true"></span>
                           <h4>Whatsapp</h4>
                           <a
                              href="https://api.whatsapp.com/send?phone=65-98112405&text=Hello! I'm looking for handyman service. Anyone available for chat?">+65
                              98112405</a>
                        </div>

                        <div class="contact-info">
                           <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                           <h4>Mail</h4>
                           <a href="mailto:hndymanservice.sg@gmail.com">hndymanservice.sg@gmail.com</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //contact form -->

      <!-- contact -->
      <section class="w3l-features-1">
         <!-- /features -->
         <div class="features py-3">
            <div class="container">
               <div class="fea-gd-vv row">
                  <div class="col-lg-4 col-sm-6">
                     <div class="float-lt feature-gd">
                        <div class="icon"> <span class="fa fa-comments-o" aria-hidden="true"></span></div>
                        <div class="icon-info">
                           <h5>Whatsapp</h5>
                           <p class="">Typical response time: 30s </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                     <div class="float-mid feature-gd">
                        <div class="icon"> <span class="fa fa-at" aria-hidden="true"></span></div>
                        <div class="icon-info">
                           <h5>Email</h5>
                           <p class="">Typical response time: 30-60 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
                     <div class="float-rt feature-gd">
                        <div class="icon"> <span class="fa fa-phone" aria-hidden="true"></span></div>
                        <div class="icon-info">
                           <h5>Phone</h5>
                           <p class="">Typical response time: 40s </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- //features -->
      </section>
      <!-- //contact -->

      <!--Google Map-->
      <section class="w3l-contacts-12" id="contact">
         <div class="contact-top">
            <!-- map -->
            <div class="map">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1935231548207!2d103.85253942914628!3d1.3108957406942885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c6f13910a9%3A0x2d6a64c4a6a6a59c!2zMzAgUm9iZXJ0cyBMbiwgIzAyLTAxLCDgprjgpr_gppngp43gppfgpr7gpqrgp4HgprAgMjE4MzA5!5e0!3m2!1sbn!2sbd!4v1664087659375!5m2!1sbn!2sbd"
                  style="border: 0" width="600" height="450" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </section>
      <!--Google Map End-->
   </main>
@endsection
