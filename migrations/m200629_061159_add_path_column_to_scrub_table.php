<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%scrub}}`.
 */
class m200629_061159_add_path_column_to_scrub_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%scrub}}', 'path', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%scrub}}', 'path');
    }
}
