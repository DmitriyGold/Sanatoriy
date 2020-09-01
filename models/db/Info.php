<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $image1
 * @property string|null $image2
 * @property int|null $type
 */
class Info extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['type'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['image1', 'image2'], 'string', 'max' => 125],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'description' => 'описание',
            'image1' => 'картинка 1',
            'image2' => 'картинка 2',
            'type' => 'тип',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
