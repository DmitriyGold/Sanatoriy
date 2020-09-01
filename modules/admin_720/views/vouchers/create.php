<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Vouchers */

$this->title = 'Создать путевку';
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vouchers-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
