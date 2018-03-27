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
        <link href="<?PHP echo base_url(); ?>libs/css/wonstyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?PHP echo base_url(); ?>libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            #sidebar ul li a{
                color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        $reg_msg = $this->session->userdata('ad_L_err');
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
                            echo $this->session->userdata('ad_L_err');
                            $this->session->unset_userdata('ad_L_err');
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
        ?>
        <div class = "container">
            <div class = "row">

                <!--Sidebar Holder -->
                <div class = "col-xs-12" style = "height: 50px; margin: 0 -1px 0 0; padding: 5px; line-height: 50px; color: #fff; background: #01718a;">
                    <img src = "<?php echo base_url(); ?>libs/logo/mainlgo.png" alt = "Site Logo" width = "45px" style = "float: left;"/>
                    <span style = "font-size: 28px; font-weight: bold;">Click Giants</span>
                </div>
                <div class = "col-xs-12 bg-success">
                    <div class = "container">
                        <div id = "loginbox" style = "margin-top:50px;" class = "mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <div class = "panel panel-info" >
                                <div class = "panel-heading">
                                    <div class = "panel-title">Sign In</div>
                                    <div style = "float:right; font-size: 80%; position: relative; top:-10px"><a href = "#">Forgot password?</a></div>
                                </div>

                                <div style = "padding-top:30px" class = "panel-body" >

                                    <div style = "display:none" id = "login-alert" class = "alert alert-danger col-sm-12"></div>


                                    <?php
                                    echo form_open(base_url() . 'Login/admin_login', array('id' => 'loginform', 'class' => 'form-horizontal', 'role' => 'form'));
                                    ?>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <?php
                                        $adun = array(
                                            'id' => 'login-username',
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'name' => 'ademl',
                                            'placeholder' => 'Email'
                                        );
                                        echo form_input($adun);
                                        ?>
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <?php
                                        $adpsd = array(
                                            'id' => 'login-password',
                                            'type' => 'password',
                                            'class' => 'form-control',
                                            'name' => 'adpsd',
                                            'placeholder' => 'Password'
                                        );
                                        echo form_input($adpsd);
                                        ?>
                                    </div>



                                    <div class="input-group">
                                        <div class="checkbox">
                                            <label>
                                                <input id="login-remember" type="checkbox" name="adrm" value="1"> Remember me
                                            </label>
                                        </div>
                                    </div>


                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">
                                            <input type="submit" class="btn btn-success" name="adsmt" value="Login" />
                                        </div>
                                    </div>   

                                    <?php
                                    echo form_close();
                                    ?>
                                </div>                     
                            </div>  
                        </div>
                    </div>
                </div>

                <!-- Page Content Holder -->
            </div>
        </div>

        <div class="container" style="background: #444; color: #fff;">
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
        <script type="text/javascript" src="libs/js/jquery.min.js"></script>
        <script type="text/javascript" src="libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="libs/js/custom.js"></script>
    </body>
</html>