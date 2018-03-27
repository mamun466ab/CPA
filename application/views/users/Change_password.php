
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-group" style="margin-top: 30px; border: 1px solid #555; border-radius: 3px;">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #555;">
                        <span style="color: #00C0EF; font-size: 23px; font-weight: bold;">Change Password</span>
                        <span class="fa fa-key pull-right" style="color: #00C0EF; font-size: 33px; font-weight: bold;"></span>
                    </div>
                    <div class="panel-body">
                        <div id="messages"></div>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>Reset_pass/cng_psd" method="post" id="form_user">
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="opsd" style="text-align: left;">Old Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $opsd = array(
                                        'type' => 'password',
                                        'class' => 'form-control',
                                        'id' => 'opsd',
                                        'placeholder' => 'Old Password',
                                        'name' => 'opsd'
                                    );
                                    echo form_input($opsd);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="rnpsd" style="text-align: left;">New Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $rnpsd = array(
                                        'type' => 'password',
                                        'class' => 'form-control',
                                        'id' => 'rnpsd',
                                        'placeholder' => 'New Password',
                                        'name' => 'rnpsd'
                                    );
                                    echo form_input($rnpsd);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="crnpsd" style="text-align: left;">Confirm New Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $crnpsd = array(
                                        'type' => 'password',
                                        'class' => 'form-control',
                                        'id' => 'crnpsd',
                                        'placeholder' => 'Confirm New Password',
                                        'name' => 'crnpsd'
                                    );
                                    echo form_input($crnpsd);
                                    ?>
                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-info">Change</button>
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