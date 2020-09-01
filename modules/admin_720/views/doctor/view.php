<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Doctor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doctor-view  mt-3">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('загрузить фото', ['set-image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
         <?= Html::a('удалить фото', ['del-image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>        
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
           // 'id',
            'fio',
            'картинка' => [
                'format' => 'html', //  вывод своей картинки
                'label' => 'картинка',
                'value' => function($data) {
                    return Html::img($data->getImage(), ['width' => 300]);
                }
            ],
            'description1',
            'description2',
            'schedule',
            'sort',
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
