<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Procedures */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Procedures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedures-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
