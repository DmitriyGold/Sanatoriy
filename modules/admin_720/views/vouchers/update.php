<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Vouchers */

$this->title = 'Изменить путевку: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vouchers-update  mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
