<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet4 */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Cosmet4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmet4-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
