
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>System Setting</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('admin.dashboard')}}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
				</section>
				@include('admin.message')
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
                    <form action="{{ route('admin.system-settings.update') }}" method="post">
                     @csrf
						<div class="card">
							<div class="card-body">				
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Website Name</label>
											<input type="text" name="website_name" value="{{ optional($settings->where('key', 'website_name')->first())->value }}" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Address</label>
											<input type="text" name="address" value="{{ optional($settings->where('key', 'address')->first())->value }}" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Phone Number 1</label>
											<input type="text" name="phone_number1" value="{{ optional($settings->where('key', 'phone_number1')->first())->value }}" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Phone Number 2 </label>
											<input type="text" name="phone_number2" value="{{ optional($settings->where('key', 'phone_number2')->first())->value }}" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
                                    <div class="mb-3">
											<label for="name">Frontend Logo URL</label>
											<input type="text" name="frontend_logo" value="{{ optional($settings->where('key', 'frontend_logo')->first())->value }}" class="form-control" >	
										</div>
									</div>
								<div class="col-md-6">
                                    <div class="mb-3">
											<label for="name">Hero Image URL</label>
											<input type="text" name="hero_image" value="{{ optional($settings->where('key', 'hero_image')->first())->value }}" class="form-control" >	
										</div>
									</div>
								</div>
								<div class="col-md-12">
                                   <div class="mb-3">
                                     <label for="hero_content">Home Page Hero Content</label>
                                     <textarea name="hero_content" id="hero_content" class="form-control" rows="6" placeholder="Enter hero content here">{{ optional($settings->where('key', 'hero_content')->first())->value }}</textarea>
                                   </div>
                                </div>
							</div>							
						</div>
						<div class="pb-7 pt-6">
							<button type="submit" class="btn btn-primary">Save Setting</button>
						</div>
                        </form>
					</div>
                  
					<!-- /.card -->
				</section>
				<!-- /.content -->
  