<?php

use yii\helpers\Url;

$this->title = 'Акции и предложения';
$this->params['breadcrumbs'][] = '';
?>
<div class="container-fluid">   
    <div class="row text-center mt-5 mb-3">
        <div class="col" style="color: #79A62F;"><h4><?= $model->title ?></h4></div>
    </div>

    <div class="row justify-content-center">

        <div class="col-12 col-xl-8 pl-3" >
            <div class="row">
                <div class="col-12">
                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    c <?= $model->dateStart ?> по <?= $model->dateEnd ?>
                </div>
                <div class="col-12 my-3">
                    <strong><i><?= nl2br($model->short_text) ?></i></strong>
                </div>
                <div class="col-12">
                    <?= nl2br($model->detailed_text) ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 align-self-center text-center mt-2">
            <?php if (!empty($model->imagePath)) {?>
            
            <img src="<?= Url::to('@web/uploads/promotions/' . "$model->imagePath") ?>" alt="картинка к акции"  
                 style="max-width: 500px; border: 4px solid #D2E8F2;">
            
            <?php }?>
        </div>
    </div>

    <div class="row mt-5 border-bottom">

    </div>


</div> 



