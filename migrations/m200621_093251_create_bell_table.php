<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bell}}`.
 */
class m200621_093251_create_bell_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bell}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // имя заказчика
            'phone' => $this->string()->notNull(),
            'date_bell' => $this->date(), // дата заказа звонка
            'body' => $this->string(),            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bell}}');
    }
}
