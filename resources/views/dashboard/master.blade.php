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
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('http://www.downgraf.com/wp-content/uploads/2014/09/01-progress.gif?e44397') 50% 50% no-repeat rgb(249,249,249);
            }


            .social ul li{
                list-style:none;
                padding-left:12px;
                color:white;
            }
            li a{
                text-decoration:none;
            }
            .social ul{
                display:inline-flex;
                padding-left: 60px;
            }

            .box{
                width:45%;
                background: rgba(226,226,226,1);
                background: -moz-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 10%, rgba(209,209,209,1) 98%, rgba(254,254,254,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226,226,226,1)), color-stop(10%, rgba(219,219,219,1)), color-stop(98%, rgba(209,209,209,1)), color-stop(100%, rgba(254,254,254,1)));
                background: -webkit-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 10%, rgba(209,209,209,1) 98%, rgba(254,254,254,1) 100%);
                background: -o-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 10%, rgba(209,209,209,1) 98%, rgba(254,254,254,1) 100%);
                background: -ms-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 10%, rgba(209,209,209,1) 98%, rgba(254,254,254,1) 100%);
                background: linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 10%, rgba(209,209,209,1) 98%, rgba(254,254,254,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 );

            }
            p{
                padding:40px;
            }
            .outer-box{
                margin-top:60px;
                margin-left:450px;
            }
        </style>
        <!-- page content -->


        <div class="loader"></div>

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
</script>
</body>
</html>
