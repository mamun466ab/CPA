<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading" style="background: #555; color: #00C0EF">
                    <span style="font-size: 23px; font-weight: bold;">User Profile</span>
                    <span class="fa fa-user-o pull-right" style="font-size: 33px; font-weight: bold;"></span>
                </div>
                <div class="panel-body" style="padding-top: 0px !important;">

                    <div class="box box-info">

                        <div class="box-body">
                            <div class="row" style="background: #eee;">
                                <div class="col-sm-6">
                                    <div  align="center">
                                        <div style="color:#666; font-size: 11px;" >
                                            <?php echo form_open_multipart('File_upload/pp_upload'); ?>
                                            <label class="btn-bs-file">
                                                <?php
                                                $u_id = $this->session->userdata('cg_id');
                                                if (!file_exists("./libs/photo/Profile-pic-{$u_id}.{$pp}")) {
                                                    ?>
                                                    <img alt = "User Picture" src = "<?php echo base_url(); ?>libs/photo/nobody.jpg" id = "profile-image1" class = "img-circle img-responsive">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img alt = "User Picture" src = '<?php echo base_url() . "libs/photo/Profile-pic-{$u_id}.{$pp}"; ?>' id = "profile-image1" class = "img-circle img-responsive">
                                                    <?php
                                                }
                                                ?>
                                                <span id="profile_btn">Change</span>
                                                <input type="file" name="pp" id="profile_picture" />
                                            </label><br />
                                            <input type="submit" name="smtpp" value="Change" id="smtpp" class="btn btn-sm btn-info hidden" />
                                            <?php echo form_close(); ?>
                                        </div>
                                        <!--Upload Image Js And Css-->
                                    </div>

                                    <br>
                                    <?php
                                    if (isset($pp_error)) {
                                        ?>
                                        <span class="alert alert-danger">
                                            <?php
                                            echo '* ' . $pp_error;
                                            ?>
                                        </span>
                                        <?php
                                    }
                                    ?>

                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;">
                                        <?php
                                        if (isset($fnm)) {
                                            echo $fnm;
                                        }
                                        ?>
                                    </h4></span>
                                    <span><p>
                                            <?php
                                            if (isset($act)) {
                                                echo $act;
                                            }
                                            ?>
                                        </p></span>            
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">


                            <div class="col-sm-5 col-xs-6 tital " >Full Name</div><div class="col-sm-7 col-xs-6 " style="border-left: 1px solid #099;"><?php
                                if (isset($fnm)) {
                                    echo $fnm;
                                }
                                ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Nick Name</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($nnm)) {
                                    echo $nnm;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Email Address</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($eml)) {
                                    echo $eml;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Username</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($unm)) {
                                    echo $unm;
                                }
                                ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Company Name</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($cnm)) {
                                    echo $cnm;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Address</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($adr)) {
                                    echo $adr;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >City</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($cty)) {
                                    echo $cty;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Country</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($cnt)) {
                                    echo $cnt;
                                }
                                ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Zone</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($zne)) {
                                    echo $zne;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Zip Code</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($zcd)) {
                                    echo $zcd;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Phone No</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($phn)) {
                                    echo $phn;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Skype Name</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($snm)) {
                                    echo $snm;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Payment Method</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($pmd)) {
                                    echo $pmd;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Payment Email</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($pme)) {
                                    echo $pme;
                                }
                                ?><span class="pull-right"><a href="">Edit</a></span></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Joining Date</div><div class="col-sm-7" style="border-left: 1px solid #099;"><?php
                                if (isset($jdt)) {
                                    echo $jdt;
                                }
                                ?></div>


                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>


                </div> 
            </div>
        </div>
    </div>
</div>




