<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mud1}}`.
 */
class m200510_061709_create_mud1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mud1}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название грязелечения
            'time' => $this->integer(), // время процедуры в минутах
            'number' => $this->integer(), // количество полей
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет             
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mud1}}');
    }
}
