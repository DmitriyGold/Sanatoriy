<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%sauna}}`.
 */
class m200623_102914_add_path_column_to_sauna_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%sauna}}', 'path', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%sauna}}', 'path');
    }
}
