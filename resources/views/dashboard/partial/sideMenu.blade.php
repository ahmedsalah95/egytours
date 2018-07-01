<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Egy Tour!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

                <ul class="nav side-menu">


                    <li><a href="{{url('/')}}/settings"> <i class="fa fa-laptop"></i> Setting</a></li>
                    <li><a href="{{url('/')}}/about"> <i class="fa fa-laptop"></i> About</a></li>
                    <li><a href="{{url('/')}}/homeSettings"> <i class="fa fa-home"></i> Home Settings</a></li>
                    <li><a href="{{url('/')}}/contact"> <i class="fa fa-user"></i> Contact us</a></li>
                    <li><a href="{{url('/')}}/testimonial"> <i class="fa fa-users"></i> testimonial </a></li>
                    <li><a href="{{url('/')}}/plannedTrips"> <i class="fa fa-envelope"></i> planned Trips </a></li>
                    <li><a href="{{url('/')}}/messages"> <i class="fa fa-envelope"></i> Messages </a></li>

                    <li><a><i class="fa fa-home"></i> trips <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="{{url('/')}}/category"> <i class="fa fa-book"></i> category </a></li>
                            <li><a href="{{url('/')}}/trip"> <i class="fa fa-plane"></i> trips </a></li>
                        </ul>
                    </li>

                </ul>

            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>