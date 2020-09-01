<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $sort
 * @property int|null $hide
 */
class Schedule extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['text1', 'text2', 'text3'], 'string'],
            [['sort', 'hide'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'text1' => 'График работы',
            'text2' => 'Выходные дни',
            'text3' => 'Время обеда',
            'sort' => 'Поле сортировки (1-начало,..., 5-в конец)',
            'hide' => 'Скрыть',
        ];
    }

    public function getHide() {
        return ($this->hide) ? 'да' : '';
    }

}
