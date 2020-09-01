<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m200816_111744_create_services_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'sitePage' => $this->string(255), // страница сайта  
            'title' => $this->string(255), // заголовок услуги
            'description' => $this->string(255), // описание
            'imagePath' => $this->string(255), // путь к картинке
            'subtitle_1' => $this->string(255), // подзаголовок 1
            'detailed_text1' => $this->text(), // подробный текст абзац 1
            'subtitle_2' => $this->string(255), // подзаголовок 2
            'detailed_text2' => $this->text(), // подробный текст абзац 2
            'subtitle_3' => $this->string(255), // подзаголовок 3
            'detailed_text3' => $this->text(), // подробный текст абзац 3
            'sort' => $this->integer()->defaultValue(1), // сортировка
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет              
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%services}}');
    }

}
