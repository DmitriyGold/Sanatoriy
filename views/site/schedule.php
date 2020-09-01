<?php
/* @var $this yii\web\View */

$this->title = 'График работы';
$this->params['breadcrumbs'][] = '';
?>
<div class="mt-2 pt-5 container">

    <?php foreach ($model as $value) { ?>
            <div class="row mt-5 mb-3 shadow bg-white rounded block-news">
            <div class="col-12">
                <h6  class="text-center mt-3 mb-2" style="color: #79A62F;"><?= $value['title'] ?></h6>
                <p><?= $value['text1'] ?></p>
                <p><?= $value['text2'] ?></p>
                <p><?= $value['text3'] ?></p>
            </div>
        </div>
    <?php } ?>

</div>




