<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "consultations".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property float|null $price2
 */
class Consultations extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'consultations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['price1', 'price2'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'price1' => 'прайс первичный',
            'price2' => 'прайс повторный',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
