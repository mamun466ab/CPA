<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" type="image/gif" href="<?php echo base_url(); ?>libs/logo/mainlgo.png" />
        <title>Click Giants</title>

        <!-- Bootstrap -->
        <link href="<?PHP echo base_url(); ?>libs/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
        <link href="<?PHP echo base_url(); ?>libs/css/wonstyle-index.css" rel="stylesheet" type="text/css"/>
        <link href="<?PHP echo base_url(); ?>libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Nav Bar -->
        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid #ccc;">
                <div class="col-md-12">
                    <nav class="navbar navbar-default padding-top-20 background-none" style="border: none;">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?PHP echo base_url(); ?>"><img src="<?PHP echo base_url(); ?>libs/logo/logo.png" alt="Site Logo" height="60px" style="margin: -20px 50px 0 0;" /></a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="<?php echo base_url(); ?>">Welcome <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Advertisers</a></li>
                                    <li><a href="#">FAQ'S</a></li>
                                    <li><a href="Contact-Us">Contact Us</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret" style="color: #fff;"></span></a>
                                        <ul class="dropdown-menu" style="width: 250px; padding: 12px;">
                                            <form action="Login" method="post">
                                                <li>
                                                    <div class="input-group" style="margin-bottom: 10px;">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                                        <?php
                                                        $lunm = array(
                                                            'type' => 'text',
                                                            'name' => 'lunm',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Username',
                                                            'required' => 'required'
                                                        );
                                                        echo form_input($lunm);
                                                        ?>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group" style="margin-bottom: 10px;">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                                        <?php
                                                        $lpsd = array(
                                                            'type' => 'password',
                                                            'name' => 'lpsd',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Password',
                                                            'required' => 'required'
                                                        );
                                                        echo form_input($lpsd);
                                                        ?>
                                                    </div>
                                                </li>
                                                <li>

                                                    <?php
                                                    $lsmt = array(
                                                        'type' => 'submit',
                                                        'name' => 'lsmt',
                                                        'class' => 'btn btn-info',
                                                        'style' => 'width: 100%;',
                                                        'value' => 'Login'
                                                    );
                                                    echo form_input($lsmt);
                                                    ?>
                                                </li>
                                            </form>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>Reset-Password" style="color: #0099BC;">Forgot Password?</a></li>
                                            <li><a href="<?PHP echo base_url(); ?>Affiliate-Signup" style="color: #0099BC;">Create a New Account.</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?PHP echo base_url(); ?>Affiliate-Signup" style="color: #D21112; font-weight: bold;">Sign Up</a></li>

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 40px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="background: #0099BC;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="background: #0099BC;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="background: #0099BC;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" style="background: #0099BC;"></li>
                </ol>
                <!-- Registration Message -->

                <?php
                $reg_msg = $this->session->userdata('reg_msg');
                if (isset($reg_msg)) {
                    ?>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content" style="color: #B54442;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Error : </h4>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    echo $this->session->userdata('reg_msg');
                                    $this->session->unset_userdata('reg_msg');
                                    ?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }

                $suc_msg = $this->session->userdata('suc_msg');
                if (isset($suc_msg)) {
                    ?>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content" style="color: #0099BC;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Error : </h4>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    echo $this->session->userdata('suc_msg');
                                    $this->session->unset_userdata('suc_msg');
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
//reset password mail send form
                $rst_frm = $this->session->userdata('rst_frm');
                if (isset($rst_frm)) {
                    ?>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content" style="color: #0099BC;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Enter your registered email address</h4>
                                </div>
                                <?php
                                echo form_open(base_url() . 'Reset_pass/send_pass');
                                ?>
                                <div class="modal-body">
                                    <div class="input-group" style="margin-bottom: 10px;">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <?php
                                        $rst_eml = array(
                                            'type' => 'email',
                                            'name' => 'rsteml',
                                            'class' => 'form-control',
                                            'placeholder' => 'Registered Email Address',
                                            'required' => 'required',
                                            'autofocus' => 'autofocus'
                                        );
                                        echo form_input($rst_eml);
                                        ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <?php
                                    $rstsmt = array(
                                        'type' => 'submit',
                                        'name' => 'rstsmt',
                                        'class' => 'btn btn-info pull-left',
                                        'value' => 'Reset'
                                    );
                                    echo form_input($rstsmt);
                                    ?>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                                <?php
                                echo form_close();
                                $this->session->unset_userdata('rst_frm');
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }

                //reset password form
                $newpsd = $this->session->userdata('new_psd');
                if (isset($newpsd)) {
                    ?>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content" style="color: #0099BC;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Enter Your New Password</h4>
                                </div>
                                <?php
                                echo form_open(base_url() . 'Reset_pass/reset_psd', array('id' => 'form_user'));
                                ?>
                                <div style="margin-top: 20px;" id="messages">
                                <div class="modal-body">
                                    
                                    <div class="form-group has-feedback">
                                        <label class="col-sm-4 control-label" for="cgpsd" style="text-align: left;">Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                        <div class="col-sm-8">

                                            <?php
                                            $new_psd = array(
                                                'type' => 'Password',
                                                'name' => 'newpsd',
                                                'class' => 'form-control',
                                                'placeholder' => 'New Password',
                                                'id' => 'newpsd'
                                            );
                                            echo form_input($new_psd);
                                            ?>

                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group has-feedback" style="margin-bottom: 60px;">
                                        <label class="col-sm-4 control-label" for="ccgpsd" style="text-align: left;">Confirm Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                        <div class="col-sm-8">

                                            <?php
                                            $new_cpsd = array(
                                                'type' => 'Password',
                                                'name' => 'newcpsd',
                                                'class' => 'form-control',
                                                'placeholder' => 'Confirm New Password',
                                                'id' => 'newcpsd'
                                            );
                                            echo form_input($new_cpsd);
                                            ?>

                                            <span class="form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                <div class="modal-footer">
                                    <?php
                                    $rstpsmt = array(
                                        'type' => 'submit',
                                        'name' => 'rstpsmt',
                                        'class' => 'btn btn-info pull-left',
                                        'value' => 'Reset',
                                        'id' => 'rstpsmt'
                                    );
                                    echo form_input($rstpsmt);
                                    ?>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                                <?php
                                echo form_close();
                                $this->session->unset_userdata('new_psd');
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <span class="pull-left" style="margin-top: 50px;">
                            <span style="font-size: 5.538em; font-weight: bold; line-height: 1;">Affiliates</span><br/>
                            <span style="font-size: 26px; color: #777;">Make money with CPAFULL</span><br/>
                            <p>
                                High Payouts and Fast Payments<br/>
                                Expansive Private Offer Inventory<br/>
                                Industry-Leading Tracking and Reporting Platform
                            </p>
                            <button type="button" class="btn btn-info" style="width: 250px; height: 60px; margin-top: 20px; font-size: 15px; font-weight: bold;">Become an Affiliate</button>
                        </span>
                        <img src="<?PHP echo base_url(); ?>libs/img/sl-1_460_400.jpg" alt="Chicago" class="pull-right">

                    </div>

                    <div class="item">
                        <span class="pull-left" style="margin-top: 50px;">
                            <span style="font-size: 5.538em; font-weight: bold; line-height: 1;">HIGH RATE</span><br/>
                            <span style="font-size: 26px; color: #777;">All types of platforms & verticals available!</span><br/>
                            <p>
                                We will work with serious, highly motivated publishers who are willing to both <br/>
                                accept our help and grow their businesses.<br/>
                                1.Sign up for free. 2.Copy and paste HTML code 3.Earn, earn, earn!
                            </p>
                            <button type="button" class="btn btn-info" style="width: 250px; height: 60px; margin-top: 20px; font-size: 15px; font-weight: bold;">Signup as an Affiliate</button>
                        </span>
                        <img src="<?PHP echo base_url(); ?>libs/img/sl-2_460_400.jpg" alt="Chicago" class="pull-right">
                    </div>

                    <div class="item">
                        <span class="pull-left" style="margin-top: 50px;">
                            <span style="font-size: 5.538em; font-weight: bold; line-height: 1;">Advertisers</span><br/>

                            <p>
                                We can help you build your marketing campaign as <br/>
                                your exclusive agency orrecord and<br/>
                                help increase your brand awareness.
                            </p>
                            <button type="button" class="btn btn-info" style="width: 250px; height: 60px; margin-top: 20px; font-size: 15px; font-weight: bold;">Become an Advertiser</button>
                        </span>
                        <img src="<?PHP echo base_url(); ?>libs/img/sl-3_460_400.jpg" alt="Chicago" class="pull-right">
                    </div>

                    <div class="item">
                        <span class="pull-left" style="margin-top: 50px;">
                            <span style="font-size: 5.538em; font-weight: bold; line-height: 1;">Support</span><br/>
                            <span style="font-size: 26px; color: #777;">Responsible assistant team.</span><br/>
                            <p>
                                1-on-1 Manager to Publisher Support<br/>
                                Dedicated account managers with 24/7 support
                            </p>
                            <button type="button" class="btn btn-info" style="width: 250px; height: 60px; margin-top: 20px; font-size: 15px; font-weight: bold;">Contact Us Now</button>
                        </span>
                        <img src="<?PHP echo base_url(); ?>libs/img/sl-4_460_400.jpg" alt="Chicago" class="pull-right">
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid" style="background: #0099BC">
            <div class="row">
                <div class="col-md-12" style="font-size: 19.5px; font-weight: bold; color: #fff; line-height: 90px; text-align: center;">
                    So You Want To Be An Affiliate Millionaire?
                </div>
            </div>

            <div class="container" style="border-top: 0.1em solid #7fe6fe; padding: 15px;">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?PHP echo base_url(); ?>libs/logo/icon-1.png" alt="" style="height: 120px;" class="img-responsive center-block"/>
                        <div class="col-md-12 text-center textstyle">
                            Affiliates
                            <p class="textp">
                                Whether you are new to the CPA marketer, We will help your bussiness grow. We invite you to apply for membership as a revenue sharing partner of the CPAFULL Affiliate Network.<br/>

                            </p>
                            <a href=""><span class="glyphicon glyphicon-plus glyphicon-my-plus glyphicon-hover"></span></a>
                        </div>
                    </div>

                    <div class="col-sm-4" style="border-left: 0.1em solid #7fe6fe; border-right: 0.1em solid #7fe6fe;">
                        <img src="<?PHP echo base_url(); ?>libs/logo/icon-2.png" alt="" style="height: 120px;" class="img-responsive center-block"/>
                        <div class="col-md-12 text-center textstyle">
                            Advertisers
                            <p class="textp">
                                CPAFULL utilizes a cost per action advertising model. Simply put, you pay for results, not for services! Learn more about advertising with CPAFULL below.
                            </p>
                            <a href=""><span class="glyphicon glyphicon-plus glyphicon-my-plus glyphicon-hover"></span></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <img src="<?PHP echo base_url(); ?>libs/logo/icon-3.png" alt="" style="height: 120px;" class="img-responsive center-block"/>
                        <div class="col-md-12 text-center textstyle">
                            Network
                            <p class="textp">
                                Discover the real power of performance marketing with our global affiliate network. Drive highly-targeted traffic to your clients, boosting their sales and leads. contact us now.
                            </p>
                            <a href=""><span class="glyphicon glyphicon-plus glyphicon-my-plus glyphicon-hover"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding-top: 60px; padding-bottom: 60px; background: #F5F5F5;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span style="font-family: 'robotoregular'; font-size: 24px;">User Login</span>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4 col-sm-offset-4">
                        <form method="post" action="Login">
                            <div class="input-group" style="margin-bottom: 10px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                <?php
                                $llunm = array(
                                    'id' => 'email',
                                    'type' => 'text',
                                    'name' => 'lunm',
                                    'class' => 'form-control',
                                    'placeholder' => 'Username',
                                    'required' => 'required'
                                );
                                echo form_input($llunm);
                                ?>
                            </div>
                            <div class="input-group" style="margin-bottom: 10px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                <?php
                                $llpsd = array(
                                    'type' => 'password',
                                    'name' => 'lpsd',
                                    'class' => 'form-control',
                                    'placeholder' => 'Password',
                                    'required' => 'required'
                                );
                                echo form_input($llpsd);
                                ?>
                            </div>

                            <?php
                            $llsmt = array(
                                'type' => 'submit',
                                'name' => 'lsmt',
                                'class' => 'btn btn-info',
                                'style' => 'width: 100%;',
                                'value' => 'Login'
                            );
                            echo form_input($llsmt);
                            ?>
                        </form>

                        <a href="<?php echo base_url(); ?>Affiliate-Signup">Apply Affiliate Account</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 10px 0; background: #444; color: #fff;">
            <div class="container">
                <div class="">
                    <div class="row">
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
        </div>




        <!------ jQuery File ------->
        <script type="text/javascript" src="libs/js/jquery.min.js"></script>
        <script type="text/javascript" src="libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="libs/js/ajaxformsubmit.js"></script>
        <script type="text/javascript" src="libs/js/custom.js"></script>
    </body>
</html>