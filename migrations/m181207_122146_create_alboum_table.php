<?php

use yii\db\Migration;

/**
 * Handles the creation of table `alboum`.
 */
class m181207_122146_create_alboum_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('alboum', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'img' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('alboum');
    }
}
