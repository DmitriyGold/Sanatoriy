<?php

use yii\helpers\Url;

$this->title = 'Карточка реквизитов';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mt-2 container">
    <div class="row justify-content-center">

        <img class="my-license w-50" src="<?= Url::to('@web/images/card.jpg'); ?>" alt="карточка реквизитов">

    </div>

    <div class="block-3px my-4"></div>

    <div class="row my-3 justify-content-center">
        <a class="" href="<?= Url::to(['/uploads/card_details.doc']); ?>" target="target-blank"><strong>скачать в формате .DOC</strong></a> 
    </div>


</div>
