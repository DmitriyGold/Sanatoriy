<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Vouchers */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vouchers-view mt-3">

    <h3>Путевка: '<?= Html::encode($this->title) ?>'</h3>

    <p>
        <?= Html::a('изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('загрузить картинку', ['set-image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>        
        <?= Html::a('загрузить документ 1', ['set-files', 'id' => $model->id, 'i' => 1], ['class' => 'btn btn-primary']) ?>        
        <?= Html::a('загрузить документ 2', ['set-files', 'id' => $model->id, 'i' => 2], ['class' => 'btn btn-primary']) ?>        
        <?= Html::a('загрузить документ 3', ['set-files', 'id' => $model->id, 'i' => 3], ['class' => 'btn btn-primary']) ?>        
        <?= Html::a('удалить картинку и документы', ['del-files', 'id' => $model->id, 'i' => 3], ['class' => 'btn btn-primary']) ?>        
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
            // 'id',
            'title',
            'short_text:ntext',
            'subtitle_1',
            'detailed_text1:ntext',
            'subtitle_2',
            'detailed_text2:ntext',
            'subtitle_3',
            'detailed_text3:ntext',
            'картинка' => [
                'format' => 'html', //  вывод своей картинки
                'label' => 'картинка',
                'value' => function($data) {
                    return Html::img($data->getImage(), ['width' => 300]);
                }
            ],
            //   'imagePath',
            //  'file1Path',
            'file1Name',
            // 'file2Path',
            'file2Name',
            //   'file3Path',
            'file3Name',
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
