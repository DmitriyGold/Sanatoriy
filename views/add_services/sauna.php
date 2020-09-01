<?php

use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'Сауны';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-4 container">
    <h4 class="my-3">Сауны</h4>

    <div class="row my-4">
        <p>Польза сауны заключается в том, что под воздействием высокой температуры парной
            вредные вещества удаляются из организма благодаря обильному потоотделению.</p> 
        <p>За одно посещение парной человек может терять от половины до полутора литров пота. 
            Кроме того, польза сауны заключается в благоприятном воздействии на вегетативную 
            и центральную нервную систему человека. Нормализация процессов дыхания и кровообращения приводит к тому, 
            что из организма выводятся токсины.</p>
    </div>


    <?php foreach ($sauna as $value) { ?>
        <div class="row py-4">

            <?=
            Gallery1Widget::widget([
                'varH' => 210,
                'col' => 'col-12 col-lg-3 text-center text-lg-left my-2',
                'image' => $value->path,
            ])
            ?>

            <div class="col-12 col-lg-9 mt-3">
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

    <div class="block-3px my-4"></div>

    <div class="row mt-4">
        <h4>ПОЛЬЗА КЕДРОВОЙ БОЧКИ</h4>
        <div>
            <p>Кедровая бочка несет безусловную пользу для здоровья человеке, 
                благотворно воздействуя на имунунную, лимфатическую, нервную, кровеносную системы, 
                но при неправильном использовании способна нанести и вред.</p>
            <p>Кедр, из которого изготовлена бочка, обладает свойством подавления болезнетворных бактерий,
                благодаря высокому содержанию фитонцидов 
                Процедура смягчает и очищает кожу, за счет натуральных кислот производит эффект мягкого 
                пилинга, не причиняя эпидермису вреда.</p>
            <p>Пар позволяет полезный веществам проникнуть внутрь организма Он раскрывает и очищает поры, 
                улучлается кровоснабжение 
                и циркуляция лимфы. Организм отдаст лишнюю жидкость, за счет этого проходят отеки. 
                Пот выводит токсины и подкожные загрязнения.</p>
        </div>
    </div>

    <div class="block-3px my-4"></div>

    <div class="row">
        <h4>КАК ВЛИЯЕТ ИК-САУНА НА ОРГАНИЗМ</h4>
        <div>
            <p>Тем, кто не любит жаркие бани, точно придется по душе инфракрасная сауна, 
                так как температура воздуха в ней не повышается более 60 градусов. Но даже 
                этого достаточю для того, чтобы лучи проникли глубоко внутрь тела и прогревали 
                организм лучше, чем в обычное бане.  После сауны с ИК-излучением человек испытывает прилив сил,
                а после обычной бани лишь сонливость и усталость.</p>
            <p>Действие инфракрасной сауны направлено на общее улучшение состояния организча и устранение 
                некоторых косметических проблем.</p>
        </div>
    </div>

    <div class="block-3px my-4"></div>

    <div class="row">
        <h4>ПОЛЬЗА ФИНСКОЙ САУНЫ</h4>
        <div>
            <p>10 минут в сауне эквивалентны по нагрузке быстрой ходьбе или бегу трусцой. 
                Легкие работают интенсивнее, сердце усиленно перегоняет кровь,
                что улучшает кровообрашение во всем организме.	Посещение сауны полезно причастых простудных заболеваниях,
                так как оказывает серьёзное воздействие на дыхательную систему.</p>

        </div>
    </div>