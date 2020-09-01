<?php

use yii\helpers\Url;
?>

<div class="card-header" id="heading<?= $id ?>">
    <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $id ?>" aria-expanded="false" aria-controls="collapse<?= $var1->id ?>">
            <?= $name ?>
        </button>
    </h5>
</div>

<div id="collapse<?= $id ?>" class="collapse" aria-labelledby="heading<?= $id ?>" data-parent="#accordionExample">

    <div class="row text-center p-2 justify-content-center">

        <div class="col-sm-6 align-self-center">
            <strong><?= $name ?> </strong><?= $description ?>
        </div>

        <div class="col-sm-3">
            <?php if ($image1 <> '') { ?>
                <a href="##" data-toggle="modal" data-target="#myModal1_<?= $id ?>">
                    <img style="height: 200px;" src="<?= Url::to(["$image1"]); ?>"  alt="<?= $name ?>">
                </a>
            <?php } ?>
        </div>

        <div class="col-sm-3">
            <?php if ($image2 <> '') { ?>
                <a href="##" data-toggle="modal" data-target="#myModal2_<?= $id ?>">
                    <img style="height: 200px;" src="<?= Url::to(["$image2"]); ?>"  alt="<?= $name ?>">
                </a>
            <?php } ?>
        </div>

    </div>
</div>


<!-- Modal 1 -->
<div class="modal fade" id="myModal1_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel"><?= $name ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img style="width: 90%;" src="<?= Url::to(["$image1"]); ?>"  alt="<?= $name ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="myModal2_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel"><?= $name ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img style="width: 90%;" src="<?= Url::to(["$image2"]); ?>"  alt="<?= $name ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>