@extends('layouts.master')
@section('title', 'Informatics Market | Contact')
@section('page', 'Contact Us')
@section('content')

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Gedung A1 Jurusan Teknik Informatika Fakultas Teknik, <br> Universitas Negeri Surabaya</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">(+62) - 123 - 456 - 789</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">informaticsmarket@gmail.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">i_m.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Lebih Dekat dengan Kami</h3>
							<form action="#" class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					<div class="col-md-6">
						<br>
						<img src="img/logo.jpeg">
						<img src="img/logo.jpeg">
						<img src="img/logo.jpeg">
						<img src="img/logo.jpeg">	
					</div>
				</div>
			</div>
		</div>

@endsection