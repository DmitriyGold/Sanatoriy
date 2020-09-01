<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $date_order
 * @property string|null $date_begin
 * @property string|null $date_end
 * @property string|null $conditions
 * @property string|null $nameFile1
 * @property string|null $nameFile2
 * @property string|null $body
 */
class Reservation extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'reservation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['date_order', 'date_begin', 'date_end'], 'safe'],
            [['name', 'email', 'phone', 'conditions', 'nameFile1', 'nameFile2', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'email' => 'Email',
            'phone' => 'телефон',
            'date_order' => 'Date Order',
            'date_begin' => 'Date Begin',
            'date_end' => 'Date End',
            'conditions' => 'условия',
            'nameFile1' => 'Name File1',
            'nameFile2' => 'Name File2',
            'body' => 'Body',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
