<!DOCTYPE html>
<html>
<head>
	<title>EgyTour</title>
	<!-- bootstrap CSS LIB -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- bootstrap JQ Link -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- GOOGLE FONT -->
  	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  	<!-- FONT AWSOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<!-- My Awsome CSS -->
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}front/css/creative.css">
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/Contact.css">
  	<!-- My Script -->
  	<script src="{{url('/')}}/front/js/js.js"></script>
</head>
<body>

<!-- --------------- START HEADING SECTION -------------- -->
<section>
	<nav class="container navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="Logo">EgyptTour</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		  <li><a href="/"><span class="NavDesign">Home</span></a></li>
		  <li><a href="/AboutUs"><span class="NavLink">About</span></a></li>
		  <li><a href="/tripsFront"><span class="NavLink">Trips</span></a></li>
		  <li><a href="/planTrip"><span class="NavLink">Plan My Trip</span></a></li>
		  <li><a href="/contactUS"><span class="NavLink">Contact</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>
<section class="ContactUs">
	<div class="container">
		<center>
			<h2><b>Contact With Us</b></h2>
			<h4>We'd Love To Hear From You!</h4>
			<hr>
			<div class="Form">
				<form method="POST" action="/submitContact">
					@csrf
					<div class="col-lg-6 col-md-12">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="col-lg-6 col-md-12">
						<input type="text" name="subject" class="form-control" placeholder="Subject" required>
					</div>	
						<textarea name="message" class="form-control" placeholder="Message" required></textarea>
						<input type="submit" name="submit" class="btn btn-default">
				</form>
			</div>
		</center>

	</div>

	<center>
		<div class="container">
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			@endif

			@if($errors->all())
				<div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

		</div>

	</center>
</section>

<footer class="footer">
	<div class="container">
        <?php

        $settings = \App\setting::first();

        ?>
		@if($settings)
		<center>
			<a class="ContactTitles">
				<span class="Contact glyphicon glyphicon-envelope" id="First"></span>
				{{$settings->email}}
			</a>
			<a class="ContactTitles"><span class="Contact glyphicon glyphicon-earphone"></span>
				{{$settings->phone}}
			</a>
			<a class="ContactTitles"><span class="Contact glyphicon glyphicon-home"></span>
				{{$settings->address}}
			</a>
			<br>
			<br>
			© 2018 Egy-Tour . All Rights Reserved | Powered by Smart Geeks
		</center>

			@else
			<center>
				<a class="ContactTitles">
					<span class="Contact glyphicon glyphicon-envelope" id="First"></span>

				</a>
				<a class="ContactTitles"><span class="Contact glyphicon glyphicon-earphone"></span>

				</a>
				<a class="ContactTitles"><span class="Contact glyphicon glyphicon-home"></span>

				</a>
				<br>
				<br>
				© 2018 Egy-Tour . All Rights Reserved | Powered by Smart Geeks
			</center>
			@endif
	</div>
</footer>
</body>
</html>
