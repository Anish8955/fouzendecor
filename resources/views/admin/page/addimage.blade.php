
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Image</h1>
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
                    <form action="{{route('admin.image.store')}}" method="post">
                     @csrf
						<div class="card">
							<div class="card-body">				
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Title</label>
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
                                    <label class="form-label" for="basic-default-Photo">Photo</label>
                                    <input type="file" class="form-control" id="basic-default-Photo" name="image_path"
                                        accept="image/*" required />
                                  </div>
                                 </div>
                                </div>

							</div>							
						</div>
						<div class="pb-7 pt-6">
							<button type="submit" class="btn btn-primary">Save Image</button>
						</div>
                        </form>
					</div>
                  
					<!-- /.card -->
				</section>
				<!-- /.content -->
  