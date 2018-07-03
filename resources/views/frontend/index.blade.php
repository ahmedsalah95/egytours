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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- My Awsome CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/front/css/creative.css">
    <!-- My Script -->

</head>
<body>

<!-- --------------- START HEADING SECTION -------------- -->

<section class="WelcomeSection" id="WelcomeHight">
    <nav class="container navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
    <center>

        <?php


         $homeSettings = \App\Home::first();



        ?>

        @if(isset($homeSettings))
            <style>
                .WelcomeSection
                {

                    background-image: url('img/alt_images/{{$homeSettings->image}}');
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding-bottom: 14%;
                }
            </style>


            @else

                <style>
                    .WelcomeSection
                    {


                        background-repeat: no-repeat;
                        background-size: cover;
                        padding-bottom: 14%;
                    }
                </style>

            @endif

        <div class="Header">
            <h1><span class="HeadDesign">WELCOME </span>@if(isset($homeSettings)){{$homeSettings->title}}@endif</h1>
            <hr>
            <h4><span class="HeadBody">we are offering a wide selection of trips where you can be 	able to choose from it
				<br>
				<br>
				also you can plan your trip according to the time you"ll have in Egypt</span></h4>
            <div class="SearchInput">
                <form method="post" action="/submitSearch">
                    @csrf
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search for trip ?"  name="search" required>
                        <span class="input-group-btn">
			        <button class="btn btn-default SearchBtn" type="submit">
			        	<span class="glyphicon glyphicon-search" id="inputSearch">
			        	</span>
			        </button>

			      </span>

                </form>
            </div><!-- /input-group -->
        </div>
    </center>
</section>
<!-- --------------- End HEADING SECTION -------------- -->
<!-- --------------- start Experince SECTION ---------------->

<section class="Experince">
    <center>
        @if(isset($homeSettings))
        <h1 class="ExperinceHeader">{{$homeSettings->section_3_title}}</h1>
        <h3 class="ExperinceSecHeader"> " Why choose Egytour "</h3>
        <hr>
        <h4>
            {!! $homeSettings->section_3_desc !!}
            <br>
            <br>
            </h4>
            @endif
    </center>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
		<span class="glyphicon glyphicon-chevron-up Up">
		</span>
    </button>
</section>

<!-- --------------- End Experince SECTION -------------- -->
<!-- --------------- start Customers SECTION -------------- -->
<?php

$Testimonials = \App\Testimonial::all();

?>
<section class="Customers">
    <div class="container Mobile" style="text-align: center;">
        <div class="row">
            @if($Testimonials)
                <?php $c=1;?>
                @foreach($Testimonials as $testimonial)
            <div class="col-xs-3">
                <a class="MobNames" id="MobName{{$c++}}" onclick="MobShowFeedBack(this.id)">{{$testimonial->title}}</a>
            </div>
                @endforeach
            @endif
            <br>
            <hr>
            <br>
            <div class="col-xs-3">

            </div>
            <div class="col-xs-6">

                @if($Testimonials)
                    <?php $co=1;?>
                    @foreach($Testimonials as  $key=>$testimonial)

                        @if($key==0)
                <center>
                    <div class="MobActive" id="imgMob{{$co++}}">
                        <img src="{{url('/')}}/img/alt_images/{{$testimonial->image}}" class="image" width="100%">
                        <h4>{{$testimonial->title}}</h4>
                        <hr>
                        <h4>{!!$testimonial->description!!}</h4>
                    </div>
                    @else
                    <div id="imgMob{{$co++}}" class="imgMob">
                        <img src="{{url('/')}}/img/alt_images/{{$testimonial->image}}" class="image" width="100%">
                        <h4>{{$testimonial->title}}</h4>
                        <hr>
                        <h4>{!!$testimonial->description!!}</h4>
                    </div>
                    @endif
                </center>
                            

                  @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container Large">

        <center>
            <h1><span class="CustomerHeader">Our Customers</span></h1>
            <hr>
        </center>
        <br>
        <?php $counter=1 ?>
        @if($Testimonials)
            @foreach($Testimonials as $testimonial)
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <img src="{{url('/')}}/img/alt_images/{{$testimonial->image}}" class="image" width="100%" id="num{{$counter}}" onclick="ShowCard(this.id)">
                <br>
                <center>
                    <h3><span class="Names"> {{$testimonial->title}}</span></h3>
                </center>
            </div>
            <?php $counter+=1; ?>
            @endforeach
          @endif

        </div>
    </div>
