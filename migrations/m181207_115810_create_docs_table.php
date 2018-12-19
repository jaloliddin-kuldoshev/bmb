<?php

use yii\db\Migration;

/**
 * Handles the creation of table `docs`.
 */
class m181207_115810_create_docs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('docs', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'text_ru' => $this->text()->notNull(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'file' => $this->string(),
            'type' => $this->smallInteger(1)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('docs');
    }
}
