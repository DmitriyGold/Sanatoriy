<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="col my-2">
    <div class="shadow bg-white rounded wrapper-card mx-auto">
        
        <div class="wrapper-card-top">
            <div class="wrapper-card-img">
                <img src="<?= Url::to('@web/uploads/doctors/' . $image)?>" class="increase" alt="фото сотрудника"  
                     style="width: 100%;">
            </div> 
        </div>

        <div class="text-center wrapper-card-content">
            <h6 class="my-2" style="color: #79A62F;"><?= mb_strtoupper($fio, 'UTF-8'); ?></h6>
            <p class="my-1"><strong><i><?= nl2br($description1) ?></i></strong></p>
        </div>
    </div>  
    <div class="text-center align-self-end pt-2">
        <?php $options = ['style' => ['color' => '#888']]; ?>
        <?= Html::a('подробнее <i class="fa fa-angle-double-right" aria-hidden="true"></i>', ['doctor_more', 'id' => $id], $options) ?>
    </div>
</div>