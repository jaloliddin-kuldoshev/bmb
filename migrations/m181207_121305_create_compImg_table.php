<?php

use yii\db\Migration;

/**
 * Handles the creation of table `compImg`.
 * Has foreign keys to the tables:
 *
 * - `company`
 */
class m181207_121305_create_compImg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('compImg', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'path' => $this->string(),
        ]);

        // creates index for column `company_id`
        $this->createIndex(
            'idx-compImg-company_id',
            'compImg',
            'company_id'
        );

        // add foreign key for table `company`
        $this->addForeignKey(
            'fk-compImg-company_id',
            'compImg',
            'company_id',
            'company',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `company`
        $this->dropForeignKey(
            'fk-compImg-company_id',
            'compImg'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            'idx-compImg-company_id',
            'compImg'
        );

        $this->dropTable('compImg');
    }
}
