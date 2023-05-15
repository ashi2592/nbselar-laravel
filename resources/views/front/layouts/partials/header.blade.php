 <!------- fixed action --------->
 <div class="action-fixed action-1">
        <a href="#"><img src="assets/images/fixed-action/messanger.png" /></a>
        <a href="#"><img src="assets/images/fixed-action/call.png" /></a>
        <a href="#"><img src="assets/images/fixed-action/email.png" /></a>
      </div>
      <div class="action-fixed action-2">
        <a href="#"><img src="assets/images/fixed-action/get.png" /></a>
      </div>
      <div class="action-fixed action-3">
        <a href="#"><img src="assets/images/fixed-action/whattsapp.png" /></a>
      </div>
      <!-------- fixed action / -------->
<header>
         <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid"/></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">Company Profile</a>
                     </li>
                     <!-- -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/product') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="#" class="dropdown-item">Rice Plant Machine</a>
                           <a href="#" class="dropdown-item">Dryer</a>
                           <a href="#" class="dropdown-item">Agriculture Equipments</a>
                           <a href="#" class="dropdown-item">Biomass Gasifire</a>
                           <a href="#" class="dropdown-item">CUltivator</a>
                           <a href="#" class="dropdown-item">Chaff Cutter</a>
                        </div>
                     </li>
                     <!-- / -->
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!------ header / ---------->      