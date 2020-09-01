<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Leather */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Leathers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leather-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
