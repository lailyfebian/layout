@extends('template.body')
@section('title', 'Contact Us')
@section('content')
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
@endsection