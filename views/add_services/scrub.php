<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Скраб для тела';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-2">Скраб для тела</h4>

    <div class="row my-4">
        <p>Скраб - одно из самых популярных косметических средств, которое содержит в себе 
            твердые частицы для отшелушивания кожных частичек. Обычно с помощью скраба очищают 
            кожу лица, но не менее важно периодически скрабировать все тело.</p> 
        <p>Омертвевшие частицы кожного покрова отшелушиваются самостоятельно и легко смываются водой,
            однако для более глубокого очищения необходим скраб. За счет твердых микрочастиц
            это средство действует в нескольких направлениях:
        </p>

        <ul>
            <li>тщательно очищает кожу от различных загрязнений и кожного сала;</li>
            <li>выравнивает тон и поверхность кожи, освобождая ее от ороговевших клеток;
            </li>
            <li>создает условия для глубокого проникновения увлажняющих и питательных кремов.</li>
        </ul>

    </div>


    <?php foreach ($scrub as $value) { ?>
        <div class="row py-4">

            <?=
            Gallery1Widget::widget([
                'varH' => 210,
                'col' => 'col-12 col-lg-4 text-center text-lg-left my-2',
                'image' => $value->path,
            ])
            ?>

            <div class="col-12 col-lg-8 mt-3">
                <div class="row">
                    <h5><i><?= $value->name ?></i></h5>
                </div> 
                <div class="row"><?= $value->description1 ?></div> 
                <div class="row"><?= $value->description2 ?></div> 
                <?php if ($value->price1 <> null) { ?>
                    <div class="row">
                        <strong><?= $value->price1 ?> рублей</strong></div> 
                <?php } ?>

                <div class="row">
                    <div class="block-3px my-4"></div>
                </div>

            </div> 
        </div>  

    <?php } ?>
