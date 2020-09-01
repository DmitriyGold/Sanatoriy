<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%procedures}}`.
 */
class m200505_095510_create_procedures_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%procedures}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // название процедуры
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%procedures}}');
    }

}
