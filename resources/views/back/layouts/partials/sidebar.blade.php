<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
               <div class="app-brand demo">
                  <a href="#" class="app-brand-link">
                  <span class="app-brand-logo demo">
                  <img src="{{ asset('img/logo.png') }}" />
                  </span>
                  </a>
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                  <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
               </div>
               <div class="menu-inner-shadow"></div>
               <ul class="menu-inner py-1">
                  <!-- Dashboard -->
                  <li class="menu-item active">
                     <a href="{{ route('home') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                     </a>
                  </li>
                  <!-- Layouts -->
                  <!--<li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout text-primary"></i>
                        <div data-i18n="Layouts">Page Title 1</div>
                     </a>
                     <ul class="menu-sub">
                        <li class="menu-item">
                           <a href="#" class="menu-link">
                              <div data-i18n="Without menu">Title 1</div>
                           </a>
                        </li>
                        <li class="menu-item">
                           <a href="#" class="menu-link">
                              <div data-i18n="Without menu">Title 2</div>
                           </a>
                        </li>
                        <li class="menu-item">
                           <a href="#" class="menu-link">
                              <div data-i18n="Without menu">Title 3</div>
                           </a>
                        </li>
                     </ul>
                  </li>-->
                  <li class="menu-header small text-uppercase">
                     <span class="menu-header-text">Other</span>
                  </li>
                  <!--<li class="menu-item">
                     <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top text-primary"></i>
                        <div data-i18n="Account Settings">Page Title 2</div>
                     </a>
                     <ul class="menu-sub">
                        <li class="menu-item">
                           <a href="#" class="menu-link">
                              <div data-i18n="Account">Title 1</div>
                           </a>
                        </li>
                        <li class="menu-item">
                           <a href="#" class="menu-link">
                              <div data-i18n="Account">Title 2</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item">
                     <a  href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-search text-primary"></i>
                        <div data-i18n="Support">Page Title 3</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a  href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-collection text-primary"></i>
                        <div data-i18n="Support">Page Title 4</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a  href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-envelope text-primary"></i>
                        <div data-i18n="Support">Page Title 5</div>
                     </a>
                  </li>-->
                  <li class="menu-item">
                     <a  href="{{route('user.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bell text-primary"></i>
                        <div data-i18n="Support">Users</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{route('company.index')}}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-bell text-primary"></i>
                     <div data-i18n="Support">Company Details</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{route('product.index')}}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-bell text-primary"></i>
                     <div data-i18n="Support">Product Details</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{route('category.index')}}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-bell text-primary"></i>
                     <div data-i18n="Support">Category</div>
                     </a>
                  </li>
               </ul>
            </aside>