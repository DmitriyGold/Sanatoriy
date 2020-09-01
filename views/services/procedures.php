<?php
$this->title = 'Процедурный кабинет ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-3 pt-3 container">
    <h4 class="my-2">Процедурный кабинет</h4>

    <div class="row my-4">
        <p>Специально оборудованный кабинет для проведения
            различных лечебно-профилактических процедур. Все процедуры проводятся по назначению врачей. 
        </p>
        <p>В процедурном кабинете работают медецинские сестры с большим опытом работы, 
            выполняющие все манипуляции одноразовыми инструментами, строго соблюдая все правила асептики.
        </p>
    </div>

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-9 my-border-r">Наименование процедуры</div>
        <div class="col-2"><small>Стоимость 1 процедуры, руб</small></div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($procedures as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-9 my-border-r"><?= $value->name ?></div>
                    <div class="col-2"><?= $value->price1 ?></div>
                </div>

            <?php } else { ?>    
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-9 my-border-r"><?= $value->name ?></div>
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