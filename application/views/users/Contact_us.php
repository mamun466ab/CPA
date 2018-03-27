
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-group" style="margin-top: 30px; border: 1px solid #555; border-radius: 3px;">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #555;">
                        <span style="color: #00C0EF; font-size: 23px; font-weight: bold;">Contact Us</span>
                        <span class="fa fa-envelope-o pull-right" style="color: #00C0EF; font-size: 33px; font-weight: bold;"></span>
                    </div>
                    <div class="panel-body">
                        <div id="messages"></div>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>Contact/send_mail" method="post" id="form_user">
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="cgusrnm" style="text-align: left;">Full Name <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $f_nm = $this->session->userdata('cg_fnm');
                                    $cgusrnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'cgusrnm',
                                        'placeholder' => 'Full Name',
                                        'name' => 'cgusrnm',
                                        'value' => $f_nm,
                                        'disabled' => 'disabled'
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
                                    $u_eml = $this->session->userdata('cg_eml');
                                    $cgeml = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'cgeml',
                                        'placeholder' => 'Email Address',
                                        'name' => 'cgeml',
                                        'value' => $u_eml,
                                        'disabled' => 'disabled'
                                    );
                                    echo form_input($cgeml);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="cgcnm" style="text-align: left;">Subject</label>
                                <div class="col-sm-8">
                                    <?php
                                    $cgcnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'cgcnm',
                                        'placeholder' => 'Subject',
                                        'name' => 'cgcnm'
                                    );
                                    echo form_input($cgcnm);
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
                                    <button type="submit" class="btn btn-info">Send</button>
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