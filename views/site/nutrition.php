<?php

use yii\helpers\Url;

$this->title = 'Питание';
$this->params['breadcrumbs'][] = '';
?>
<div class="container-fluid">

    <div class="row">
        <div class="col"><img src="<?= Url::to(['/images/nutrition/food_top.jpg']) ?>"  style="max-width: 100%;" alt="шведский стол">"</div>

    </div>

    <div class="row text-center my-2"> 
        <div class="col-xl-2 d-none d-xl-block">
            <div class="block-3px my-4"></div>
        </div>
        <div class="col-xl-8  col-12">
            <h4 class="mt-4">Питание гостей в санатории-профилактории «Курорт-парк «Союз» МИД России»</h4>

            <p class="text-left">
                В санатории питание по системе <strong>«Шведский стол»</strong> с ассортиментом первых и вторых блюд.<br><br>

                В меню представлен широкий ассортимент мясных и рыбных закусок, горячих и холодных блюд, 
                соленьев, салатов, гарниров, 
                свежих овощей и фруктов, домашней выпечки и напитков.<br>

                Наши повара знают все о здоровом питании и готовы предложить Вам 
                <strong><a href="<?= Url::to(['/site/diet']); ?>">диетическое питание</a></strong>  по назначению врача. <br><br>


                Часы работы шведского стола:<br>

                Завтрак: 9:00–10:30<br>
                Обед:    13:30–15:30<br>
                Ужин:    18:30–20:00<br><br>

                <strong><a href="http://souz-mid.ru/restoran-soyuz.html" target="blank">Ресторан "Союз"</a></strong><br>
                <strong><a href="http://souz-mid.ru/restoran-prichal.html" target="blank">Ресторан "Причал"</a></strong><br>
                <strong><a href="http://souz-mid.ru/shashlyichnyie-%28shatryi%29.html" target="blank">Шашлычные(шатры)</a></strong>

            </p>

        </div>
        <div class="col-xl-2 d-none d-xl-block align-self-end">
            <div class="block-3px my-4"></div>
        </div>
    </div>

</div>