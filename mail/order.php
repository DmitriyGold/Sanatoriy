<?php ?>

<h4>Сообщение с сайта.</h4>

<h5>Заказать звонок</h5>

<<div class="row">
    <div class="col">
        <p>Имя: <?= $model['name']?></p>
    </div>

    
    <?php if (isset($model['email'])) { ?>
    <div class="col">
        <p>Email: <?= $model['email']?></p>
    </div>
    <?php } ?>

    <div class="col">
        <p>Телефон: <?= $model['phone']?></p>
    </div>

</div>
<div class="row">
    <div class="col">
        <p>Сообщение: <?= $model['body']?></p>
    </div>

    
</div>