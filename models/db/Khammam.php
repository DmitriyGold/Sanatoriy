<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "khammam".
 *
 * @property int $id
 * @property string|null $description1
 * @property string|null $description2
 * @property string|null $description3
 * @property int|null $hide
 */
class Khammam extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'khammam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['hide'], 'integer'],
            [['description1', 'description2', 'description3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'description1' => 'описание 1',
            'description2' => 'описание 2',
            'description3' => 'описание 3',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
