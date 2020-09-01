<?php
$this->title = 'Массаж';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-3 pt-3 container">
    <h4 class="my-2">Массаж</h4>

    <div class="row my-4">
        <p>Трудно представить себе пребывание в санатории без лечебного массажа. 
            Массаж, при правильном выборе его приемов и методик оказывает 
            благотворное влияние на весь организм и на эмоциональную сферу человека.</p>
    </div>

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Время, минут</div>        
        <div class="col-2">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($massage as $value) { ?>
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

            <?php }
        }
    }
    ?>   

    <div class="block-3px mt-4"></div>
    
    <div class="row">
        <div class="col p-0 m-0 mb-5">* Информация на сайте не является публичной офертой.</div>
    </div>

</div>  


