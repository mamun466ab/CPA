<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-group" style="margin-top: 30px; border: 1px solid #0099BC; border-radius: 3px;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: #0099BC;">
                            <span style="color: #ffffff; font-size: 23px; font-weight: bold;">Add Category</span>
                            <span class="fa fa-user-o pull-right" style="color: #ffffff; font-size: 33px; font-weight: bold;"></span>
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
                            <?php
                            $frm_att = array('class' => 'form-horizontal', 'id' => 'form_user');
                            echo form_open(base_url() . 'Add_pdct/pdct_cat', $frm_att);
                            ?>
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="ctn" style="text-align: left;">Offer Title <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $cgusrnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'ctn',
                                        'placeholder' => 'Category Name',
                                        'name' => 'ctn'
                                    );
                                    echo form_input($cgusrnm);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-8">

                                    <?php
                                    $cgaffsmt = array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-info',
                                        'value' => 'Create Account',
                                        'name' => 'ctnsmt'
                                    );
                                    echo form_input($cgaffsmt);
                                    ?>

                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>