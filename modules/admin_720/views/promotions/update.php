<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Promotions */

$this->title = 'Изменить акцию: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="promotions-update  mt-3">

    <h3  class="my-3"><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
