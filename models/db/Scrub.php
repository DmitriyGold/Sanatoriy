<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "scrub".
 *
 * @property int $id
 * @property string $name
 * @property string $description1
 * @property string $description2
 * @property float|null $price1
 * @property int|null $hide
 */
class Scrub extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'scrub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'description1', 'description2'], 'required'],
            [['price1'], 'number'],
            [['hide'], 'integer'],
            [['name', 'description1', 'description2'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'description1' => 'описание 1',
            'description2' => 'описание 2',
            'price1' => 'прайс',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
