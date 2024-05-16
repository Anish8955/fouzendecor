
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Update Testimonial</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('listtestimonial.show')}}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
				</section>
				@include('admin.message')
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
                    <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="post">
                     @csrf
                     @method('PUT')
						<div class="card">
							<div class="card-body">				
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Author</label>
											<input type="text" name="author" class="form-control" value="{{ $testimonial->author }}" required>	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Content</label>
                                        <textarea name="content" class="form-control" rows="4">{{ $testimonial->content }}</textarea>
										</div>
									</div>
									<div class="col-md-6">
                                     <div class="mb-3">
                                      <label for="status">Status</label>
                                        <!-- Dropdown for selecting status -->
                                         <select name="status" class="form-control" id="status">
                                         <option value="1" {{ $testimonial->status ? 'selected' : '' }}>Active</option>
                                         <option value="0" {{ $testimonial->status ? 'selected' : '' }}>Inactive</option>
                                         </select>
                                     </div>
                                    </div>

							</div>							
						</div>
						<div class="pb-7 pt-6">
							<button type="submit" class="btn btn-primary">Update Testimonial</button>
						</div>
                        </form>
					</div>
                  
					<!-- /.card -->
				</section>
				<!-- /.content -->
  