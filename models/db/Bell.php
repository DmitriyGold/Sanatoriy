<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "bell".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $date_bell
 * @property string|null $body
 */
class Bell extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'bell';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'phone'], 'required'],
            [['date_bell'], 'safe'],
            [['name', 'phone', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'phone' => 'телефон',
            'date_bell' => 'Date Bell',
            'body' => 'Body',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
