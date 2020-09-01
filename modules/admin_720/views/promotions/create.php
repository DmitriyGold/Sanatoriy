<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Promotions */

$this->title = 'Создать акцию';
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotions-create   mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
