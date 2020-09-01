<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Services */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    
        <p>  <?= Html::a('к списку', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?></p>  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
           // 'sitePage',
            'title',
            'description',
            //'imagePath',
            'subtitle_1',
            'detailed_text1:ntext',
            'subtitle_2',
            'detailed_text2:ntext',
            'subtitle_3',
            'detailed_text3:ntext',
           // 'sort',
            'hide' => [
                'format' => 'html', //  свой вывод
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
        ],
    ]) ?>

</div>
