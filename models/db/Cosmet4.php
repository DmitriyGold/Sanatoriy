<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "cosmet4".
 *
 * @property int $id
 * @property string $name
 * @property float|null $price1
 * @property int|null $hide
 */
class Cosmet4 extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'cosmet4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['price1'], 'number'],
            [['hide'], 'integer'],
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
            'price1' => 'прайс',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
