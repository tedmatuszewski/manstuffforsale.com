<!--<div class="col-sm-6">-->
    <div class="item" data-id="<?php echo $model->id; ?>" data-updated="<?php echo $model->dateUpdated; ?>" data-state="<?php echo $model->state; ?>">
        <h2><?php echo $model->name; ?><i style="font-size:18px;cursor:pointer;margin-top: -20px;" class="faDeleteItem fa fa-times-circle pull-right"></i></h2>
        
        
        <div class="carousel-container images-loading" data-imagesloaded="0">
            <?php
                foreach($model->images as $image) {
                    echo("<img src='" . $image->location . "' />");
                }
            ?>

            <!-- Controls -->
            <a class="left-carousel" href="#" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right-carousel" href="#" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>

        <p><b>Location:</b> <br /> <?php echo $model->state . " - " . $model->location; ?></p>

        <div class="description-container">
            <p><b>Description:</b> <br /> <?php echo substr($model->description, 0, 150); ?></p>
        </div>
    </div>
<!--</div>-->