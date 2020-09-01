<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\News */

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create  mt-3">

    <h3><?= Html::encode($this->title) ?></h3>
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
