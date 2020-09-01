<?php

use yii\helpers\Url;
?>

<?php $var = md5(microtime() . rand(0, 9999)) ?>

<div class="<?= $col ?>">
    <a href="##" data-toggle="modal" data-target="#myModal1_<?= $var ?>">
        <img  class="block-gallery" style="height: <?= $varH?>px;" src="<?= Url::to($image) ?>"  alt="#">
    </a>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="myModal1_<?= $var ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img style="width: 95%;" src="<?= $image; ?>"  alt="#">
            </div>
        </div>
    </div>
</div>

