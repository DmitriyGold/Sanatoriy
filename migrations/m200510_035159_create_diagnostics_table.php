<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diagnostics}}`.
 */
class m200510_035159_create_diagnostics_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%diagnostics}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // название диагностики
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%diagnostics}}');
    }

}
