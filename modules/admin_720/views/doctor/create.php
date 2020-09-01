<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Doctor */

$this->title = 'Новая запись';
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-create mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
