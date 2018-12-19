<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partners`.
 */
class m181207_122431_create_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('partners', [
            'id' => $this->primaryKey(),
            'img' => $this->string(),
            'href' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('partners');
    }
}
