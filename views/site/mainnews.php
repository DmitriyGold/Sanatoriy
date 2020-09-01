<?php

use yii\helpers\Url;

$this->title = 'Подробнее';
$this->params['breadcrumbs'][] = '';
?>

<div class="container">

    <?php foreach ($model as $value) { ?>

            <div class="row mt-5 mb-3 shadow bg-white rounded block-news">
            <div class="col-12 my-2">
                <h6 class="text-center my-2" style="color: #79A62F;"><?= $value['detailed_title1'] ?></h6>
                <p><?= nl2br($value['detailed_text1']) ?></p>
            </div>
            <div class="col-12  my-2">
                <h6 class="text-center" style="color: #79A62F;"><?= $value['detailed_title2'] ?></h6>
                <p><?= nl2br($value['detailed_text2']) ?></p>
            </div>
            <div class="col-12  my-2">
                <h6 class="text-center" style="color: #79A62F;"><?= $value['detailed_title3'] ?></h6>
                <p><?= nl2br($value['detailed_text3']) ?></p>
            </div>
            <div class="col-12  my-2">
                <p><i><?= $value['date'] ?></i></p>
            </div>

        </div>

    <?php } ?>
</div>