</section>
<br>
<br>
<!-- --------------- End Customer SECTION -------------- -->

<!-- --------------- START Cards To Show  SECTION -------------- -->
<section class="Cards">
    <div class="container Large">
        <?php  $counter=1;?>
        @if($Testimonials)
        @foreach($Testimonials as $key=>$value)

        @if($key==0)


                <div class="row active" id="card{{$counter}}">
                    <div class="col-lg-4 ">
                        <img src="{{url('/')}}/img/alt_images/{{$value->image}}" width="100%;" class="ImageCard">
                    </div>
                    <div class="col-lg-7">
                        <center>
                            <h2>{{$value->title}}</h2>
                            <h3 class="Job">his Job</h3>
                            <hr class="SecHr">
                            <h4> {!! $value->description!!}</h4>
                        </center>
                    </div>

                </div>


            @else

                <div class="row Moving" id="card<?php echo ++$counter ?>">
                    <div class="col-lg-4">
                        <img src="{{url('/')}}/img/alt_images/{{$value->image}}"  width="100%;" class="ImageCard">
                    </div>
                    <div class="col-lg-7">
                        <center>
                            <h2>{{$value->title}}</h2>
                            <h3 class="Job">his Job</h3>
                            <hr class="SecHr">
                            <h4>{!! $value->description!!}</h4>
                        </center>
                    </div>
                    </center>
                </div>


            @endif


        @endforeach
        @endif

    </div>
</section>
<br>
<br>
<!-- --------------- End Cards To Show  SECTION -------------- -->
<!-- --------------- Start Explore  SECTION -------------- -->
<section class="Explore">
    <div class="container">
        @if($homeSettings)
        <center>
            <h3>
                <b>{{$homeSettings->section_5_title}}</b>
            </h3>
            <hr>
            <br>
            <p>
                <b>
                    {!! $homeSettings->section_5_desc!!}
                </b>
            </p>
        </center>
            @endif
    </div>
</section>
<!-------------------------------- End Explore  SECTION---------------------------->
<!-------------------------------- Start History  SECTION---------------------------->
<section class="History">
    <div class="container">
        <center>
            <h3>
                <span class="HistoryHeader"><b>History OF Us</b> </span>
            </h3>
            <hr>
            <br>
            <p id="P-unique">
                <b>
                    Over 25 years of experience in tourism industry with all nationalities
                    you can trust us to let you have the best tour to Egypt.
                    All those years we've been offering best prices and also the best
                    guides in egypt to facilitate anything you want to know about Egypt.
                </b>
            </p>
            <br>
            <br>
        </center>
        <div>
        </div>
    </div>
</section>
<!-------------------------------- End History  SECTION---------------------------->
<!-------------------------------- FOOTER ---------------------------->
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
<!--------------------------------  End FOOTER ---------------------------->

<script>
    function ShowCard(id) {
       /* ids=['num1','num2','num3','num4'];
        cards = ['card1','card2','card3','card4'];*/

       var num =  @if($Testimonials)<?php echo count($Testimonials)  ?> @endif;
       var ids=[];
       var cards=[];
       for(var i=1;i<=num;i++)
       {
           ids[i-1]="num"+i;
           cards[i-1]="card"+i;
       }


        for(var i = 0 ; i < ids.length ; i++)
        {
            if(ids[i]==id)
            {

                document.getElementById(""+cards[i]+"").style.display='block';
            }
            else
            {

                document.getElementById(""+cards[i]+"").style.display='none';
            }
        }
    }
</script>
<script src="{{url('/')}}/front/js/js.js"></script>
</body>
</html>