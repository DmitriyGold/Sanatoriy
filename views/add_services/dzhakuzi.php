<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Джакузи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-2 container">
    <h4 class="my-4">Джакузи</h4>

    <div class="row my-4">
        <p>При гидромассаже струи воды, смешанной с пузырьками воздуха, 
            оказывают интенсивное давление на определенные участки тела.
            Вода с силой вьбрасывается из специальных форсунок, расположенных
            в разных зонах ванны. Направленность и интенсивность воздушно-водных 
            потоков можно регулировать.</p> 
    </div>


    <?php foreach ($dzhakuzi as $value) { ?>
        <div class="row py-4">

                      <?=
            Gallery1Widget::widget([
                'varH' => 210,
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
        <div>
            <p>Гидромассажные ванны могут стать настоящим спасением при заболеваниях 
                нервной системы, опорно-двигательного аппарата, сильной усталости или
                стрессе. Они прекрасно тонизируют кожу, расслабляют, успокаивают.
            </p>           
        </div>
    </div>

