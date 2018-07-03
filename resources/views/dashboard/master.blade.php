
<!DOCTYPE html>
<html lang="en">
@include('dashboard.partial.header')

<body class="nav-md">
<div class="container body">
    <div class="main_container">


    @include('dashboard.partial.sideMenu')
    @include('dashboard.partial.nav')

        <style>@import url(https://fonts.googleapis.com/css?family=Droid+Sans);
         .loader {
            /*     position: fixed;
              left: 0px;
              top: 0px;
              width: 100%;
              height: 100%;
              z-index: 9999;
              background: url('http://www.downgraf.com/wp-content/uploads/2014/09/01-progress.gif?e44397') 50% 50% no-repeat rgb(249,249,249);
                */

             position: fixed;
             left: 0px;
             top: 0px;
             width: 100%;
             height: 100%;
             z-index: 9999;
             background-color: white;
          }
            .spinner
            {


                width: 60px;
                height: 60px;
                background-color: #2A3F54;

                margin:  auto;
                margin-top: 250px;
                padding-bottom: 70px;
                -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
                animation: sk-rotateplane 1.2s infinite ease-in-out;
            }




            @-webkit-keyframes sk-rotateplane {
                0% { -webkit-transform: perspective(120px) }
                50% { -webkit-transform: perspective(120px) rotateY(180deg) }
                100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
            }

            @keyframes sk-rotateplane {
                0% {
                    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
                } 50% {
                      transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                      -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
                  } 100% {
                        transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                        -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    }
            }
        </style>
        <!-- page content -->


        <div class="loader">

            <div class="spinner"></div>
            <p class="text-center">loading...</p>
        </div>



        <div class="right_col" role="main">

            @yield('content')


        </div>
        <!-- /page content -->
        @include('dashboard.partial.footer')


    </div>
</div>
@include('dashboard.partial.script')

<script>
    $(window).load(function(){
        $('.loader').fadeOut();
    });

   /* $(window).load(function(){
        $('.spinner').fadeOut();
    });*/
</script>
</body>
</html>
