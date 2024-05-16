
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Service</h1>
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
                    <form action="{{route('admin.services.store')}}" method="post">
                     @csrf
						<div class="card">
							<div class="card-body">				
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="name" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Description</label>
											<input type="text" name="description" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Price</label>
											<input type="number" name="price" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Image</label>
											<input type="text" name="image" class="form-control" >	
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
							<button type="submit" class="btn btn-primary">Save Service</button>
						</div>
                        </form>
					</div>
                  
					<!-- /.card -->
				</section>
				<!-- /.content -->
  