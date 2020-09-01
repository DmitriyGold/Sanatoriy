<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Хамам';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-2">Хамам</h4>

    <div class="row my-4">
        <p>Турецкий хамам - это не только неотъемлемая часть культуры Турции, но и незабываемые 
            ощущения,огромное удовольствие, прекрасный релакс, восстановление всех физических и 
            моральных сил. В турецкой парной благодаря повышенной влажности и невысокой-температуре 
            кожа мягко очищается, подтягивается и приобретает упругость. Нормализуется салоотделение. 
            Волосы и кожа не пересушиваются, а хорошо увлажняются.</p> 
    </div>


    <?php foreach ($khammam as $value) { ?>
        <div class="row py-4">

            <?=
            Gallery1Widget::widget([
                'varH' => 180,
                'col' => 'col-12 col-lg-4 text-center text-lg-left my-2',
                'image' => $value->path,
            ])
            ?>

            <div class="col-12 col-lg-8 mt-3">
                <div class="row"><strong><?= $value->description1 ?></strong></div> 
                <div class="row"><strong><?= $value->description2 ?></strong></div> 
                <div class="row"><strong><?= $value->description3 ?></strong></div>

            </div> 
        </div>  

    <?php } ?>

    <div class="block-3px my-4"></div>

    <div class="row mt-4">
        <h4>Особенности:</h4>
        <div>
            <p>Можно выделить несколько особенностей настоящего турецкого хамама: 
                Температура от 35 до 50 градусов. Влажность воздуха 90-100%.
                Пар активизирует обменные процессы и помогает организму бороться с 
                застойными явлениями.
            </p>           
        </div>
    </div>


