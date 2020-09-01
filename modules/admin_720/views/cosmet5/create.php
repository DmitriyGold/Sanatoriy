<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Cosmet5 */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Cosmet5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cosmet5-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
