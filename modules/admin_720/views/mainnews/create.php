<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\mainnews */

$this->title = 'Создать объявление.';
$this->params['breadcrumbs'][] = ['label' => 'Mainnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainnews-create mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
