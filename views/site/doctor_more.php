<?php

use yii\helpers\Url;

$this->title = 'Подробнее';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="mt-5 pt-2 container">

    <div class="row">

        <div class="col my-2">
            <div class="py-3 text-center">

                <?php
                if (empty($model->image))
                    $model->image = 'NoPicAvailable.jpg';
                ?>

                <img class="block-doctor-img" src="<?= Url::to('@web/uploads/doctors/' . $model->image); ?>" alt="фото сотрудника">
            </div>
            <h6 class="my-3 text-center" style="color: #79A62F;"><?= mb_strtoupper($model->fio, 'UTF-8'); ?></h6>
            <div class="p-2 text-center" style="height: 70px"><?= $model->description1 ?></div>

            <div class="container">
                <div class="block-3px my-4"></div>
            </div>
            <div class="p-2 text-center"><?= $model->description2 ?></div>
            <div class="p-2 text-center"><i><?= $model->schedule ?></i></div>            

        </div>

    </div>

</div>