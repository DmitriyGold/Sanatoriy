<?php

use yii\helpers\Url;

$this->title = 'Лицензия';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mt-2 container">
    <div class="row text-center">
        <div class="col-12 col-lg-6 ">
            <img class="my-license" style="max-width: 450px" src="<?= Url::to('@web/images/license/license1.jpg'); ?>" alt="лицензия сторона 1">
        </div>

        <div class="col-12 col-lg-6">
            <img class="my-license" style="max-width: 450px" src="<?= Url::to('@web/images/license/license2.jpg'); ?>" alt="лицензия сторона 2">
        </div>
    </div>

    <div class="block-3px my-2"></div>

    <div class="row my-3 justify-content-center">
        <a class="" href="<?= Url::to(['/uploads/license.pdf']); ?>" target="target-blank"><strong>нормативные документы в формате .PDF</strong></a> 
    </div>


</div>



