@extends('template.body')

@section('content')
	@include('layout.navigasi')
	@include('layout.jumbotron')
	@include('about')
	@include('guide')
	@include('contact')
		
		<!-- Sign In -->
		<div id="signin" class="modal fade" tabindex="-1" role="dialog">
  			<div class="modal-dialog modal-sm  text-center">
    			<div class="modal-content">
      				<div class="modal-body">
      					<button type="button" class="close" data-dismiss="modal">&times;</button>
      					<h4>Sign In</h4>
      					<form class="col-sm">
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Username">
  							</div>
  							<div class="form-group">
    							<input type="password" class="form-control" placeholder="Password">
  							</div>
  							<div class="form-group">
  								<button type="submit" class="tombol">Sign In</button>
							</div>
  							<div class="form-group">
  								<p><a href="#">Lupa password?</a></p>
  								<p>Belum punya akun?
              <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Sign Up</a></p>
							</div>
						</form>
      				</div>

    			</div>
  			</div>
		</div>

		<!-- Sign up -->
		<div id="signup" class="modal fade" tabindex="-1" role="dialog">
  			<div class="modal-dialog modal-sm text-center">
    			<div class="modal-content ">
      				<div class="modal-body">
      					<button type="button" class="close" data-dismiss="modal">&times;</button>
      					<h4>Sign Up</h4>
      					<form class="col-sm">
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Username">
  							</div>
  							<div class="form-group">
    							<input type="email" class="form-control" placeholder="Email">
  							</div>
  							<div class="form-group">
    							<input type="password" class="form-control" placeholder="Password">
  							</div>
  							<div class="form-group">
  								<button type="submit" class="tombol">Sign Up</button>
							</div>
  							<div class="form-group">
  								<p>Sudah punya akun?
              <a href="#" data-toggle="modal" data-target="#signin" data-dismiss="modal">Sign In</a></p>
							</div>
						</form>
      				</div>

    			</div>
  			</div>
		</div>

	@include('layout.footer')	


	
@endsection