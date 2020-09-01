<?php

use yii\helpers\Url;
use app\widgets\InformWidget;

$this->title = 'Водолечение';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-3 pt-3 container">
    <h4 class="my-2">Водолечение</h4>

    <div class="row mt-4">
        <p>Физиологическое действие водолечения основано на температурном, механическом и химическом раздражении 
            рецепторов кожи минеральной и обычной водой.</p>
    </div>


    <div class="row">
        <div class="col">
            <div class="accordion my-4" id="accordionExample">
                <div class="card">

                    <?php $i = 1 ?>
                    <?php foreach ($info as $value) { ?>
                        <?=
                        InformWidget::widget(['id' => $i,
                            'name' => $value->name,
                            'description' => $value->description,
                            'image1' => $value->image1,
                            'image2' => $value->image2,
                        ]);
                        $i++;

                        ?>        
                    <?php } ?> 
                </div>
            </div> 
        </div>
    </div>

    <div class="row  block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Время, минут</div>        
        <div class="col-2"><small>Стоимость 1 процедуры, руб</small></div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($hydrotherapy as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>

                <div class="row block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->time ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?>  
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->time ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px mt-4"></div>
    
    <div class="row">
        <div class="col p-0 m-0 mb-5">* Информация на сайте не является публичной офертой.</div>
    </div>

</div> 
