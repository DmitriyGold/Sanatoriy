<?php

use yii\helpers\Url;

$this->title = 'Все новости';
$this->params['breadcrumbs'][] = '';
?>
<div class="container">

    <div class="row mt-5 pt-4 pt-md-0 mt-xl-4 justify-content-center">
        <h3>Новости:</h3>
    </div>

    <div class="row justify-content-center" >

        <?php foreach ($model as $value) { ?>
            <div class="row my-3 shadow bg-white rounded block-news">
                <div class="col-12 py-2 text-right border-bottom">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?= $value['date'] ?>
                </div>
                <div class="col-12 col-lg-9 mt-4  text-center">
                    <div class="col text-center ">

                        <div class="col pt-3">
                            <h6 style="color: #79A62F;"><?= mb_strtoupper($value['title'], 'UTF-8') ?></h6>
                        </div>
                        <div class="col pt-2">
                            <p><strong><i><?= nl2br($value['short_text']) ?></i></strong></p>
                        </div>
                        <div class="col pt-2 pb-xl-3">
                            <p><?= nl2br($value['detailed_text']) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 align-self-center text-center">
                    <img src="<?= Url::to('@web/uploads/news/' . $value['imagePath']) ?>" alt="картинка к новости"  
                         style="max-width: 250px; border: 4px solid #D2E8F2;">
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</div>

