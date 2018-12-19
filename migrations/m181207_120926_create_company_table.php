<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m181207_120926_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'text_ru' => $this->text(),
            'text_uz' => $this->text(),
            'text_en' => $this->text(),
            'phone' => $this->string(),
            'address_ru' => $this->string(),
            'address_en' => $this->string(),
            'address_uz' => $this->string(),
            'type' => $this->smallInteger(1),
            'banner' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('company');
    }
}
