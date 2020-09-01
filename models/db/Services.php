<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string|null $sitePage
 * @property string|null $title
 * @property string|null $description
 * @property string|null $imagePath
 * @property string|null $subtitle_1
 * @property string|null $detailed_text1
 * @property string|null $subtitle_2
 * @property string|null $detailed_text2
 * @property string|null $subtitle_3
 * @property string|null $detailed_text3
 * @property int|null $sort
 * @property int|null $hide
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['detailed_text1', 'detailed_text2', 'detailed_text3'], 'string'],
            [['sort', 'hide'], 'integer'],
            [['sitePage', 'title', 'description', 'imagePath', 'subtitle_1', 'subtitle_2', 'subtitle_3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sitePage' => 'Site Page',
            'title' => 'заголовок',
            'description' => 'описание',
            'imagePath' => 'Image Path',
            'subtitle_1' => 'подзаголовок 1',
            'detailed_text1' => 'текст 1',
            'subtitle_2' => 'подзаголовок 2',
            'detailed_text2' => 'текст 2',
            'subtitle_3' => 'подзаголовок 3',
            'detailed_text3' => 'текст 3',
            'sort' => 'Sort',
            'hide' => 'скрыть',
        ];
    }
    
     public function getHide() {

        return ($this->hide) ? 'да' : '';
    }
}
