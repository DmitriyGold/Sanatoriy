<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lfk}}`.
 */
class m200510_080541_create_lfk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lfk}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название ЛФК
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
        $this->dropTable('{{%lfk}}');
    }
}
