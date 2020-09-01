<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $link
 */
class Profiles extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['name', 'description', 'link'], 'string', 'max' => 255],
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
            'description' => 'описание',
            'link' => 'Link',
        ];
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

}
