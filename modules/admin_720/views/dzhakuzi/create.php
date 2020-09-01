<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Dzhakuzi */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Dzhakuzis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dzhakuzi-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
