<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Все акции и предложения';
$this->params['breadcrumbs'][] = '';
?>
<div class="container-fluid">

    <div class="row mt-5 pt-4 pt-md-0 mt-xl-4 justify-content-center">
        <h3><?= $this->title ?>:</h3>
    </div>

    <!--  ТЕКУЩИЕ АКЦИИ -->
    <?php if (!empty($model)) { ?>
        <div class="row justify-content-center" >

            <div class="col-12 text-center my-3"><h5>Текущие акции:</h5></div>

            <?php foreach ($model as $value) { ?>
                <div class="col-12 col-xl-4 my-2">
                    <div class="shadow bg-white rounded wrapper-card mx-auto">
                        <div class="wrapper-card-top">
                            <div class="wrapper-card-img">

                                <?php if (!empty($value['imagePath'])) { ?>
                                    <img src="<?= Url::to('@web/uploads/promotions/' . $value['imagePath']) ?>" alt="картинка к акции"  
                                         style="width: 100%;">
                                     <?php } else { ?>
                                    <img src="<?= Url::to('@web/images/noImage.jpg') ?>" alt="картинка к акции"  
                                         style="width: 100%;">
                                     <?php } ?>

                            </div> 
                            <div class="wrapper-card-data text-right pr-2">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span><strong>с <?= $value['dateStart'] ?> по <?= $value['dateEnd'] ?></strong></span> 
                            </div>
                        </div>

                        <div class="text-center wrapper-card-content">
                            <h6 class="my-2" style="color: #79A62F;"><?= mb_strtoupper($value['title'], 'UTF-8') ?></h6>
                            <p class="my-1"><i><?= nl2br($value['short_text']) ?></i></p>
                        </div>
                    </div>  
                    <div class="text-center align-self-end pt-2">
                        <?php $options = ['style' => ['color' => '#888']]; ?>
                        <?= Html::a('подробнее <i class="fa fa-angle-double-right" aria-hidden="true"></i>', ['promotion', 'id' => $value['id']], $options) ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    <?php } ?>



    <!--  АРИХИВНЫЕ АКЦИИ -->
    <?php if (!empty($model_arx)) { ?>
        <div class="row justify-content-center" >
            <div class="col-12 text-center my-3"><h5>Архивные акции:</h5></div>


            <?php foreach ($model_arx as $value) { ?>
                <div class="col-12 col-xl-4 my-2">
                    <div class="shadow bg-white rounded wrapper-card mx-auto">
                        <div class="wrapper-card-top">
                            <div class="wrapper-card-img">

                                <?php if (!empty($value['imagePath'])) { ?>
                                    <img src="<?= Url::to('@web/uploads/promotions/' . $value['imagePath']) ?>" alt="картинка к акции"  
                                         style="width: 100%;">
                                     <?php } else { ?>
                                    <img src="<?= Url::to('@web/images/noImage.jpg') ?>" alt="картинка к акции"  
                                         style="width: 100%;">
                                     <?php } ?>

                            </div> 
                            <div class="wrapper-card-data text-right pr-2">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span><strong>с <?= $value['dateStart'] ?> по <?= $value['dateEnd'] ?></strong></span> 
                            </div>
                        </div>

                        <div class="text-center wrapper-card-content">
                            <h6 class="my-2" style="color: #79A62F;"><?= mb_strtoupper($value['title'], 'UTF-8') ?></h6>
                            <p class="my-1"><i><?= nl2br($value['short_text']) ?></i></p>
                        </div>
                    </div>  
                    <div class="text-center align-self-end pt-2">
                        <?php $options = ['style' => ['color' => '#888']]; ?>
                        <?= Html::a('подробнее <i class="fa fa-angle-double-right" aria-hidden="true"></i>', ['promotion', 'id' => $value['id']], $options) ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    <?php } ?>



</div>
