<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "mainnews".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_text
 * @property string|null $detailed_title1
 * @property string|null $detailed_text1
 * @property string|null $detailed_title2
 * @property string|null $detailed_text2
 * @property string|null $detailed_title3
 * @property string|null $detailed_text3
 * @property string|null $imagePath
 * @property string|null $date
 * @property int|null $hide
 */
class Mainnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mainnews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_text', 'detailed_text1', 'detailed_text2', 'detailed_text3'], 'string'],
            [['date'], 'safe'],
            [['hide'], 'integer'],
            [['title', 'detailed_title1', 'detailed_title2', 'detailed_title3', 'imagePath'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Объявление',
            'short_text' => 'краткий текст',
            'detailed_title1' => 'заголовок 1',
            'detailed_text1' => 'текст 1',
            'detailed_title2' => 'заголовок 2',
            'detailed_text2' => 'текст 2',
            'detailed_title3' => 'заголовок 3',
            'detailed_text3' => 'текст 3',
            'imagePath' => 'Image Path',
            'date' => 'дата',
            'hide' => 'скрыть',
        ];
    }
    
        public function getHide() {
        return ($this->hide) ? 'да' : '';
    }
    
}
