<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m181207_122037_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'text_ru' => $this->text(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'banner' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
