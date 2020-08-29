@extends('template.body')
@section('title', 'Home')

@section('content')
	@include('layout.navigasi')
	@include('layout.jumbotron')


		<!-- About Us -->
		<div class="row about" id="about">
			<div class="col-lg-6">
				<h3><span>About</span><br> Us</h3>
				<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-6 gb">
				<img src="{{asset('images/kantor.jpg')}}" alt="About" class="img-fluid">
			</div>
		</div>

		<!-- guidline -->
		<div class="row justify-content-center" id="guide">
			<div class="col-8 info-panel">
				<div class="col-lg">
					<h3><span>Guideline</span> Website</h3>
					<p>Petunjuk penggunaaan website</p>
				</div>
				<div class="row">
					<div class="col-md">
					 	<img src="{{asset('images/registrasi.png')}}" alt="Daftar" class="justify-content-center">
					 	<h4>Daftar/Masuk</h4>
					 	<p class="justify-content-center">Masukkan username, password dan email anda untuk daftar dan Masukkan username dan password untuk login</p>
					</div>
					<div class="col-md">
					 	<img src="{{asset('images/tambah.png')}}" alt="Tambah">
					 	<h4>Tambah Form</h4>
						<p class="justify-content-center">Klik tanda tambah (+) untuk menambahkan form baru untuk pengisian berkas yang anda terima.</p>
					</div>
					<div class="col-md">
					 	<img src="{{asset('images/kotak.png')}}" alt="Isi Form">
					 	<h4>Isi Form</h4>
					 	<p class="justify-content-center">Masukkan nama pengirim, nama yang dituju berkas, kurir, nama penerima berkas dar kurir dan tanda tangan.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->
		<div class="contact row" id="contact">
			<div class="col-lg">
				<div class="row">
					<div class="col-md-7">
						<form>
							<div class="form-group">
								<h3><span>Send </span>Us A <span>Message</span></h3>
							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Nama">
  							</div>
  							<div class="form-group">
    							<input type="email" class="form-control" placeholder="Email">
  							</div>
 							<div class="form-group">
    							<textarea class="form-control " rows="3" placeholder="Pesan"></textarea>
 							</div>
							<div class="form-group">
  								<button type="submit" class="tombol">Kirim</button>
							</div>
						</form>
					</div>

					<div class="col-md-4 contact-info">
						<div class="row">
							<h2><span>Contact</span> Information<br></h2>
						</div>
						<div class="row">
							<div class="col-md">
								<img src="{{asset('images/kntr.png')}}" alt="kantor"  style="width: 24px; height: 24px" >
								<p>Graha Pena, Ruang 1503, Jl. Ahmad Yani No.88, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60234</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<img src="{{asset('images/phonecall.png')}}" alt="phone" style="width: 30px; height: 22px;">
								<p>Landline	(031) 8286155<br>Mobile	0857-7593-6999</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<img src="{{asset('images/mail.png')}}" alt="email" style="width: 28px; height: 18px">
								<p>notereceipt@gmail.com</p>
							</div>
						</div>
						<div class="row">
							<ul class="list-group col-md">
  								<li class="list-group-item"><a href="#"><img src="{{asset('images/twt.png')}}" ></a></li>
  								<li class="list-group-item"><a href="#"><img src="{{asset('images/facebook.png')}}"></a></li>
  								<li class="list-group-item"><a href="#"><img src="{{asset('images/linkin.png')}}"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Sign In -->
		<div id="signin" class="modal fade" role="dialog">
  			<div class="modal-dialog w-25">
    			<div class="modal-content">
      				<div class="modal-body">
      					<button type="button" class="close" data-dismiss="modal">&times;</button>
      					<h4>Sign In</h4>
      					<form>
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
              <a href="#signup" data-toggle="modal" data-target="#signup">Sign Up</a></p>
							</div>
						</form>
      				</div>

    			</div>
  			</div>
		</div>

		<!-- Sign up -->
		<div id="signup" class="modal fade" role="dialog">
  			<div class="modal-dialog w-25">
    			<div class="modal-content ">
      				<div class="modal-body">
      					<button type="button" class="close" data-dismiss="modal">&times;</button>
      					<h4>Sign Up</h4>
      					<form>
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
              <a href="#signin" data-toggle="modal" data-target="#signin">Sign In</a></p>
							</div>
						</form>
      				</div>

    			</div>
  			</div>
		</div>


	@include('layout.footer')	
	<!-- <script src="{{asset('js/skrollr.js')}}" type="text/javascript">
		var s = skrollr.init();
	</script> -->
	<!--  -->