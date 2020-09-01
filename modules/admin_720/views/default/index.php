<?php

use yii\helpers\Url;

$this->title = 'АДМИНИСТРАТИВНАЯ ЧАСТЬ';
$this->params['breadcrumbs'][] = '';
?>
<div class="container mt-5">
    <div class="row">

        <div class="col">
            <h1><?= $this->title ?></h1>
        </div>

    </div>
</div>

<div  class="alert alert-success container" role="alert">
    <h6>Все загружаемые фото и картинки должны быть оптимизированы для сайта (уменьшен размер файла)!</h6>
    <p>Например можно воспользоваться сервисом сжатия онлайн:</p>
    <a href="<?= Url::to('https://www.iloveimg.com/ru/compress-image') ?>"  target="target_blank">Сервис сжатия >></a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/services/index') ?>">Главный экран.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/schedule/index') ?>">Режим и график работы.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/mainnews/index') ?>">Главное объявление.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/news/index') ?>">Новости.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/promotions/index') ?>">Акции и предложения.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/vouchers/index') ?>">Путевки.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/doctor/index') ?>">Сотрудники.</a>
</div>

<hr>

<div class="container">
    <strong><h5>Медицинские услуги:</h5></strong>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/consultations/index') ?>">Консультации специалистов.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/diagnostics/index') ?>">Диагностика.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/procedures/index') ?>">Процедурный кабинет.</a>
</div>


<div class="container my-2">
    <a href = "<?= Url::to('admin_720/physiotherapy/index') ?>">Физиотерапия.</a>
</div>



<div class="container my-2">
    <a href = "<?= Url::to('admin_720/hydrotherapy/index') ?>">Водолечение.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/mud/index') ?>">Грязелечение.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/massage/index') ?>">Лечебный массаж.</a>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/lfk/index') ?>">Лечебная физкультура.</a>
</div>

<hr>
<div class="container">
    <strong><p>Дерматология. Косметология:</p></strong>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/pilling/index') ?>">Дерматологический пиллинг.</a> <br>
    <a href = "<?= Url::to('admin_720/cosmetology/index') ?>">Проведение эпиляции.</a> <br>
    <a href = "<?= Url::to('admin_720/leather/index') ?>">Дарсонвализация кожи.</a> <br>
    <a href = "<?= Url::to('admin_720/cosmet4/index') ?>">Массаж лица.</a> <br>
    <a href = "<?= Url::to('admin_720/cosmet5/index') ?>">Ультразвуковое лечение кожи.</a> <br>
    <a href = "<?= Url::to('admin_720/cosmet6/index') ?>">Криомассаж.</a>
</div>

<hr>

<div class="container">
    <strong><h5>Wellness & SPA::</h5></strong>
</div>

<div class="container my-2">
    <a href = "<?= Url::to('admin_720/scrub/index') ?>">Скраб для тела.</a> <br>
    <a href = "<?= Url::to('admin_720/sauna/index') ?>">Сауны.</a> <br>
    <a href = "<?= Url::to('admin_720/khammam/index') ?>">Хамам.</a> <br>
    <a href = "<?= Url::to('admin_720/dzhakuzi/index') ?>">Джакузи.</a> <br>
   
    <!--
    <a href = "<?= Url::to('admin_720/spa/index') ?>">СПА процедуры.</a> <br>
    <a href = "<?= Url::to('admin_720/hall1/index') ?>">Тренажерный зал.</a> <br>
    <a href = "<?= Url::to('admin_720/hall2/index') ?>">Танцевальный зал.</a> <br>
    <a href = "<?= Url::to('admin_720/solarium/index') ?>">Солярий.</a> <br>
    <a href = "<?= Url::to('admin_720/massage2/index') ?>">Аюрведа.</a> 
    -->
    
</div>