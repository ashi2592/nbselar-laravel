@extends('front.layouts.partials.app')
@section('content-title', 'Home')
@section('content')

<!----------- banner ----------->
   <div class="banner bg-full">
         <div class="container">
            <div class="row d-flex align-items-center">
               <!-- banner left -->
               <div class="col-lg-7 banner-left">
                  <h1>WELCOME TO OUR COMPANY !</h1>
                  <p class="title-sub">Specializes  lorem ipsum  and excel at offering customers Automatic Rice Mill Machine, Semi-Automatic Rice Plants and a lot more...</p>
                  <br/>
                  <div class="row mb-4 mb-lg-0">
                     <div class="col-lg-11">
                        <!-- slider -->
                        <div class="owl-carousel owl-theme single-slider">
                           <div class="item">
                              <div class="img">
                                 <img src="{{ asset('assets/images/slider/1.jpg') }}" />
                              </div>
                           </div>
                           <div class="item">
                              <div class="img">
                                 <img src="{{ asset('assets/images/slider/1.jpg')}}" />
                              </div>
                           </div>
                        </div>
                        <!-- slider / -->
                     </div>
                  </div>
               </div>
               <!-- banner left / -->
               <!-- banner right -->
               <div class="col-lg-5">
                  <div class="m-form">
                     <div class="m-form-header">
                        <div class="d-flex">
                           <div class="p-2 flex-shrink-1"><img src="assets/images/form.png" /></div>
                           <div class="p-2 w-100">
                              <h4>RFQ Request For Quotation</h4>
                              <p class="title-sub">Get Quotes For Your Buying Requirement. Tell Suppliers What You Need.</p>
                           </div>
                        </div>
                     </div>
                     <div class="p-2">
                        <div class="m-form-body">
                           <form>
                              <div class="mb-3">
                                 <select class="form-control">
                                    <option>Select products</option>
                                 </select>
                              </div>
                              <div class="mb-3">
                                 <input type="text" class="form-control" placeholder="Enter your email" />
                              </div>
                              <div class="mb-3">
                                 <textarea class="form-control" placeholder="Describe Your BUYING Requirement"></textarea>
                              </div>
                              <button class="btn btn-success btn-block">Post Buy Requirement</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- banner right / -->
            </div>
         </div>
   </div>
      <!----------- banner / ----------->
      <!------------ success ------------>
      <div class="success-row text-center">
         <div class="container">
            <div class="row d-flex align-items-stretch justify-content-center">
               <!-- re --> 
               <div class="col-6 col-md-2 mb-4 mb-md-0">
                  <div class="icon"><img src="assets/images/success-row/1.png" /></div>
                  <div class="count">15+</div>
                  <div class="title-sub">Years of Experience</div>
               </div>
               <!-- re /-->
               <!-- re --> 
               <div class="col-6 col-md-2 mb-4 mb-md-0">
                  <div class="icon"><img src="assets/images/success-row/2.png" /></div>
                  <div class="count">67+</div>
                  <div class="title-sub">Products</div>
               </div>
               <!-- re /-->
               <!-- re --> 
               <div class="col-6 col-md-2 mb-4 mb-md-0">
                  <div class="icon"><img src="assets/images/success-row/3.png" /></div>
                  <div class="count">19+</div>
                  <div class="title-sub">Exporting Countries</div>
               </div>
               <!-- re /-->
               <!-- re --> 
               <div class="col-6 col-md-2 mb-4 mb-md-0">
                  <div class="icon"><img src="assets/images/success-row/4.png" /></div>
                  <div class="count">300+</div>
                  <div class="title-sub">100% Satisfied Clients</div>
               </div>
               <!-- re /-->
               <!-- re --> 
               <div class="col-6 col-md-2 mb-4 mb-md-0">
                  <div class="icon"><img src="assets/images/success-row/5.png" /></div>
                  <div class="count">4.5</div>
                  <div class="title-sub">Google review</div>
               </div>
               <!-- re /-->
            </div>
         </div>
      </div>
      <!------------ success / ------------>
      <!------------------- products slider -------------------->
      <section id="products" class="background">
         <div class="background-in bg-right-bottom"></div>
         <div class="container">
            <div class="d-sm-flex align-items-center title-header-with-icon py-4 text-center text-sm-left">
               <div class="p-2 flex-shrink-1"><img src="assets/images/icon.png" /></div>
               <div class="p-2 w-100">
                  <h2>OUR PRODUCTS</h2>
                  <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
               </div>
               <div class="p-2 flex-shrink-1"><a href="#" class="btn btn-outline-primary btn-lg">View all</a></div>
            </div>
            <!----------- slider ----------->
            <div class="owl-carousel owl-theme products-slider">
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="item">
                  <div class="in rounded">
                     <a href="#">
                        <div class="img">
                           <img src="assets/images/pro.jpg" />
                        </div>
                     </a>
                     <div class="icon"><a href="#"><img src="assets/images/call.png" /></a></div>
                     <h4>Fully Automatic Rice Plant</h4>
                     <a href="#" class="btn btn-primary btn-sm">Send Inquiry</a>
                  </div>
               </div>
               <!-- re /-->
            </div>
            <!----------- slider / ----------->
         </div>
      </section>
      <!------------------- products slider / -------------------->
      <!----------------- about us -------------------->
      <section id="about-us" class="background ">
         <div class="background-in bg-full"></div>
         <div class="background-in-over"></div>
         <div class="container">
            <div class="data">
               <div class="in rounded">
                  <div class="d-flex align-items-center">
                     <div class="p-2 flex-shrink-1"><img src="assets/images/logo-only.png" width="100px" height="92" /></div>
                     <div class="p-2 w-100">
                        <h2>ABOUT</h2>
                        <p class="title-sub">New Bihar Selar Udyog</p>
                     </div>
                  </div>
                  <div class="data-pera">
                     <p>We, New Bihar Selar Udyog, are a company renowned for serving customers a wide range of milling machines and plants of quality unmatched by any other business entity in the entire industry. We are a well capable Manufacturer, which till date has never failed to fulfill the requirements of customers and has always made a qualitative approach in its machines and plants. If we talk about variety in our range of offering, then also we distinct ourselves from any other business entity because we focus on attracting a large number of customers by sufficing their diverse needs...</p>
                     <div class="text-center">
                        <a href="#" class="btn btn-outline-secondary btn-lg">Read more</a>
                     </div>
                  </div>
               </div>
            </div>
            <!------- bottom ----------->
            <div class="row d-flex align-items-stretch about-bottom">
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
               <!-- re -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <a href="#">
                     <div class="d-flex">
                        <div class="p-2 flex-shrink-1"><img src="assets/images/pro-circle/1.png" class="rounded rounded-circle" /></div>
                        <div class="p-2 w-100">
                           <h4>Rice Plant Machine</h4>
                           <p class="title-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- re / -->
            </div>
            <!------- bottom  /----------->
         </div>
      </section>
      <!----------------- about us / -------------------->
      <!------------------- expert -------------------------->
      <section id="expert" class="background">
         <div class="background-in bg-left-bottom"></div>
         <div class="container text-center">
            <div class="section-header">
               <h2 class="text-primary">Braced by Experts</h2>
               <div class="title-sub text-gray-dark">A high performing team is undoubtedly an asset to a company which it cherishes the most but we are a company which enjoys the perk of self motivated, sincere and high performing team. Owing to the efforts of these experts we have remarkably grown in this industry, and have always been a company on which customers can rely for getting their needs sufficed. The appointed experts are immensely dedicated to achieve the targets and work together so that the works of each departments are coordinated and we work in a complete streamlined manner. We have below listed experts working with us:-</div>
            </div>
            <div class="row d-flex align-items-stretch">
               <!-- re -->     
               <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <div class="in">
                     <div class="icon rounded rounded-circle" ><img src="assets/images/expert/1.png" /></div>
                     <h4>Engineers</h4>
                  </div>
               </div>
               <!-- re / -->
               <!-- re -->     
               <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <div class="in">
                     <div class="icon rounded rounded-circle" ><img src="assets/images/expert/2.png" /></div>
                     <h4>Quality Checkers</h4>
                  </div>
               </div>
               <!-- re / -->
               <!-- re -->     
               <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <div class="in">
                     <div class="icon rounded rounded-circle" ><img src="assets/images/expert/3.png" /></div>
                     <h4>Accounting Personnel</h4>
                  </div>
               </div>
               <!-- re / -->
               <!-- re -->     
               <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <div class="in">
                     <div class="icon rounded rounded-circle" ><img src="assets/images/expert/4.png" /></div>
                     <h4>Marketing Executives</h4>
                  </div>
               </div>
               <!-- re / -->
            </div>
         </div>
      </section>
      <!------------------- expert / -------------------------->
      <!------------------- trust ----------------------->
      <section id="trust" class="background">
         <div class="background-in bg-full"></div>
         <div class="background-in-over"></div>
         <div class="container">
            <div class="section-header text-center">
               <h2 class="text-white">A Name to Trust</h2>
               <div class="title-sub text-white">Earning trust is not an easy task. It requires genuineness, consistency and commitment. We, since our inception have been a business entity which has proven itself worthy of trust of customers. Every step we have taken in this industry, we have always ascertained to satisfy our clients with best products and services. As we have grown in this industry, and as we move, we believe and strictly focus on being a company on which clients can blindly trust.</div><br/>
             
              <div class="trust-video video-responsive">
              <video controls="true" loop="true"  poster="assets/video/poster.jpg">
               <source id="video_src1" src="https://orig-videos.tradeindia.com/video/flv/catalogs/94449/video94449_001.mp4" type="video/mp4" />
             </video>
              </div>
            </div>
         </div>
      </section>
      <!------------------- trust / ----------------------->
      <!------------------ why ------------------->
      <section id="why">
         <div class="container">
            <div class="section-header text-center">
               <h2 class="text-secondary">WHY SHOULD YOU CHOOSE US</h2>
               <div class="title-sub text-gray-dark">To Be Your Reliable Supplier</div>
            </div>
            <div class="row why-flow -flex align-items-center">
               <!----- left ---->
               <div class="col-md-3 why-flow-left">
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
               </div>
               <!----- left / ---->
               <!----- center ---->
               <div class="col-md-6 why-flow-center">
                  <img src="assets/images/why.png" width="100%" />
               </div>
               <!----- center / ---->
               <!----- right ---->
               <div class="col-md-3 why-flow-right">
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
                  <!-- re -->
                  <div class="in">
                     <h4>Best Supplier</h4>
                     <div class="title-sub">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                     </div>
                  </div>
                  <!-- re / -->
               </div>
               <!----- right / ---->
            </div>
         </div>
      </section>
      <!------------------ why / ------------------->
      <!-------------- testimonials  ----------------->
      <section id="testimonials"class="background">
         <div class="background-in bg-full"></div>
         <div class="background-in-over"></div>
         <div class="container">
            <div class="testimonials-box rounded">
               <div class="row d-flex align-items-center">
                  <div class="col-md-3 text-center text-md-left">
                     <img src="assets/images/testimonials.png" class="img-fluid" />
                     <h3>Testimonials </h3>
                     <div class="title-sub">of NEW BIHAR SELAR UDYOG</div>
                  </div>
                  <div class="col-md-9">
                     <!------ testimonials-slider ------>
                     <div class="owl-carousel owl-theme testimonials-slider">
                        <!-- re -->
                        <div class="item">
                           <div class="in text-center rounded">
                              <div class="img"><img src="assets/images/t-1.jpg" class="rounded rounded-circle" /></div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                              <h4>Gaurav saini</h4>
                              <div class="arrow-down"></div>
                           </div>
                        </div>
                        <!-- re -->
                        <!-- re -->
                        <div class="item">
                           <div class="in text-center rounded">
                              <div class="img"><img src="assets/images/t-1.jpg" class="rounded rounded-circle" /></div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                              <h4>Gaurav saini</h4>
                              <div class="arrow-down"></div>
                           </div>
                        </div>
                        <!-- re -->
                        <!-- re -->
                        <div class="item">
                           <div class="in text-center rounded">
                              <div class="img"><img src="assets/images/t-1.jpg" class="rounded rounded-circle" /></div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                              <h4>Gaurav saini</h4>
                              <div class="arrow-down"></div>
                           </div>
                        </div>
                        <!-- re -->
                        <!-- re -->
                        <div class="item">
                           <div class="in text-center rounded">
                              <div class="img"><img src="assets/images/t-1.jpg" class="rounded rounded-circle" /></div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                              <h4>Gaurav saini</h4>
                              <div class="arrow-down"></div>
                           </div>
                        </div>
                        <!-- re -->
                     </div>
                     <!------ testimonials-slider / ------>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-------------- testimonials /  ----------------->
      <!------ clients ---------->
      <section id="clients">
         <div class="container">
            <div class="owl-carousel owl-theme clients-slider">
               <div class="item"><img src="assets/images/partnes/1.jpg" /></div>
               <div class="item"><img src="assets/images/partnes/2.jpg" /></div>
               <div class="item"><img src="assets/images/partnes/3.jpg" /></div>
               <div class="item"><img src="assets/images/partnes/4.jpg" /></div>
               <div class="item"><img src="assets/images/partnes/5.jpg" /></div>
               <div class="item"><img src="assets/images/partnes/6.jpg" /></div>
            </div>
         </div>
      </section>
      <!------ clients . ---------->
     
      @endsection