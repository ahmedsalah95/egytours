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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<!-- My Awsome CSS -->
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/creative.css">
  	<link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/Trip.css">
  	<!-- My Script -->

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
        <li><a href="/"><span class="NavDesign">Home</span></a></li>
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
        Trips
      </h1> 
    <hr>
    </center>
</div>
</section>
<!--- Start Of Content Section -->
<section class="Content" >
  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
    <div class="ContentHeader">
      <center>
        <p><b>Choose Catagroy</b></p>
      </center>
    </div>
    <div class="list-group">
      <?php

      $categories = \App\Category::all();
      ?>

        <a href="/tripsFront"><button type="button" class="list-group-item active ListBtn">All</button></a>
        @if($categories)
      @foreach($categories as $category)
          <a href="/category/showing/{{$category->id}}" class="list-group-item  ListBtn">{{$category->name}}</a>
      @endforeach
          @endif
    </div>
  </div>
  <div class="container col-lg-10">
    <div class="col-lg-12 container">
      <center>
        <p>All Trips</p>
        <hr>
      </center>
    </div>
    <div class="container Pictures col-lg-12">
      <div class="row">
        @if( isset($data))
              <?php $counter=1; ?>
        @foreach($data as $d)

      <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 Card">
        <div class="Image" id="Card-Image<?php echo $counter; ?>" onmouseover="ShowHover(id)" onmouseleave="HideHover(id)">
          <div class="anime" id="Card-Hover<?php echo $counter; ?>">
            <center>
              <div class="AnimeContent">
               <a class="btn btn-primary AnimeBtn" href="/single/showing/{{$d->id}}">
                 See More!
               </a>
              </div>
            </center>
          </div>
          <img src="{{url('/')}}/img/alt_images/{{$d->image}}">
        </div>
        <div class="description">
          <center>
           <h3>{!! $d->description !!}</h3>
          </center>
        </div>
      </div>
          <?php $counter++; ?>
        @endforeach


          @endif

          @if(!isset($data) && !isset($queryData))


                <?php $counter=1; ?>

          <?php

           $data = \App\Trip::all();

          ?>
            @foreach($data as $d)

              <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 Card">
                <div class="Image" id="Card-Image<?php echo $counter; ?>" onmouseover="ShowHover(id)" onmouseleave="HideHover(id)">
                  <div class="anime" id="Card-Hover<?php echo $counter; ?>">
                    <center>
                      <div class="AnimeContent">
                        <a class="btn btn-primary AnimeBtn" href="/single/showing/{{$d->id}}">
                          See More!
                        </a>
                      </div>
                    </center>
                  </div>
                  <img src="{{url('/')}}/img/alt_images/{{$d->image}}">
                </div>
                <div class="description">
                  <center>
                    <h3>{!! $d->description !!}</h3>
                  </center>
                </div>
              </div>
                    <?php $counter++; ?>
            @endforeach

          @endif

          @if(isset($queryData))

                <?php $counter=1; ?>
            @foreach($queryData as $d)

              <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 Card">
                <div class="Image" id="Card-Image<?php echo $counter; ?>" onmouseover="ShowHover(id)" onmouseleave="HideHover(id)">
                  <div class="anime" id="Card-Hover<?php echo $counter; ?>">
                    <center>
                      <div class="AnimeContent">
                        <a class="btn btn-primary AnimeBtn" href="/single/showing/{{$d->id}}">
                          See More!
                        </a>
                      </div>
                    </center>
                  </div>
                  <img src="{{url('/')}}/img/alt_images/{{$d->image}}">
                </div>
                <div class="description">
                  <center>
                    <h3>{!! $d->description !!}</h3>
                  </center>
                </div>
              </div>
                        <?php $counter++; ?>
            @endforeach
          @endif
    </div> 


    </div>
  </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top">
  <span class="glyphicon glyphicon-chevron-up Up"></span>
</button>

    <script src="{{url('/')}}/front/js/js.js"></script>
<script src="{{url('/')}}/front/js/TripsScript.js"></script>
</body>
</html>