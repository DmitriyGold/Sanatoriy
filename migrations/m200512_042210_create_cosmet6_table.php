<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cosmet6}}`.
 */
class m200512_042210_create_cosmet6_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cosmet6}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название 
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет              
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cosmet6}}');
    }
}
