<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "diet1".
 *
 * @property int $id
 * @property string $name
 * @property string|null $designation
 * @property string|null $number
 */
class Diet1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'designation', 'number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'наименование',
            'designation' => 'описание',
            'number' => 'Number',
        ];
    }
    
        public function getHide() {

        return ($this->hide) ? 'да' : '';
    }
}
