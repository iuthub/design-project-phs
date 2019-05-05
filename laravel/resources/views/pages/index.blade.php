@extends('layouts.app')
<style type="text/css">
	#fixed{background-image: url('/mac.png');}
/*	.carousel-inner > .carousel-item {
    position: relative;
    display: none;
    -webkit-transition: 0.6s ease-in-out left;
    -moz-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left;
}*/
</style>


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
					<button type="button" onclick="window.location.href = '/posts';" class="btn btn-outline-light btn-lg">GET STARTED!</button>
					<button type="button" class="btn btn-primary btn-lg">See how it works</button>
					<button type="button" onclick="window.location.href = '/pricing';" class="btn btn-primary btn-lg">Prices</button>
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
	
	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>Prices</h2>
				<p>You can download the purchased file as soon as the payment is credited. The download link will come by email. mail. For each purchase we expose a full package of boo. of documents: License Agreement, Act, Invoice.</p>
				
				<p>Documents can be downloaded after receipt of payment in the My accounts menu. Upon request, we will send the original documents by mail.</p>
				<br>
				<a href="/pricing" class="btn btn-primary">Learn More About Pricing</a>
			</div>
			<div class="col-lg-6">
				<img src={{asset('img/download.jpg') }}  class="img-fluid" alt="">
			</div>
		</div>
	</div>
	<hr class="my-4">
	<!--- Fixed background -->
	{{-- <figure>
		<div class="fixed-wrap">
			<div id="fixed">
				
			</div>
		</div>
	</figure> --}}
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
				<h1 class="display-4">Random Images</h1>
			</div>
			<hr>
		</div>
	</div>
	<!--- Cards -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img src="img/{{$n3=rand(31,45)}}.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title">a random image</h4>
						<p class="card-text">
						This is a random image with id {{$n3}}
						</p>
						<a href="#" class="btn btn-outline-secondary">See the details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					{{-- {{$n1=rand(1,15)}}
					{{$n2=rand(16,30)}}
					{{$n3=rand(31,45)}}
					Hello world{{$n1}} --}}
					<img src="img/{{$n1=rand(1,15)}}.jpg" alt="" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title"> a random image</h4>
						<p class="card-text">
							This is a random image with id {{$n1}}
						</p>
						<a href="#" class="btn btn-outline-secondary">See the details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="img/{{$n2=rand(16,30)}}.jpg" alt="" class="card-img-top">
					{{-- $id=$n2; --}}
					<div class="card-body">
						<h4 class="card-title">{{-- {{$post->id}} --}} a random image</h4>
						<p class="card-text">
							This is a random image with id {{$n2}}
						</p>
						<a href="#" class="btn btn-outline-secondary">See the details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>Learn how to Use Stock Photos on Instagram efficiently</h2>
				<p>It only takes seconds for someone to scroll past a picture on Instagram, making it essential to stand out with your imagery! Lucky for you, we made a video on how to create Instagram posts with stock photos that will stand out.</p>
				<p>
				Shop our stock photos here in our website!</p>
				<br>
				
			</div>
			
			<div class="col-lg-6">
				<iframe width="853" height="480" src="https://www.youtube.com/embed/924b3gTI94U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
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
					<p>(+99878) 100-00-10</p>
					<p>info@phs.co.uz</p>
					<p>100 Amir Temur str</p>
					<p>Tashkent, Uzbekistan, 1000056</p>
				</div>

				<div class="col-md-4">
					<hr class="light">
					<h5>Our working hours</h5>
					<hr class="light">
					<p>Monday-Friday: 9am - 6pm</p>
					<p>Saturday: 9am - 5pm</p>
					
				</div>
				
				<div class="col-md-4">
					<hr class="light">
					<h5>Service Area Offices</h5>
					<hr class="light">
					<a href="#"><p>Central Asia</p></a>
					<a href="#"><p>Europe</p></a>
					<a href="#"><p>Middle East</p></a>
					<a href="#"><p>Australia</p></a>
				</div>



				<div class="col-12">
					<hr class="light-100">
					<h6>&copy;2019 AK Solutions</h6>
					
				</div>

			</div>
		</div>
		</footer>

@endsection