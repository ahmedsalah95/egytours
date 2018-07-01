<!DOCTYPE html>
<html>
<head>
	<title>Trips</title>
   


	<!-- bootstrap CSS LIB -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- bootstrap JQ Link -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- GOOGLE FONT -->
  	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  	<!-- FONT AWSOME -->
  <!-- Slick slider cSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/slick.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/slick-theme.css">
  	<!-- My Awsome CSS -->
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/creative.css">
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/TripStyle.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/SingelPage.css">
  	<!-- My Script -->
  	<script src="{{url('/')}}/front/js/js.js"></script>
</head>
<body>

<section class="HEADING">
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
<div class="WelcomeText">
    <center>
      <h1>
        
      </h1> 
  
    </center>
</div>
</section>

<section class="Info"> 
  <div class="InfoHeading">
    <center>
      <h2>{{$data->title}}</h2> <!-- TRIPNAME -->


    <div class="container TripInfo">
            {!! $data->description !!}
      </div>
      <hr>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up Up">
    </span>
  </button>
    <div class="Price"> 
        <table class="table table-hover">
            <?php

                $visitors = \App\Visitor::where('trip_id',$data->id)->get();

            ?>

                <tr>
                    <td><h3><b>Persons</b></h3></td>
                    <td><h3><b>Prices</b></h3></td>
                </tr>
            @if(isset($visitors))

            @foreach($visitors as $visitor)
                        <tr>
                            <td><b><p>{{$visitor->no_of_visitors}}</p></b></td>
                            <td><b><p>{{$visitor->price_of_visitor}}</p></b></td>
                        </tr>
            @endforeach
               @endif


        </table>
    </div>
    </center>       
</section>

<section class="Tour">
  <center>
    <div class="inclusion">
        <h3 class="inclusionHead">Tour inclusion</h3>
        <hr>


        {!! $data->inclusion !!}
    </div>
  </center>
</section>

<section class="exclusions">
  <center>
    <div>
        <h3 class="exclusionsHead">Tour exclusions</h3>
        <hr>

       {!! $data->exclusion !!}
    </div>
  </center>
</section>


<section class="regular slider container ">
    <?php

    $images = \App\Gallery::where('trip_id',$data->id)->get();


    ?>
    @foreach($images as $image)
    <div>
      <img src="{{\Illuminate\Support\Facades\Config::get('app.url')}}/egy-tour/public/img/alt_images/{{$image->image}}">
    </div>
    @endforeach
  </section>

  <section class="ContactUs">
  <div class="container">
      <center>
          <h2><b>Plan My Trip</b></h2>
          <h4>Custom Your Own Trip!</h4>
          <hr>
          <div class="Form">
              <form method="POST" action="/planTripSubmit" >
                  @csrf
                  <div class="col-lg-6 col-md-12">
                      <input type="text" name="name" class="form-control" placeholder="name" required>
                  </div>
                  <div class="col-lg-6 col-md-12">
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="col-lg-6 col-md-12">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationality" required>
                  </div>
                  <div class="col-lg-6 col-md-12">
                      <input type="number" name="whatsapp" class="form-control" placeholder="Whats App" required>
                  </div>
                  <select name="coin" class="form-control special">
                      <option value="Euro" class="option">Euro</option>
                      <option value="USD" class="option">USD</option>
                      <option value="GBP" class="option">GBP</option>
                  </select>
                  <textarea name="plan" class="form-control" placeholder="Write your plan"  required></textarea>
                  <input type="submit" name="Submit" class="btn btn-default">
              </form>
          </div>
      </center>

  </div>
</section>
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
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="{{url('/')}}/front/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="{{url('/')}}/front/js/SinglePage.js"></script>
</body>
</html>