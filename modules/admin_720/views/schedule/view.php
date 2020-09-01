<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Schedule */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="schedule-view mt-5">

    <h3 class="mb-4"><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>                
    </p>

    <p>  <?= Html::a('к списку', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?></p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            'sort',
            'hide' => [
                'format' => 'html', // свой вывод
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
        ],
    ])
    ?>

</div>
