<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%schedule}}`.
 */
class m200803_082428_create_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%schedule}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'text1' => $this->text(), // текст 1 расписания (например дни и часы работы)
            'text2' => $this->text(), // текст 2 расписания (например выходные дни)
            'text3' => $this->text(), // текст 3 расписания (например время обеда)
            'sort' => $this->integer(), // поле сортировки
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет    
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%schedule}}');
    }
}
