<div class="container-fluid">
    <div class="well"> 
        <div class="row">
            <div class="col-md-12">
                <div class="row hidden-md hidden-lg">
                    <h1 class="text-center" ><?php echo $pdt_dtl->row(0)->ttl; ?></h1>
                </div>

                <div class="pull-left thumb-contenido" style="margin: 0 7px 7px 0; ">
                    <img class="center-block img-responsive" src='http://placehold.it/100x100' />
                </div>
                <div class="">
                    <h1  class="hidden-xs hidden-sm"><?php echo $pdt_dtl->row(0)->ttl; ?></h1>
                    <p class="text-justify"><?php echo $pdt_dtl->row(0)->dtl; ?></p>
                </div>
                <div class="">
                    <p class="text-justify"><strong>Pay per Conversion : <?php echo $pdt_dtl->row(0)->ppc; ?></strong></p>
                </div>
                <div class="">
                    <p class="text-justify"><strong>Tracking Link : <?php echo $pdt_dtl->row(0)->ml; ?></strong></p>
                </div>
                <div class="">
                    <p class="text-justify"><strong>Offer Category : <?php echo $pdt_dtl->row(0)->pct; ?></strong></p>
                </div>
                <div class="">
                    <p class="text-justify"><strong>Country : <?php echo $pdt_dtl->row(0)->awc; ?></strong></p>
                </div>

            </div>
        </div>
    </div>
</div>