<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Khammam */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Khammams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khammam-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
