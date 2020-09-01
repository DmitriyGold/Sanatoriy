<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Massage */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Massages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massage-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
