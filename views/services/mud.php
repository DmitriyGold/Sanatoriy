<?php
$this->title = 'Грязелечение';
$this->params['breadcrumbs'][] = $this->title;

use app\widgets\Gallery1Widget;
?>
<div class="mt-3 pt-3 container">
    <h3 class="my-2">Грязелечение</h3>

    <div class="row my-4">
        <div class="col-12 col-lg-6 my-2">
            <p>Источник <i>тамбуканской грязи</i> - <strong>озеро Тамбукан</strong>, которое находится 
                недалеко от города Пятигорска. Сложно определить его 
                точный возраст, но насчитывается уже несколько тысячелетий.
                Образовалась в результате разложения и брожения микроорганизмов
                флоры и фауны.</p>
            <p>На его дне находится около полутора миллионов тонн лечебной грязи, 
                которая используется в медицине с 1886 года.<br>
                Лечебная грязь Тамбуканского озера представляет собой пластическую густую массу
                чёрного цвета. Пелоиды тамбуканских грязей широко применяются в разных областях медицины
                и косметологии.</p>
        </div>

        <?=
        Gallery1Widget::widget([
            'col' => 'col-12 col-lg-6 my-2',
            'image' => '\images\mud\lake.jpg',
        ])
        ?>
    </div>        
</div>  

<div class="container-fluid my-background-col py-3">
    <div class="container">
        <h5>На сегодняшний день наиболее значимыми являются свойства:</h5>

        <div class="row">

            <?=
            Gallery1Widget::widget([
                 'varH' => 300,
                'col' => 'col-12 col-lg-6 my-2 align-self-center',
                'image' => '\images\mud\1.jpg',
            ])
            ?>

            <div class="col-12 col-lg-6 my-2">
                <ul>
                    <li>антисептические свойства;</li>
                    <li>активация регенеративных процессов;</li>
                    <li>противоспалительное действие;</li>
                    <li>стимуляция микроциркуляции крови в клетках;</li>
                    <li>улучшение обменных процессов в организме;</li>
                    <li>имуномодулирующее действие;</li>
                    <li>выведение из организма шлаков и токсинов;</li>
                    <li>антиоксидантные свойства;</li>
                    <li>глубокое очищение крови;</li>
                    <li>отбеливающий эффект;</li>
                    <li>себорегуляция;</li>
                    <li>тонизирование;</li>
                    <li>выравнивание тона кожи;</li>
                    <li>повышение тургора;</li>
                    <li>корректировка признаков старения и увядания.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <p>Таким образом, эта грязь оказывает положительное воздействие 
            не только на кожу, но и на весь организм в целом. <br>
            По оценке экспертов, эффект от лечения тамбуканской грязью не только не уступает
            грязям Мертвого моря, но и по некоторым параметрам даже превосходит.</p>
    </div>

    <div class="row mt-3">
        <h5>Процедуры аппликацией с грязью, которые оказываются в нашем санатории:</h5>
    </div>  

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>
        <div class="col-2 my-border-r">Кол-во полей 20х20</div>        
        <div class="col-2">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($mud as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>

                <div class="row block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->number ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div>
            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>
                    <div class="col-2 my-border-r"><?= $value->number ?></div>                
                    <div class="col-2"><?= $value->price1 ?></div>
                </div>  
                <?php
            }
        }
    }
    ?>   

    <div><p><i>1 процедура, 1 зона 40 минут.</i></p></div>

    <div class="block-3px mt-4"></div>

    <div class="row">
        <div class="col p-0 m-0 mb-5">* Информация на сайте не является публичной офертой.</div>
    </div>

</div>  
