<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profiles}}`.
 */
class m200504_052009_create_profiles_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%profiles}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // названия профиля лечения
            'description' => $this->string(), // описание профиля лечения
            'link' => $this->string(), // ссылка на страницу с полным описанием             
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%profiles}}');
    }

}
