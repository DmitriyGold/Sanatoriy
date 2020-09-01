<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hydrotherapy}}`.
 */
class m200510_052526_create_hydrotherapy_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%hydrotherapy}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название водолечения
            'time' => $this->integer(), // время процедуры в минутах
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%hydrotherapy}}');
    }

}
