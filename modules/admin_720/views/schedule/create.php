<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Schedule */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">

    <h3 class="mt-5"><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
