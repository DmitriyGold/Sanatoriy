<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Тренажерный зал';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-4">Тренажерный зал</h4>

    <div class="row my-4">
        <h6>Хотите быть в отличной форме? Скорректировать фигуру и избавиться от лишнего веса? 
            В нашем тренажерном зале отлично помогут 
            Вам справиться с этими задачами...</h6> 
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3  my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164824.jpg',
            ])
            ?>
            
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3  my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164843.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3 my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164855.jpg',
            ])
            ?>
            
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3 my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164908.jpg',
            ])
            ?>
        </div>
    </div>
    
    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3  my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164926.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3  my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_164944.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3 my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_165043.jpg',
            ])
            ?>
            
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-3 my-2',
                'image' => '\images\add_service\hall1\IMG_20200609_165056.jpg',
            ])
            ?>
        </div>
    </div>
    

    <div class="block-3px my-4"></div>


