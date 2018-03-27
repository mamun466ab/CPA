<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-sm hidden-xs">
            <div style="height: auto; background: #eee; border: 1px solid #cccccc; border-radius: 3px;">
                <canvas id="cctotal" width="400" height="275"></canvas>
            </div>
        </div>
        <div class="col-md-9 col-sm-12">
            <div style="height: auto; background: #eee; border: 1px solid #cccccc; border-radius: 3px;">
                <canvas id="indevidual" width="400" height="87"></canvas>
            </div>
        </div>
    </div>
    <hr />
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($results)) { ?>
                <table border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Title</th>
                        <th style="text-align: center;">Category</th>
                        <th style="text-align: center;">Country</th>
                        <th style="text-align: center;">Pay</th>
                        <th style="text-align: center;">Click</th>
                        <th style="text-align: center;">Conversion</th>

                    </tr>

                    <?php
                    foreach ($results as $data) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $data->id ?></td>
                            <td><a href="<?php echo base_url() . 'offer/details/' . $data->id; ?>"><?php echo $data->ttl ?></a></td>
                            <td><?php echo $data->pct ?></td>
                            <td><?php echo $data->awc ?></td>
                            <td><?php echo $data->ppc ?></td>
                            <td><?php echo $data->ppc ?></td>
                            <td><?php echo $data->ppc ?></td>


                        </tr>
                    <?php } ?>
                </table>
            <?php } else { ?>
                <div>No Offer(s) found.</div>
            <?php } ?>

            <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>

        </div>
    </div>
</div>