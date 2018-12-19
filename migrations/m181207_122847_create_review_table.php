<?php

use yii\db\Migration;

/**
 * Handles the creation of table `review`.
 */
class m181207_122847_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'text_ru' => $this->text(),
            'text_uz' => $this->text(),
            'text_en' => $this->text(),
            'img' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('review');
    }
}
