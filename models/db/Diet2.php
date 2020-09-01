<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "diet2".
 *
 * @property int $id
 * @property int|null $number
 * @property string|null $name_type
 * @property string|null $description
 */
class Diet2 extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'diet2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['number'], 'integer'],
            [['name_type'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 510],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'name_type' => 'Name Type',
            'description' => 'описание',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
