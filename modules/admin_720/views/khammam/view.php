<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Khammam */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Khammams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="khammam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
            'description1',
            'description2',
            'description3',
            'hide' => [
                'format' => 'html', //  свой вывод
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
            'path',
        ],
    ])
    ?>

</div>
