<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m181207_122903_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
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
        $this->dropTable('slider');
    }
}
