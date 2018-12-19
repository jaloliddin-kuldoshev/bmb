<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m181207_120040_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'address_ru' => $this->string()->notNull(),
            'address_uz' => $this->string(),
            'address_en' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'map' => $this->text(),
            'banner' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
    }
}
