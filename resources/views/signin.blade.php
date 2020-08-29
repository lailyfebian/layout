@extends('template.body')
@section('title', 'Sign In')
@section('content')

<div class="container signin">
	<div class="row">
		<div class="col-lg-5 bg">
			<img src="{{asset('/images/login2.jpg')}}" class="img-fluid">
		</div>
		<div class="col-lg-6">
			<form>
				<div class="form-group">
					<h3><center><span>Sign In to Note Receipt</span></center></h3>
				</div>
  				<div class="form-group col-lg-5">
  					<p><bold>Username</bold></p>
    				<input type="text" class="form-control">
  				</div>
  				<div class="form-group col-lg-5">
  					<p><bold>Password</bold></p>
    				<input type="password" class="form-control">
  				</div>
				<div class="form-group">
  					<button type="submit" class="tombol">Sign In</button>
				</div>
				<div class="form-group">
    				<p><a href="#">Lupa Password?</a></p>
  				</div>
  				<div class="form-group">
    				<p>Belum punya akun? <a href="#">Sign Up</a></p>
  				</div>
			</form>
		</div>
	</div>
</div>

@endsection