<!DOCTYPE html>
<html>
<head>
	<title>Bismillah Landing Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="#"><b>Note Reciept</b></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   				<div class="navbar-nav ml-auto">
      				<a class="nav-item nav-link active" href="#home">Home<span class="sr-only">(current)</span></a>
      				<a class="nav-item nav-link" href="#about">Tentang</a>
      				<a class="nav-item nav-link" href="#">Kontak</a>
      				<a class="nav-item btn btn-primary btnnav" href="#">Daftar</a>
    			</div>
  			</div>
		</div>
	</nav>

	<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid" id="home">
  		<div class="container">
    		<h1 class="display-4"><span>Mencatat berkas</span> yang <br>sudah kamu <span>terima</span></h1>
    	</div>
	</div>

	<!-- container -->
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

		<div class="row contact" id="contact">
			<!-- <div class="col-lg-6">
				<img src="{{asset('images/bg.jpeg')}}" alt="About" class="img-fluid">
			</div> -->
			<div class="col-lg-4">
				<h3><span>Kontak</span><br>Kami</h3>
				<form>
					<div class="form-group">
    					<label for="exampleFormControlInput1">Email</label>
    					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  					</div>
  					<div class="form-group">
  			 			<label for="exampleFormControlTextarea1">Pesan</label>
    					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  					</div>
  					<button type="submit" class="btn btn-primary ">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	<!-- footer-->
		<div class="row footer">
			<div class="col-lg-12">
				<p>&copy 2020 Note Receipt  |  Designed by Our Team</p>
			</div>
		</div>

	
</body>

</html>