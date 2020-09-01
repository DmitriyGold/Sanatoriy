<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Аюрведа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-4">Аюрведа</h4>

    <div class="row my-4">
        <h6>
        </h6> 
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'varH' => 250,
                'col' => 'col-6 col-lg-3  my-2',
                'image' => '\images\add_service\massage2\IMG_20200609_161750.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'varH' => 250,
                'col' => 'col-6 col-lg-3 my-2',
                'image' => '\images\add_service\massage2\IMG_20200609_164229_1.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'varH' => 250,
                'col' => 'col-6 col-lg-3 my-2',
                'image' => '\images\add_service\massage2\IMG_20200609_164258.jpg',
            ])
            ?>
            
                        <?=
            Gallery1Widget::widget([
                'varH' => 250,
                'col' => 'col-6 col-lg-3 my-2',
                'image' => '\images\add_service\massage2\IMG_20200609_164331.jpg',
            ])
            ?>
        </div>
    </div>

    <div class="block-3px my-4"></div>