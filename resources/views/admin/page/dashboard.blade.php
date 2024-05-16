<section class="content-header">					
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Dashboard</h1>
							</div>
							<div class="col-sm-6">
								
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						<div class="row">
							<!-- Ensure variable is available before using -->
                             @if(isset($totalServices))
                             <div class="col-lg-4 col-6">
                                 <div class="small-box card">
                                     <div class="inner">
                                         <!-- Display the total number of services -->
                                         <h3>{{ $totalServices }}</h3>  <!-- Access the variable -->
                                         <p>Total Services</p>
                                     </div>
                                     <div class="icon">
                                         <i class="ion ion-bag"></i>
                                     </div>
                                     <a href="{{route('listservice.show')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                             @else
                         <div class="col-lg-4 col-6">
                                 <div class="small-box card">
                                     <div class="inner">
                                         <!-- Display a default message if variable is not set -->
                                         <h3>0</h3>
                                         <p>Total Services</p>
                                     </div>
                                     <div class="icon">
                                         <i class="ion ion-bag"></i>
                                     </div>
                                     <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                             @endif

							
							<div class="col-lg-4 col-6">							
								<div class="small-box card">
									<div class="inner">
										<h3>{{ $totalTestimonial }}</h3>
										<p>Total Testimonial</p>
									</div>
									<div class="icon">
										<i class="ion ion-stats-bars"></i>
									</div>
									<a href="{{route ('listtestimonial.show')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							
							<div class="col-lg-4 col-6">							
								<div class="small-box card">
									<div class="inner">
										<h3>$1000</h3>
										<p>Total Sale</p>
									</div>
									<div class="icon">
										<i class="ion ion-person-add"></i>
									</div>
									<a href="javascript:void(0);" class="small-box-footer">&nbsp;</a>
								</div>
							</div>
						</div>
					</div>					
					<!-- /.card -->
				</section>