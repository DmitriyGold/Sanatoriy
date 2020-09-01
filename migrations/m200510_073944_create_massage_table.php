<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%massage}}`.
 */
class m200510_073944_create_massage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%massage}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название массажа
            'time' => $this->integer(), // время в минутах
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет              
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%massage}}');
    }
}
