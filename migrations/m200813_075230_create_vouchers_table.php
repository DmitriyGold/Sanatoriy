<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vouchers}}`.
 */
class m200813_075230_create_vouchers_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%vouchers}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255), // заголовок путевки subtitle 
            'short_text' => $this->text(), // краткий текст
            
            'subtitle_1' => $this->string(255), // подзаголовок 1
            'detailed_text1' => $this->text(), // подробный текст абзац 1
            'subtitle_2' => $this->string(255), // подзаголовок 2
            'detailed_text2' => $this->text(), // подробный текст абзац 2
            'subtitle_3' => $this->string(255), // подзаголовок 3
            'detailed_text3' => $this->text(), // подробный текст абзац 3
            
            'imagePath' => $this->string(255), // полный путь и название картинки
            'file1Path' => $this->string(255), // полный путь к файлу 1 приклепленному к путевке
            'file1Name' => $this->string(255), // файл 1 приклепленному к путевке
            'file2Path' => $this->string(255), // полный путь к файлу 2 приклепленному к путевке
            'file2Name' => $this->string(255), // файл 2 приклепленному к путевке
            'file3Path' => $this->string(255), // полный путь к файлу 3 приклепленному к путевке
            'file3Name' => $this->string(255), // файл 3 приклепленному к путевке
            
            'date' => $this->date(), // дата начала акции
            
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет  
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%vouchers}}');
    }

}
