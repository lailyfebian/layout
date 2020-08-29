@extends('template.body')
@section('title', 'About Us')
@section('content')
	<div class="container">
		<!-- About Us -->
		<div class="row about" id="about">
			<div class="col-lg-6">
				<h3><span>Tentang</span><br>Kami</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-6">
				<img src="{{asset('images/kantor.jpg')}}" alt="About" class="img-fluid">
			</div>
		</div>

		<!-- guidline -->
		<div class="row justify-content-center">
				<div class="col-10 info-panel">
					<div class="col-lg">
						<h3><span>Guideline</span> Website</h3>
						<p>Petunjuk penggunaaan website</p>
					</div>
					<div class="row">
						<div class="col-sm">
						 	<img src="{{asset('images/regis.png')}}" alt="Daftar" class="justify-content-center">
						 	<h4>Daftar/Masuk</h4>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
						<div class="col-sm">
						 	<img src="{{asset('images/add.png')}}" alt="Tambah">
						 	<h4>Tambah Form</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
						<div class="col-sm">
						 	<img src="{{asset('images/form.png')}}" alt="Isi Form">
						 	<h4>Isi Form</h4>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
				</div>
		</div>

	</div>
@endsection