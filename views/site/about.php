<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\Gallery1Widget;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="my-2 pt-2 container">

    <div class="row my-5 text-center">
        <div class="col">
            <h4>Дорогие друзья! Мы рады приветствовать Вас на официальном сайте санатория-профилактория «Курорт-парк «Союз» 
                МИД России»!</h4>
        </div>
    </div>  

</div>

<div  class="parallax1"></div>

<div class="mt-2 pt-2 container-fluid">


    <div class="container">
        <div class="row my-3">
            <div class="col">
                Санаторий расположен в 
                Московской области, Щелковский район, поселок Юность, в зоне континентального климата лесной и 
                лесостепной зоны Европейской части России, на берегу живописного озера. 
                Территория санатория представляет собой ухоженную парковую зону с красивым ландшафтом.
                Современный лечебный корпус и более чем 30 жилых корпусов образуют мини-городок,
                где есть все необходимое для комфортного и приятного оздоровления.
            </div>
        </div>


        <div class="row my-3">
            <div class="col">
                <p>Наш санаторий многопрофильный общетерапевтический, в нем есть все для профилактики и 
                    эффективного лечения:</p>
                <ul>
                    <li>болезней органов дыхания;</li>
                    <li>болезней костно-мышечной системы;</li>
                    <li>расстройства питания и нарушения обмена веществ; </li>
                    <li>болезней желудочно-кишечного тракта;</li>
                    <li>болезней нервной системы; </li>
                    <li>болезней системы кровообращения.</li>
                </ul>                                                                                         
            </div>        
        </div>

    </div>

    <div class="my-background-col">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4 align-self-center text-center text-lg-left my-2">
                    В летний период (с мая по сентябрь) погодные условия благоприятны для проведения всех 
                    основных видов климатолечения: общей аэротерапии (дозированная ходьба, прогулки, занятия ЛФК и лечебными 
                    спортивными играми на открытом воздухе), воздушных и солнечных ванн, купания в озере.  
                </div>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4  my-2',
                    'image' => '\images\about\1.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4 my-2',
                    'image' => '\images\about\2.jpg',
                ])
                ?>
            </div>
        </div>
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4  my-2',
                'image' => '\images\about\3.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\about\4.jpg',
            ])
            ?>
            <div class="col-12 col-lg-4 align-self-center text-center text-lg-right my-2">
                Зимний период (декабрь-март) характеризуется тренирующим воздействием биоклимата на организм человека.
                Основными видами климатолечения являются: дозированные пешеходные прогулки, спортивные игры. На территории 
                санатория-профилактория функционирует <strong><i>открытый подогреваемый бассейн</i></strong>. Есть конюшня и зоопарк.  
            </div>

        </div>
    </div>


    <div class="my-background-col">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4 align-self-center text-center text-lg-left my-2">
                    Отдохнуть, укрепить организм, зарядиться положительными эмоциями у нас можно в любое время года.  
                </div>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4  my-2',
                    'image' => '\images\about\5.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4 my-2',
                    'image' => '\images\about\6.jpg',
                ])
                ?>
            </div>
        </div>
    </div>


    <div class="container py-3">
        <div class="row my-3 text-center ">
            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4  my-2',
                'image' => '\images\about\7.jpg',
            ])
            ?>

            <?=
            Gallery1Widget::widget([
                'col' => 'col-12 col-lg-4 my-2',
                'image' => '\images\about\8.jpg',
            ])
            ?>
            <div class="col-12 col-lg-4 align-self-center text-center text-lg-right my-2">
                Отдых в нашем санатории-профилактории можно сочетать с оздоровительными спа-процедурами 
                для тела и лица. Подобранные СПА программы направлены на очищение организма и восстановление функций 
                органов и систем.
            </div>

        </div>
    </div>


    <div class="my-background-col">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4 align-self-center text-center text-lg-left my-2">
                    Мы высоко ценим своих гостей и партнеров и обеспечиваем индивидуальный подход и высокое качество санаторных услуг. 
                    Надеемся, что ознакомившись с сайтом, Вы выберете наш санаторий, сочетающий высокие стандарты обслуживания!
                </div>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4  my-2',
                    'image' => '\images\about\9.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-4 my-2',
                    'image' => '\images\about\10.jpg',
                ])
                ?>
            </div>
        </div>
    </div>

</div>




