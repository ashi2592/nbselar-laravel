@extends('front.layouts.partials.app')
@section('content-title', 'Home')
@section('content')
<div class="page-header">
   <div class="container">
      <h1>Contact Us</h1>
   </div>
</div>
<section id="contact-us">
   <div class="container">
      <div class="d-flex align-items-center mb-3">
         <div class="p-2 flex-shrink-1"><img src="assets/images/logo-only.png" width="100px" height="92"></div>
         <div class="p-2 w-100">
            <h2>NEW BIHAR SELAR UDYOG</h2>
            <p class="title-sub text-gray-dark">Village Shitalpur, Post Jokiyari, Raxaul, Purbi Champaran, Bihar - 845305, India</p>
         </div>
      </div>
      <div class="row mb-4">
         <!-- right -->
         <div class="col-md-6 col-lg-4">
            <div class="contact-details">
               <!-- re -->
               <div class="in rounded">
                  <div class="d-flex">
                     <div class="p-2 flex-shrink-1"><img src="assets/images/contact-us/1.png"></div>
                     <div class="p-2 w-100">
                        <h4>Mr HIRALAL PRASAD</h4>
                        <p class="title-sub">Director</p>
                        <p><a href="#">08045802716</a></p>
                     </div>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="in rounded">
                  <div class="d-flex">
                     <div class="p-2 flex-shrink-1"><img src="assets/images/contact-us/1.png"></div>
                     <div class="p-2 w-100">
                        <h4>Pradeep Kumar</h4>
                        <p class="title-sub">accounting manager</p>
                        <p><a href="#">08045802716</a></p>
                     </div>
                  </div>
               </div>
               <!-- re /-->
               <!-- re -->
               <div class="in rounded">
                  <div class="d-flex">
                     <div class="p-2 flex-shrink-1"><img src="assets/images/contact-us/1.png"></div>
                     <div class="p-2 w-100">
                        <h4>Mr. Saroj Prasad</h4>
                        <p class="title-sub">Marketing Manage</p>
                        <p><a href="#">08045802716</a></p>
                     </div>
                  </div>
               </div>
               <!-- re /-->
            </div>
         </div>
         <!-- right / -->
         <!-- left -->
         <div class="col-md-6 col-lg-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3555.5346783104587!2d84.8496660650464!3d26.98163123309802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399351549b6742b1%3A0x89f8c98662b89e29!2sRaxaul%20Post%20Office!5e0!3m2!1sen!2sin!4v1680863142831!5m2!1sen!2sin" width="100%" height="340" style="border:0; margin-bottom:-7px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <!-- left / -->
      </div>
      <!----------- form --------------->
      <div class="form rounded shadow-1">
         <h4 >RFQ Request For Quotation</h4>
         <div class="title-sub mb-4 text-gray-dark">Get Quotes For Your Buying Requirement. Tell Suppliers What You Need.</div>
         <form>
            <div class="row">
               <div class="col-sm-6">
                  <div class="mb-3">
                     <input type="text" class="form-control form-control-lg" placeholder="Enter your Name" />
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="mb-3">
                     <input type="text" class="form-control form-control-lg" placeholder="Enter your email" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6">
                  <div class="mb-3">
                     <input type="text" class="form-control form-control-lg" placeholder="Enter your Mobile No." />
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="mb-3">
                     <select class="form-control form-control-lg">
                        <option>Select products</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="mb-3">
               <input type="text" class="form-control form-control-lg" placeholder="Subject" />
            </div>
            <div class="mb-3">
               <textarea class="form-control form-control-lg" placeholder="Describe Your BUYING Requirement"></textarea>
            </div>
            <button class="btn btn-success btn-block btn-lg">Post Buy Requirement</button>
         </form>
      </div>
      <!----------- form / --------------->
   </div>
</section>
   
     
@endsection