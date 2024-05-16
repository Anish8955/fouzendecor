<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fouzer Decor :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('admin-assets/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin-assets/css/custom.css')}}">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<!-- /.login-logo -->
			@include('admin.message')
			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Change Password</a>
			  	</div>
			  	<div class="card-body">
					<form action="{{ route('change.password') }}" method="post">
                    @csrf
                     @method('PUT')
				  		<div class="input-group mb-3">
							<input type="password"  name ="current_password" id="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Passsword">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-envelope"></span>
					  			</div>
							</div>
							@error('current_password')
                              <p class="invalid-feedback">{{$message}}</p>
							@enderror	
				  		</div>
				  		<div class="input-group mb-3">
							<input type="password" name="new_password" id="newpassword" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-lock"></span>
					  			</div>
							</div>
							@error('new_password')
                              <p class="invalid-feedback">{{$message}}</p>
							@enderror	
				  		</div>

						  <div class="input-group mb-3">
							<input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control " placeholder="Confirm New Password">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-lock"></span>
					  			</div>
							</div>
							
				  		</div>
				  		<div class="row">
							
							<div class="col-4">
					  			<button type="submit" class="btn btn-primary btn-block">Change Password</button>
							</div>
							<!-- /.col -->
				  		</div>
					</form>
		  							
			  	</div>
			  	<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		@include('admin.includes.script')
	</body>
</html>