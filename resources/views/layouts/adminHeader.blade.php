   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center justify-content-between">
       <nav class="header-nav">
           <ul class="d-flex align-items-center">
               <li class="nav-item dropdown">
                   <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                       <img src="" alt="" class="rounded-circle" />
                       <span class="d-none d-md-block dropdown-toggle pe-4">{{ Auth()->user()->name }}</span> </a>
                   <!-- End Profile Iamge Icon -->

                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                       <li class="dropdown-header">
                           <h6>{{ Auth()->user()->name }}</h6>
                       </li>
                       <li>
                           <hr class="dropdown-divider" />
                       </li>
                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                               <i class="bi bi-person"></i>
                               <span>الملف الشخصي</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider" />
                       </li>

                       <li>
                           <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                               <i class="bi bi-gear"></i>
                               <span>الإعدادات</span>
                           </a>
                       </li>
                       <li>
                           <hr class="dropdown-divider" />
                       </li>

                       <li>
                           <hr class="dropdown-divider" />
                       </li>

                       <li>

                           <form method="POST" action="{{ route('logout') }}" x-data>
                               @csrf
                               <span> <button class="dropdown-item d-flex align-items-center" type="submit">
                                       <i class="bi bi-box-arrow-right"></i>تسجيل الخروج</button>
                               </span>
                           </form>
                       </li>
                   </ul>
                   <!-- End Profile Dropdown Items -->
               </li>
               <!-- End Profile Nav -->
               <li class="nav-item dropdown">
                   <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                       <i class="bi bi-bell"></i>
                       <span class="badge bg-primary badge-number"></span> </a><!-- End Notification Icon -->

                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications list-group ">
                       <li>
                           <hr class="dropdown-divider" />
                       </li>

                       <li class="notification-item">
                           <i class="bi bi-exclamation-circle text-warning"></i>
                           <div>
                               <h4>لايوجد اشعارات</h4>
                           </div>
                       </li>

                       <li>
                           <hr class="dropdown-divider" />
                       </li>

                   </ul>
                   <!-- End Notification Dropdown Items -->
               </li>
               <!-- End Notification Nav -->
       </nav>
       <!-- End Icons Navigation -->
       <div class="d-flex align-items-center justify-content-between me-3">
           <a href="{{ route('admin.index') }}" class="logo d-flex align-items-center justify-content-end">
               <h1 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"
                   class="spu">الحضارة</h1>
               <i class="bi bi-lightning-charge"></i>
           </a>
           <i class="bi bi-list toggle-sidebar-btn"></i>
       </div>
       <!-- End Logo -->
   </header>
