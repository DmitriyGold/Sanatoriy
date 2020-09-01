<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Dzhakuzi */

$this->title = 'Изменить: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dzhakuzis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dzhakuzi-update">

    <h3  class="my-3"><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
