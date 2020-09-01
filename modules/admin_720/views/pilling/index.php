<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дерматологический пиллинг';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pilling-index">

    <h3  class="my-3"><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Создать новую запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'price1',
            [
                'attribute' => 'hide',
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
           // 'price2',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Действия',
                'headerOptions' => ['style' => 'width: 120px; color: #007bff'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-eye" aria-hidden="true"></i></span>', $url);
                    },
                    'update' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>', $url);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-trash-o" aria-hidden="true"></i></span>', $url, ['title' => 'Удалить',
                                    'aria-label' => 'Удалить',
                                    'data-pjax' => '0',
                                    'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'data-method' => 'post'
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
