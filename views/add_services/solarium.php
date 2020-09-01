<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Солярий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-4">Солярий</h4>

    <div class="row my-4">
        <h6>Модель удачно сочетает новейшие технические достижения и неизменное превосходное качество
            соляриев Luxura.
            Наш солярий имеет ультрасовременные технические возможности.
        </h6> 
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'varH' => 270,
                'col' => 'col-12 col-lg-4  my-2',
                'image' => '\images\add_service\solarium\IMG_20200609_164555.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'varH' => 270,
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\add_service\solarium\IMG_20200609_164627.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'varH' => 270,
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\add_service\solarium\IMG_20200609_164711.jpg',
            ])
            ?>
        </div>
    </div>

    <div class="block-3px my-4"></div>