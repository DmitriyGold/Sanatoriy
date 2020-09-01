<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Services */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
