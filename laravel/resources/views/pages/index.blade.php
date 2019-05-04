@extends('layouts.app')

@section('content')
       {{-- <h1>{{$title}}</h1> --}}
       <!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src={{asset('img/background.jpg') }} class="img-fluid" alt="">
				<div class="carousel-caption">
					<h1 class="display-2">PHOTOSTORE</h1>
					<h3>images for different ocations</h3>
					<button type="button" class="btn btn-outline-light btn-lg">GET STARTED!</button>
					<button type="button" class="btn btn-primary btn-lg">See how it works</button>
					<button type="button" class="btn btn-primary btn-lg">Prices</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src={{asset('img/background2.jpg') }} alt="" class="img-fluid">
			</div>
			<div class="carousel-item">
				<img src={{asset('img/background3.jpg') }}   class="img-fluid" alt="">
			</div>
		</div>
	</div>
	
	<!--- Welcome Section -->
	<div id="about" class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">About photobank and licenses:</h1>
			</div>
			<hr>
			<div class="col-12">
				<p> This site works as an online store, where in a few minutes you can buy photos, illustrations or vectors for use in advertising and marketing, design, media, creating websites, interior design.</p>

               <p> All photos, illustrations, vectors and footages in Photo photobank are licensed under a non-exclusive (non-exclusive)    license such as Royalty Free (RF) license. This means that all images can be used without restrictions on time, territory, circulation, size, carrier or industry of use.</p>
                 <p>Depending on the type of use, you can choose a Standard or Extended License. </p>
			</div>
		</div>
	</div>
	<!--- Three Column Section -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML5</h3>
				<p>Built with HTML5 latest version</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-bold"></i>
				<h3>HTML5</h3>
				<p>Built with HTML5, Bootstrap4 latest version</p>
			</div>
			<div class="col-sm-12 col-md-4">
				<i class="fab fa-css3"></i>
				<h3>CSS3</h3>
				<p>Built with HTML5, CSS3 latest version</p>
			</div>
		</div>
		<hr class="my-4">
	</div>
	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>Prices</h2>
				<p>You can download the purchased file as soon as the payment is credited. The download link will come by email. mail. For each purchase we expose a full package of boo. of documents: License Agreement, Act, Invoice.</p>
				
				<p>Documents can be downloaded after receipt of payment in the My accounts menu. Upon request, we will send the original documents by mail.</p>
				<br>
				<a href="#" class="btn btn-primary">Learn More About Pricing</a>
			</div>
			<div class="col-lg-6">
				<img src={{asset('img/download.jpg') }}  class="img-fluid" alt="">
			</div>
		</div>
	</div>
	<hr class="my-4">
	<!--- Fixed background -->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
				
			</div>
		</div>
	</figure>
	<!--- Emoji Section -->
	<button class="fun text-center" data-toggle="collapse" data-target="#emoji">Click this button for fun!
	</button>
	<div id="emoji" class="collapse">
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-sm-6 col-md-3">
					<img class="gif"src="img/gif/panda.gif" alt="">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif"src="img/gif/poo.gif" alt="">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif"src="img/gif/unicorn.gif" alt="">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif"src="img/gif/chicken.gif" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--- Meet the team -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Meet the team</h1>
			</div>
			<hr>
		</div>
	</div>
	<!--- Cards -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img src="img/team1.png" alt="" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title">John Doe</h4>
						<p class="card-text">
							John is some experienced guy
						</p>
						<a href="#" class="btn btn-outline-secondary">See the profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="img/team2.png" alt="" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title">John123 Doe123</h4>
						<p class="card-text">
							John123 is some 123experienced guy
						</p>
						<a href="#" class="btn btn-outline-secondary">See the profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="img/team3.png" alt="" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title">John234 Doe</h4>
						<p class="card-text">
							John234 is some 234experienced guy
						</p>
						<a href="#" class="btn btn-outline-secondary">See the profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>Our philosophy</h2>
				<p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo veritatis modi aspernatur dolore beatae eum dolorem eveniet voluptas exercitationem dicta vero nulla corporis, quo sequi cumque consequatur ad perspiciatis blanditiis!s less than 576px wide</p>
				<p>Resize to see how it works</p>
				<br>
				
			</div>
			
			<div class="col-lg-6">
				<iframe width="600" height="300" src="https://www.youtube.com/embed/8u_mkE-Cykg?autoplay=1">
				</iframe>
				
			</div>
		</div>
		<hr class="my-4">
	</div>
	<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>

			</div>
			<div class="col-12 social padding">
				<a href="#">
					<i class="fab fa-facebook"></i></a>
				<a href="#">
					<i class="fab fa-twitter"></i></a>
				<a href="#">
					<i class="fab fa-instagram"></i></a>
				<a href="#">
					<i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	<!--- Footer -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src={{asset('img/logo.png')}} alt="">
					<hr class="light">
					<p>55555-55-55</p>
					<p>email@email.com</p>
					<p>100 Some str Name</p>
					<p>City, State, 1000056</p>
				</div>

				<div class="col-md-4">
					<hr class="light">
					<h5>Our working hours</h5>
					<hr class="light">
					<p>Saturday: 9am - 5pm</p>
					<p>Monday: 9am - 5pm</p>
				</div>
				
				<div class="col-md-4">
					<hr class="light">
					<h5>Service Area</h5>
					<hr class="light">
					<p>Saturday: 9am - 5pm</p>
					<p>Monday: 9am - 5pm</p>
					<p>Saturday: 9am - 5pm</p>
					<p>Monday: 9am - 5pm</p>
				</div>



				<div class="col-12">
					<hr class="light-100">
					<h6>&copy;2019 Abbosjon Kudratov</h6>
					
				</div>

			</div>
		</div>
		</footer>

@endsection