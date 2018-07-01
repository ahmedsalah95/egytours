<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/creative.css">
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/about.css">
  	<!-- My Script -->
  	<script src="{{url('/')}}/front/js/js.js"></script>
</head>
<body>
	<!--  ==================== NavBar SECTIOn =================== -->
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
			<li><a href="/front-home"><span class="NavDesign">Home</span></a></li>
			<li><a href="/AboutUs"><span class="NavLink">About</span></a></li>
			<li><a href="/tripsFront"><span class="NavLink">Trips</span></a></li>
			<li><a href="/planTrip"><span class="NavLink">Plan My Trip</span></a></li>
			<li><a href="/contactUS"><span class="NavLink">Contact</span></a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>

								<!-- END NAVBAR SECTION -->
								<!-- START CONTROL SECTION -->
<section class="ControlSection">
	<center>
		<div class="SectionHeader">
			<h1>ABOUT US</h1>
			<hr>
		</div>
	</center>
</section>
								<!-- END  CONTROL SECTION -->
<br><br>
<section class="InfoSection">
	<div class="container">

		<?php

		$about = \App\About::all();

		?>
		@if($about)
		@foreach($about as $key =>$ab)
			 @if($key%2==0)
						<div class="col-lg-12 Contain">
							<div  class="col-lg-6">
								<img src="{{\Illuminate\Support\Facades\Config::get('app.url')}}/egy-tour/public/img/alt_images/{{$ab->image}}" alt="ME" width="100%;">
							</div>
							<div class="col-lg-6">
								<br>
								<br>
								<center>
									<h2 class="AboutHeader"><b>{{$ab->title}}</b></h2>
									<hr>
									<h3>{!! $ab->description !!} </h3>
								</center>
							</div>
						</div>
			 @endif

				 @if($key%2!=0)
		 	 <div class="col-lg-12 Contain">
		  	<div class="col-lg-6">
		  		<br>
		  		<br>
		  		<center>
		  			<h2  class="AboutHeader"><b>{{$ab->title}}</b></h2>
		  			<hr>
		  			<h3 id="ManageText">{!! $ab->description !!} </h3>
		  			<h3 id="More"></h3>
		  			<a id="SeeMore" onclick="SeeMore()">See More!</a>
		  		</center>
		  	</div>
			<div  class="col-lg-6">
		      <img src="{{\Illuminate\Support\Facades\Config::get('app.url')}}/egy-tour/public/img/alt_images/{{$ab->image}}" alt="ME" width="100%;">
		  	</div>
		  	</div>
				 @endif
		@endforeach
		@endif
	</div>	
</section>
<!-------------------------------- END INFOO --------------------------------------->
<!-------------------------------- FOOTER ---------------------------->
	<footer class="footer">
		<div class="container">
            <?php

            $settings = \App\setting::first();

            ?>
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
		</div>
	</footer>
<!--------------------------------  End FOOTER ---------------------------->
<script type="text/javascript">
  		
	var text = document.getElementById('ManageText').innerHTML;
	var res;
	if(text.length > 96)
	{
		var res = text[0];
		for (var i =1; i <= 96; i++)
		{
			res = res+text[i];
		}
		res = res + '...'
		document.getElementById('ManageText').style.display ='none';
		document.getElementById('More').innerHTML = res;
		document.getElementById('SeeMore').style.display='block';
	}
	function SeeMore ()
	{
		 document.getElementById('ManageText').style.display='block';
	 	document.getElementById('More').style.display='none';
	 	document.getElementById('SeeMore').style.display='none';
	}
  	</script>
</body>
</html>