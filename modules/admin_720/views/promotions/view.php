<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Promotions */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="promotions-view  mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('загрузить картинку', ['set-image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'detailed_text:ntext',
            ///'imagePath',
            'картинка' => [
                'format' => 'html', //  вывод своей картинки
                'label' => 'картинка',
                'value' => function($data) {
                    return Html::img($data->getImage(), ['width' => 300]);
                }
            ],
            'dateStart',
            'dateEnd',
            'hide' => [
                'format' => 'html', //  свой вывод
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
            'archive' => [
                'format' => 'html', //  свой вывод
                'label' => 'архив',
                'value' => function($data) {
                    return $data->getArchive();
                }
            ],
        ],
    ])
    ?>

</div>
