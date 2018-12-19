<?php

use yii\db\Migration;

/**
 * Handles the creation of table `workers`.
 * Has foreign keys to the tables:
 *
 * - `company`
 */
class m181207_121605_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('workers', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'img' => $this->string(),
            'title_ru' => $this->string()->notNull(),
            'title_en' => $this->string(),
            'title_uz' => $this->string(),
            'position_ru' => $this->string(),
            'position_en' => $this->string(),
            'position_uz' => $this->string(),
        ]);

        // creates index for column `company_id`
        $this->createIndex(
            'idx-workers-company_id',
            'workers',
            'company_id'
        );

        // add foreign key for table `company`
        $this->addForeignKey(
            'fk-workers-company_id',
            'workers',
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
            'fk-workers-company_id',
            'workers'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            'idx-workers-company_id',
            'workers'
        );

        $this->dropTable('workers');
    }
}
