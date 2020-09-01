<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\mainnews */

$this->title = 'Изменить объявление: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mainnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mainnews-update mt-3">

    <h3  class="my-3"><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
