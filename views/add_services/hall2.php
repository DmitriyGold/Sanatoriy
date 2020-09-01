<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Танцевальный зал';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-4">Танцевальный зал</h4>

    <div class="row my-4">
        <h6>Просторный зал для групповых программ с широким выбором необходимого оборудования. 
        </h6> 
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4  my-2',
                'image' => '\images\add_service\hall2\IMG_20200609_165227.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\add_service\hall2\IMG_20200609_165320.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\add_service\hall2\IMG_20200609_165500.jpg',
            ])
            ?>
        </div>
    </div>

    <div class="block-3px my-4"></div>