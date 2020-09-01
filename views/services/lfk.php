<?php

use app\widgets\Gallery1Widget;

$this->title = 'Лечебная физкультура';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-5 container">
    <h3 class="my-3 my-md-2">Лечебная физкультура</h3>
</div>

<div class="mt-2 pt-2 container">

    <div class="row my-4">
        <div class="col">
            В основе положительного эффекта лечебной физкультуры лежит процесс дозированной тренировки, 
            ведущей к улучшению функциональных возможностей всего организма и отдельных его систем и органов.<br><br>
            ЛФК призвана восстанавливать нарушенное здоровье, ликвидировать сформировавшуюся неполноценность
            физического развития. ЛФК – это универсальный метод с широким спектром действия.
            Дозированная физическая нагрузка являются основным стимулятором роста, развития и формирования организма, 
            способствует повышению общей работоспособности, задерживает процессы старения.
        </div>
    </div>

    <div class="row my-4">
        <div class="col">
            Восстановить силы, сохранить молодость и просто отдохнуть с пользой, 
            вам помогут специалисты отделения лечебной физкультуры.
        </div>
    </div>
</div>

<div class="mt-3 pt-3 container">    
    <h5>Наш санаторий может предложить Вам:</h5>     

    <div class="row my-1">
        <ul>
            <li>индивидуальные и групповые занятия лечебной физкультурой</li>
            <li>механнотерапию на аппаратах при заболеваниях различных органов;</li>
            <li>гидрокинезетерапию;</li>
            <li>бассейн;</li>            
            <li>лечебную физкультуру с использованием тренажеров;</li>
            <li>и многое другое</li>            
        </ul>
    </div>
</div>    

<div class="container-fluid my-background-col py-3">
    <div class="row my-1 text-center">

        <?=
        Gallery1Widget::widget([
            'varH' => 210,
            'col' => 'col-12 col-xl-3 col-lg-6 my-2',
            'image' => '\images\lfk\IMG_20200609_155739.jpg',
        ])
        ?>
        <?=
        Gallery1Widget::widget([
            'varH' => 210,
            'col' => 'col-12 col-xl-3 col-lg-6 my-2',
            'image' => '\images\lfk\IMG_20200609_165009.jpg',
        ])
        ?>
        <?=
        Gallery1Widget::widget([
            'varH' => 210,
            'col' => 'col-12 col-xl-3 col-lg-6 my-2',
            'image' => '\images\lfk\IMG_20200609_155117_1.jpg',
        ])
        ?>
        <?=
        Gallery1Widget::widget([
            'varH' => 210,
            'col' => 'col-12 col-xl-3 col-lg-6 my-2',
            'image' => '\images\lfk\IMG_20200609_165320.jpg',
        ])
        ?>
    </div>
</div>



<div class="container mt-4">
    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Время одного занятия, минут</div>        
        <div class="col-2">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($lfk as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
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
