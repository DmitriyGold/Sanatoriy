<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\mainnews */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mainnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mainnews-view mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

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
            'short_text:ntext',
            'detailed_title1',
            'detailed_text1:ntext',
            'detailed_title2',
            'detailed_text2:ntext',
            'detailed_title3',
            'detailed_text3:ntext',
            'imagePath',
            'date',
            'hide' => [
                'format' => 'html', //  свой вывод
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
        ],
    ])
    ?>

</div>
