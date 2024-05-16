
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Testimonial</h1>
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
                    <form action="{{route('admin.testimonial.store')}}" method="post">
                     @csrf
						<div class="card">
							<div class="card-body">				
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Author</label>
											<input type="text" name="author" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Content</label>
											<input type="text" name="content" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
                                     <div class="mb-3">
                                      <label for="status">Status</label>
                                        <!-- Dropdown for selecting status -->
                                         <select name="status" class="form-control" id="status">
                                           <option value="1">Active</option>  <!-- Active status option -->
                                          <option value="2">Inactive</option>  <!-- Inactive status option -->
                                         </select>
                                     </div>
                                    </div>

							</div>							
						</div>
						<div class="pb-7 pt-6">
							<button type="submit" class="btn btn-primary">Save Testimonial</button>
						</div>
                        </form>
					</div>
                  
					<!-- /.card -->
				</section>
				<!-- /.content -->
  