<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="{{asset('admin-assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">FOUZEN DECOR</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="{{route('admin.dashboard')}}" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="{{route('admin.system-settings.index')}}" class="nav-link">
									<i class="nav-icon fas fa-cog"></i>
									<p>System Setting</p>
								</a>
							</li>
							
                         <li class="nav-item dropdown">
                             <a href="{{route('admin.dashboard')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                 <i class="nav-icon fas fa-file-alt"></i>
                                   <p>Services</p>
                             </a>

                              <!-- Dropdown Menu -->
                              <ul class="dropdown-menu" role="menu">
                               <!-- Add Service -->
                                   <li>
                                         <a href="{{ route('addservice.show') }}" class="dropdown-item">
                                           Add Service
                                         </a>
                                   </li>

                              <!-- List Service -->
                                 <li>
                                        <a href="{{ route('listservice.show')}}" class="dropdown-item">
                                         List Service
                                        </a>
                                 </li>
                              </ul>
                         </li>

						               <li class="nav-item dropdown">
                             <a href="{{route('admin.dashboard')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                 <i class="nav-icon fa fa-comments"></i>
                                   <p>Testimonial</p>
                             </a>

                              <!-- Dropdown Menu -->
                              <ul class="dropdown-menu" role="menu">
                               <!-- Add Service -->
                                   <li>
                                         <a href="{{ route('addtestimonial.show') }}" class="dropdown-item">
                                           Add Testimonial
                                         </a>
                                   </li>

                              <!-- List Service -->
                                 <li>
                                        <a href="{{ route('listtestimonial.show') }}" class="dropdown-item">
                                         List Testimonial
                                        </a>
                                 </li>
                              </ul>
                         </li>
						                  <li class="nav-item dropdown">
                             <a href="{{route('admin.dashboard')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                 <i class="nav-icon fas fa-image"></i>
                                   <p>Gallery</p>
                             </a>

                              <!-- Dropdown Menu -->
                              <ul class="dropdown-menu" role="menu">
                               <!-- Add Service -->
                                   <li>
                                         <a href="{{ route('addimage.show') }}" class="dropdown-item">
                                           Add Images
                                         </a>
                                   </li>

                              <!-- List Service -->
                                 <li>
                                        <a href="#" class="dropdown-item">
                                         List Images
                                        </a>
                                 </li>
                              </ul>
                         </li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<!-- <i class="nav-icon fas fa-tag"></i> -->
									<i class="nav-icon fas fa-tasks"></i>
									<p>Projects</p>
								</a>
							</li>							
							<li class="nav-item">
								<a href="orders.html" class="nav-link">
									<i class="nav-icon fas fa-thumbs-up"></i>
									<p>Ratings</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="discount.html" class="nav-link">
									<i class="nav-icon fas fa-quote-right" aria-hidden="true"></i>
									<p>Incoming Requests</p>
								</a>
							</li>
													
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>