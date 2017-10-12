@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Register</h1>
		<form>
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="form-control" id="name" name="name" required>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="form-control" id="email" name="email" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="form-control" id="password" name="password" required>
			</div> 

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" name="form-control" id="password_confirmation" name="password_confirmation">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>	
			@include('layouts.errors')
		</form>
	</div>
@endsection