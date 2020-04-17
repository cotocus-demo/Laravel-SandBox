<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 Ajax Request example</title>
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>	
</head>
<body>


	<div class="container">
		<h2>Laravel 5.5 Ajax Request example</h2>
		<div class="card" style="width: 20rem; margin: 0 auto;">
			<!-- <div class="card-header">Header</div> -->
			<div class="card-body">
				<form id="addform">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required="">
					</div>

					<div class="form-group">
						<strong>Email:</strong>
						<input type="email" name="email" class="form-control" placeholder="Email" required="">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">submit</button>
					</div>
				</form></div> 
				<!-- <div class="card-footer">Footer</div> -->
			</div>
		</div>


	<!-- <div class="container">
		<h1>Laravel 5.5 Ajax Request example</h1>
		<form id="addform">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" id="name" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Password" required="">
			</div>

			<div class="form-group">
				<strong>Email:</strong>
				<input type="email" name="email" class="form-control" placeholder="Email" required="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">submit</button>
			</div>
		</form>
	</div> -->
</body>
</html>