<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m181207_120254_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'text_ru' => $this->text()->notNull(),
            'text_en' => $this->text(),
            'text_uz' => $this->text(),
            'type' => $this->smallInteger(1)->notNull(),
            'status' => $this->smallInteger(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
