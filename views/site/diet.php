<?php

use yii\helpers\Url;

$this->title = 'Диетическое питание';
$this->params['breadcrumbs'][] = '';
?>
<div class="container-fluid">


    <div class="row text-center mt-5 mb-2"> 
        <div class="col">
            <p><strong>Стандартные диеты</strong> (ОВД, НКД,ЩД,) 
                включают в себя диеты номерной системы по Певзнеру, имеющие различные характеристики пищевых продуктов, 
                формы их приготовления и назначаемые лечащим врачом в зависимости от заболевания, его стадии, степени тяжести
                патологического процесса, с учетом осложнений со стороны различных органов и систем

                Их сопоставление отражено в  письме МЗ СР РФ от 11 июля 2005 г. N 3237-ВС , где приводится таблица соответствия 
                номенклатуры диет и  диет номерной системы (в таблице 1).</p>
        </div>
    </div>

    <div class="container">
        <div class="row my-2"> 
            <div class="col">
                <p>Таблица 1. Номенклатура диет (система стандартных диет)</p>
            </div>
        </div>

        <div class="row block-tabl-1 py-1 text-center">
            <div class="col-1 my-border-r">№ п/п</div>
            <div class="col-5 my-border-r">Варианты стандартных диет</div>
            <div class="col-2 my-border-r">Обозначения стандартных диет в документации пищеблока</div>        
            <div class="col-4">диеты номерной системы </div>
        </div>    

        <?php $i = 0; ?>
        <?php foreach ($model_1 as $value) { ?>
            <?php
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $value->id ?></div>
                    <div class="col-5 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->designation ?></div>                
                    <div class="col-4"><?= $value->number ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $value->id ?></div>
                    <div class="col-5 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->designation ?></div>                
                    <div class="col-4"><?= $value->number ?></div>
                </div> 
                <?php
            }
        }
        ?>   

    </div>

    <div class="row text-center mt-5 mb-2"> 
        <div class="col">
            <p><strong>Ниже приводятся рекомендуемые виды кулинарной обработки и запрещенные продукты и блюда 
                для отдельных диет в соответствии с "Характеристиками №диет ", утвержденными Минздравом</strong></p>
        </div>
    </div>

    <div class="container">
        <div class="row block-tabl-1 py-1 text-center">
            <div class="col-1 my-border-r">Номер диеты</div>
            <div class="col-4 my-border-r">Виды кулинарной обработки</div>
            <div class="col-7 my-border-r">Запрещаемые продукты, блюда</div>        

        </div>    

        <?php $i = 0; ?>
        <?php foreach ($model_2 as $value) { ?>
            <?php
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $value->number ?></div>
                    <div class="col-4 my-border-r"><?= $value->name_type ?></div>
                    <div class="col-7 my-border-r"><?= $value->description ?></div>                
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $value->number ?></div>
                    <div class="col-4 my-border-r"><?= $value->name_type ?></div>
                    <div class="col-7 my-border-r"><?= $value->description ?></div>                
                </div> 
                <?php
            }
        }
        ?>   

    </div>
</div>

<div class="block-3px my-5 container"></div>

<div class="row my-5 justify-content-center">
    <a class="" href="<?= Url::to(['/files/0207.pdf']); ?>" target="target-blank"><strong>7 ми дневное меню</strong></a> 
</div>

<div class="block-3px my-5 container"></div>

<div class="container">
    <div class="row my-5 justify-content-center">
        <p><strong>Столы:</strong></p>
    </div>


    <div class="row  row-cols-md-2 row-cols-1 text-center">
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/01.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/02.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/03.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/04.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/05.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/06.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/07.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/08.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
        <div class="col my-3" ><img src="<?= Url::to(['/files/diet/09.png']) ?>" style="max-width: 94%; height: auto;" alt="диетические столы"></div>
    </div>

</div>

<div class="block-3px my-5"></div>


</div>