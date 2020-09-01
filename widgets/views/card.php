<?php

use yii\helpers\Url;
?>

<div class="col-12 col-sm-6 col-lg-4 my-2">
    <div class="small-box-1 text-center">
        <div class="main-card-services">    

            <?php if (isset($sitePage)) { ?>
                <a href="<?= Url::to(["$sitePage"]); ?>"> 
                    <img src="<?= Url::to("$imagePath") ?>" alt="">                                      
                    <div class="card-content-services">
                        <h6 class="pb-2"><?= $title ?></h6>
                        <p class="px-1"><?= $description ?></p> 
                    </div> 
                </a> 
            <?php } else { ?>
                <img src="<?= Url::to("$imagePath") ?>" alt="">                                      
                <div class="card-content-services">
                    <h6 class="pb-2"><?= $title ?></h6>
                    <p class="px-1"><?= $description ?></p> 
                </div> 
            <?php } ?>
        </div>                    
    </div>                  
</div>