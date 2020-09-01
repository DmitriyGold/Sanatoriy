<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Режим и график работы.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index mt-5">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Новая запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'title',
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            [
                'attribute' => 'sort',
                'label' => 'сортировка',
            ],
            [
                'attribute' => 'hide',
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
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
    ]);
    ?>


</div>

<p class="py-3">
    <?= Html::a('Вернуться в основной экран административной части', ['/admin_720'], ['class' => 'btn btn-success']) ?>
</p>

