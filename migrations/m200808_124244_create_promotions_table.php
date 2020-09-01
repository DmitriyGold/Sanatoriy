<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%promotions}}`.
 */
class m200808_124244_create_promotions_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%promotions}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255), // заголовок всего акции
            'short_text' => $this->text(), // краткий текст
            'detailed_text' => $this->text(), // подробный текст
            'imagePath' => $this->string(255), // полный путь и название картинки акции
            'dateStart' => $this->date(), // дата начала акции
            'dateEnd' => $this->date(), // дата окончания акции
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет  
            'archive' => $this->integer(1)->defaultValue(0), // в архиве или нет, 1 - архив, 0 - нет  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%promotions}}');
    }

}
