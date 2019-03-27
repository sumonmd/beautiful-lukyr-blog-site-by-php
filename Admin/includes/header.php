<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/png" href="/imgs/favicon.png" /> -->
        <title>Home</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="bower_components/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="bower_components/themify-icons/css/themify-icons.css">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="dist/css/main.css">

        <!-- Rickshaw Chart Depencencies -->
        <link rel="stylesheet" href="bower_components/rickshaw/rickshaw.min.css">

        <!--easypiechart-->
        <link rel="stylesheet" href="assets/js/jquery-easy-pie-chart/easypiechart.css">

        <!--horizontal-timeline-->
        <link rel="stylesheet" href="assets/js/horizontal-timeline/css/style.css">


        <script src="assets/js/modernizr-custom.js"></script>
    </head>
    <body>

        <div id="ui" class="ui">

            <!--header start-->
            <header id="header" class="ui-header">

                <div class="navbar-header">
                    <!--logo start-->
                    <a href="index.html" class="navbar-brand">
                        <span class="logo"><img src="imgs/logo-dark.png" alt=""/></span>
                        <span class="logo-compact"><img src="imgs/logo-icon-dark.png" alt=""/></span>
                    </a>
                    <!--logo end-->
                </div>

                <div class="search-dropdown dropdown pull-right visible-xs">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                    <div class="dropdown-menu">
                        <form >
                            <input class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                </div>

                <div class="navbar-collapse nav-responsive-disabled">

                    <!--toggle buttons start-->
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="toggle-btn" data-toggle="ui-nav" href="">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- toggle buttons end -->

                    <!--search start-->
                    <form class="search-content hidden-xs" >
                        <button type="submit" name="search" class="btn srch-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                    </form>
                    <!--search end-->

                    <!--notification start-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge">5</span>
                            </a>
                            <!--dropdown -->
                            <ul class="dropdown-menu dropdown-menu--responsive">
                                <div class="dropdown-header">Notifications (12)</div>
                                <ul class="Notification-list Notification-list--small niceScroll list-group">
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                <p class="Notification__highlight-time">1.2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                <p class="Notification__highlight-time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                <p class="Notification__highlight-time">1 day ago</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                <p class="Notification__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--info pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-database"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Database Error</b></p>
                                                <p class="Notification__highlight-time">2 days ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                <p class="Notification__highlight-time">1.2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Notification list-group-item">
                                        <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="Notification__highlight">
                                                <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                <p class="Notification__highlight-time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-footer"><a href="">View more</a></div>
                            </ul>
                            <!--/ dropdown -->
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge">5</span>
                            </a>
                            <!--dropdown -->
                            <ul class="dropdown-menu dropdown-menu--responsive">
                                <div class="dropdown-header">Messages (12)</div>
                                <ul class="Message-list niceScroll list-group">
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a2.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Lubida Teresa</span>
                                                <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--unread" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a1.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Sara Souaidan</span>
                                                <p class="Message__highlight-excerpt">Hello there!</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Addy Osmany</span>
                                                <p class="Message__highlight-excerpt">Blah Blah Blah</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Picaso Patel</span>
                                                <p class="Message__highlight-excerpt">Bhai, are you there?</p>
                                                <p class="Message__highlight-time">2 years ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                <img src="imgs/a0.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Bengali Tiger</span>
                                                <p class="Message__highlight-excerpt">Mu ha ha</p>
                                                <p class="Message__highlight-time">10 years ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-footer"><a href="">View more</a></div>
                            </ul>
                            <!--/ dropdown -->
                        </li>

                        <li class="dropdown dropdown-usermenu">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-avatar"><img src="imgs/a0.jpg" alt="..."></div>
                                <span class="hidden-sm hidden-xs">John Doe</span>
                                <!--<i class="fa fa-angle-down"></i>-->
                                <span class="caret hidden-sm hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-cogs"></i>  Settings</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-commenting-o"></i>  Feedback</a></li>
                                <li><a href="#"><i class="fa fa-life-ring"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-toggle="ui-aside-right" href=""><i class="glyphicon glyphicon-option-vertical"></i></a>
                        </li>
                    </ul>
                    <!--notification end-->

                </div>

            </header>
            <!--header end-->