<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-info text-capitalize" style="margin-bottom: 20px; font-size: 21px; font-weight: bold; text-decoration: underline;">
            Offer for You -
        </div>
    </div>
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
                        <th style="text-align: center;">Conversation</th>

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