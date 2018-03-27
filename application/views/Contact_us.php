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
                                    <li><a href="<?php echo base_url(); ?>">Welcome <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Advertisers</a></li>
                                    <li><a href="#">FAQ'S</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="<?PHP echo base_url(); ?>Affiliate-Signup" style="color: #D21112; font-weight: bold;">Sign Up</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="min-height: 800px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel-group" style="margin-top: 30px;">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #0099BC;">
                                    <span style="color: #ffffff; font-size: 23px; font-weight: bold;">Contact Us</span>
                                    <span class="fa fa-envelope-o pull-right" style="color: #ffffff; font-size: 33px; font-weight: bold;"></span>
                                </div>
                                <div class="panel-body">



                                    <?php
                                    $err_msg = $this->session->userdata('err_msg');
                                    if (isset($err_msg)) {
                                        ?>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content"">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Error : </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        echo $this->session->userdata('err_msg');
                                                        $this->session->unset_userdata('err_msg');
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
                                    ?>
                                    <div id="messages"></div>
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>Contact/send_mail" method="post" id="form_user">
                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgusrnm" style="text-align: left;">Full Name <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgusrnm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgusrnm',
                                                    'placeholder' => 'Full Name',
                                                    'name' => 'cgusrnm'
                                                );
                                                echo form_input($cgusrnm);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgeml" style="text-align: left;">Email <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgeml = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgeml',
                                                    'placeholder' => 'Email Address',
                                                    'name' => 'cgeml'
                                                );
                                                echo form_input($cgeml);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgunm" style="text-align: left;">Subject <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgunm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgcnm',
                                                    'placeholder' => 'Subject',
                                                    'name' => 'cgcnm'
                                                );
                                                echo form_input($cgunm);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgadr" style="text-align: left;">Message <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">
                                                <?php
                                                $txt_attr = array(
                                                    'name' => 'cgadr',
                                                    'class' => 'form-control',
                                                    'id' => 'cgadr',
                                                    'placeholder' => 'Message'
                                                );
                                                echo form_textarea($txt_attr);
                                                ?>
                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">        
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-info">Create Account</button>
                                                <?php
                                                /* $cgaffsmt = array(
                                                  'type' => 'submit',
                                                  'class' => 'btn btn-info',
                                                  'value' => 'Create Account',
                                                  'name' => 'cgaffsmt'
                                                  );
                                                  echo form_input($cgaffsmt); */
                                                ?>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


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
    </body>
</html>