
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" type="image/gif" href="<?php echo base_url(); ?>libs/logo/mainlgo.png" />
        <title>
            <?php
            if (isset($pgttl)):
                echo $pgttl;
            else:
                echo 'Click Giants';
            endif;
            ?>
        </title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>libs/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>libs/css/wonstyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Nav Bar -->
        <div class="container-fluid" style="height: 70px;">
            <div class="row">
                <div class="col-lg-6">
                    <a class="navbar-brand float-left" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>libs/logo/logo.png" alt="Site Logo" height="60px" style="margin: -10px 0 0 0;" /></a>
                </div>
                <div class="col-lg-6 text-right">
                    <span style="font-weight: bold; line-height: 70px;">Balance : $450.00</span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
                    <div class="wrapper">
                        <!-- Sidebar Holder -->
                        <nav id="sidebar" style="min-height: 1000px;">
                            <div class="text-center" style="height: 50px; margin: 0 -1px 0 0; line-height: 50px; color: #fff; background: #0099BC;">
                                <span style="font-size: 21px;" class="text-capitalize">
                                    Profile
                                </span>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <?php
                                    $u_id = $this->session->userdata('cg_id');
                                    if (!file_exists("./libs/photo/Profile-pic-{$u_id}.{$pp}")) {
                                        ?>
                                        <img src="<?php echo base_url(); ?>libs/photo/nobody.jpg" alt="Profile Pecture" class="img-responsive img-circle" style="width: 30%; margin: 10px 0 0 35%;" />
                                        <?php
                                    } else {
                                        ?>
                                        <img src='<?php echo base_url() . "libs/photo/Profile-pic-{$u_id}.{$pp}"; ?>' alt="Profile Pecture" class="img-responsive img-circle" style="width: 30%; margin: 10px 0 0 35%;" />
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="text-center" style="height: 50px; margin: 0 -1px 0 0; line-height: 50px;">
                                <span style="font-size: 21px; color: #099;" class="text-capitalize">
                                    <?php
                                    if (isset($fnm)) {
                                        echo $fnm;
                                    } else {
                                        echo 'No Name';
                                    }
                                    //echo $this->session->userdata('cg_fnm');
                                    ?>
                                </span>
                            </div>

                            <ul class="list-unstyled components">
                                <li>
                                    <a href="<?php echo base_url(); ?>user-profile">User Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>change-password">Change Password</a>
                                </li>
                                <!--                            <li>
                                                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Edit Profile</a>
                                                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                                                    <li><a href="#">Personal Info</a></li>
                                                                    <li><a href="#">Login Info</a></li>
                                                                    <li><a href="#">Payment Info</a></li>
                                                                </ul>
                                                            </li>-->
                                <li>
                                    <a href="<?php echo base_url(); ?>about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Contact">Contact</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Logout">Logout</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Page Content Holder -->
                        <div id="content">



                            <nav class="navbar navbar-default" style="border: none; background: #0099BC; border-radius: 0;">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="color: #fff !important; border: 0; padding: 0;" onmouseover="this.style.background = 'none'">
                                        <span class="sr-only">Toggle navigation</span>
                                        <i class="fa fa-bars fa-2x"></i>
                                    </button>

                                    <button id="sidebarCollapse" style="margin: 10px 0 0 7px; background: none; border: none; color: #fff;" onmouseover="this.style.color = '#7fe6fe'" onmouseout="this.style.color = '#fff'">
                                        <i class="fa fa-exchange fa-2x"></i>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                                        <li><a href="<?php echo base_url(); ?>Alloffer">All Offer</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret" style="color: #0099BC;"></span></a>
                                            <ul class="dropdown-menu" style="width: 250px; padding: 12px;">
                                                <?php
                                                if (isset($catg)) {
                                                    foreach ($catg as $catval) {
                                                        echo '<li><a href="' . base_url() . 'Offer/Category/' . $catval->pc . '" style="font-weight: bold;">' . $catval->pc . '</a></li>';
                                                    }
                                                }
                                                ?>

                                            </ul>
                                        </li>
                                        <li><a href="#">Reports</a></li>
                                        <li><a href="<?php echo base_url(); ?>Contact">Contact Us</a></li>
                                        <li><a href="<?php echo base_url(); ?>about-us">About Us</a></li>
                                        <li><a href="<?php echo base_url(); ?>Logout">Logout</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                            <?php
                            if (isset($content)):
                                echo $content;
                            endif;
                            ?>

                            <p style="height: 10px; font-size: 8px; overflow: hidden; color: #fff; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background: #444; color: #fff;">
            <div class="row">
                <div class="container">
                    <div class="col-md-5 col-xs-4 text-right">
                        <h3>
                            <u>Postal Address</u>
                        </h3>
                        <span style="color:#cccccc;">
                            H/N # 160/5,<br/>
                            R/N # 2B,<br/>
                            Banani<br/>
                            Dhaka, Dhaka-1200.
                        </span>
                    </div>
                    <div class="col-md-2 col-xs-4" style="margin-top: 30px;">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>libs/logo/logo_footer.png" alt="Site Logo" height="80px" class="center-block img-responsive" /></a>
                    </div>
                    <div class="col-md-5 col-xs-4">
                        <span class="fa fa-facebook-square fa-2x" style="margin-right: 10px;"></span>
                        <span class="fa fa-twitter-square fa-2x" style="margin-right: 10px;"></span>
                        <span class="fa fa-google-plus-square fa-2x" style="margin-right: 10px;"></span>
                        <span class="fa fa-linkedin-square fa-2x" style="margin-right: 10px;"></span><br/><br/>
                        <span style="color:#cccccc;">
                            © 2017 ClickGiants.com<br/>
                            All rights reserve
                        </span>
                    </div>
                </div>
            </div>
        </div>






        <!------ jQuery File ------->
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/chartjs.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/chartcustom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/ajaxformsubmit.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/custom.js"></script>
    </body>
</html>