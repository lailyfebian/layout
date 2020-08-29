@extends('template.body')
@section('title', 'Sign In')
@section('content')

<div class="container signup">
	<div class="row">
		<div class="col-lg-5 bg">
			<!-- <img src="{{asset('/images/login1.jpg')}}" class="img-fluid"> -->
		</div>
		<div class="col-lg-7">
			<form>
				<div class="form-group">
					<h3><span>Sign up to Note Receipt</span></h3>
				</div>
				<div class="form-group">
    				<input type="text" class="form-control" placeholder="Nama">
  				</div>
  				<div class="form-group">
    				<input type="text" class="form-control" placeholder="Username">
  				</div>
  				<div class="form-group">
    				<input type="email" class="form-control" placeholder="email">
  				</div>
 				<div class="form-group">
    				<input type="password" class="form-control" placeholder="password">
  				</div>
				<div class="form-group">
  					<button type="submit" class="tombol">Kirim</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection