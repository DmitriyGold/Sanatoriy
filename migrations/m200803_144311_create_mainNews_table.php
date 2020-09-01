<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mainNews}}`.
 */
class m200803_144311_create_mainNews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mainNews}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255), // заголовок всего объявления
            'short_text' => $this->text(), // краткий текст
            'detailed_title1' => $this->string(255), // заголовок к детальному тексту 1
            'detailed_text1' => $this->text(), // подробный текст 1
            'detailed_title2' => $this->string(255), // заголовок к детальному тексту 2
            'detailed_text2' => $this->text(), // подробный текст 2
            'detailed_title3' => $this->string(255), // заголовок к детальному тексту 3
            'detailed_text3' => $this->text(), // подробный текст 3
            'imagePath' => $this->string(255), // полный путь и название картинки объявления
            'date' => $this->date(), // дата главной новости
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет              
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mainNews}}');
    }
}
