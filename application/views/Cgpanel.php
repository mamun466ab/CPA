
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" type="image/gif" href="<?php echo base_url(); ?>libs/logo/mainlgo.png" />
        <title><?php if(isset($pagetitle)): echo $pagetitle; endif; ?></title>

        <!-- Bootstrap -->
        <link href="<?PHP echo base_url(); ?>libs/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
        <link href="<?PHP echo base_url(); ?>libs/css/wonstyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?PHP echo base_url(); ?>libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            #sidebar ul li a{
                color: #fff;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="wrapper">
                    <!-- Sidebar Holder -->
                    <nav id="sidebar" style="background: #222D32;">
                        <div style="height: 50px; margin: 0 -1px 0 0; padding: 5px; line-height: 50px; color: #fff; background: #01718a;">
                            <img src="<?php echo base_url(); ?>libs/logo/mainlgo.png" alt="Site Logo" width="45px" style="float: left;"/>
                            <span style="font-size: 28px; font-weight: bold;">Click Giants</span>
                        </div>

                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="#">Home 1</a></li>
                                    <li><a href="#">Home 2</a></li>
                                    <li><a href="#">Home 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About</a>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li><a href="#">Page 1</a></li>
                                    <li><a href="#">Page 2</a></li>
                                    <li><a href="#">Page 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
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
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="<?php echo base_url(); ?>Cgpanel/add_category">Add Category</a></li>
                                    <li><a href="#">Block User</a></li>
                                    <li><a href="#">Edit Info</a></li>
                                    <li><a href="#">Report</a></li>
                                    <li><a href="<?php echo base_url(); ?>Wbd_logout/adn_logout">Logout</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret" style="color: #0099BC;"></span></a>
                                        <ul class="dropdown-menu" style="width: 250px; padding: 12px;">
                                            <li>
                                                <a href="#">Health</a>
                                            </li>
                                            <li>
                                                <a href="#">Beauty</a>
                                            </li>
                                            <li>
                                                <a href="#">Medicine</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#" style="color: #0099BC;">Forgot Password?</a></li>
                                            <li><a href="<?PHP echo base_url(); ?>Affiliate-Signup" style="color: #0099BC;">Create a New Account.</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>


                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div style="height: 120px; border: 1px solid #cccccc; border-radius: 5px; background: #00C0EF; text-align: center; color: #ffffff;">
                                        <span style="font-size: 20px; font-weight: bold; line-height: 25px;">Total Affiliate</span>
                                        <hr style="margin-top: 0;" />
                                        <span style="font-size:30px; font-weight: bold;">
                                            <?php
                                            $fnm = $this->session->userdata('fnm');
                                            if (isset($fnm)) {
                                                echo $fnm;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div style="height: 120px; border: 1px solid #cccccc; border-radius: 5px; background: #00A65A; text-align: center; color: #ffffff;">
                                        <span style="font-size: 20px; font-weight: bold; line-height: 25px;">Total Advertiser</span>
                                        <hr style="margin-top: 0;" />
                                        <span style="padding: 4px; font-size:30px; font-weight: bold;">
                                            <?php
                                            $id = $this->session->userdata('adnid');
                                            if (isset($id)) {
                                                echo $id;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div style="height: 120px; border: 1px solid #cccccc; border-radius: 5px; background: #F39C12; text-align: center; color: #ffffff;">
                                        <span style="font-size: 20px; font-weight: bold; line-height: 25px;">Online Now</span>
                                        <hr style="margin-top: 0;" />
                                        <span style="font-size:30px; font-weight: bold;">
                                            <?php
                                            $eml = $this->session->userdata('adneml');
                                            if (isset($eml)) {
                                                echo $eml;
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div style="height: 120px; border: 1px solid #cccccc; border-radius: 5px; background: #DD4B39; text-align: center; color: #ffffff;">
                                        <span style="font-size: 20px; font-weight: bold; line-height: 25px;">Total Earn</span>
                                        <hr style="margin-top: 0;" />
                                        <span style="font-size:30px; font-weight: bold;">150000</span>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>

                        <!-- For Add post form -->
                        <?php
                        if(isset($content)):
                            echo $content;
                        endif;
                        ?>
                        <p style="height: 10px; font-size: 8px; overflow: hidden; color: #fff; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


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
                        <a href="<?PHP echo base_url(); ?>"><img src="<?PHP echo base_url(); ?>libs/logo/logo_footer.png" alt="Site Logo" height="80px" class="center-block img-responsive" /></a>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>libs/js/ajaxformsubmit.js"></script>
    </body>
</html>