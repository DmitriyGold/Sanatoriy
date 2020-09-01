<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "mud1".
 *
 * @property int $id
 * @property string $name
 * @property int|null $time
 * @property int|null $number
 * @property float|null $price1
 * @property int|null $hide
 */
class Mud1 extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'mud1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['time', 'number', 'hide'], 'integer'],
            [['price1'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'time' => 'время',
            'number' => 'Кол-во полей 20х20',
            'price1' => 'прайс',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
