<?php

use yii\db\Migration;

/**
 * Handles the creation of table `proImg`.
 * Has foreign keys to the tables:
 *
 * - `projects`
 */
class m181207_121340_create_proImg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('proImg', [
            'id' => $this->primaryKey(),
            'projects_id' => $this->integer()->notNull(),
            'path' => $this->string(),
        ]);

        // creates index for column `projects_id`
        $this->createIndex(
            'idx-proImg-projects_id',
            'proImg',
            'projects_id'
        );

        // add foreign key for table `projects`
        $this->addForeignKey(
            'fk-proImg-projects_id',
            'proImg',
            'projects_id',
            'projects',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `projects`
        $this->dropForeignKey(
            'fk-proImg-projects_id',
            'proImg'
        );

        // drops index for column `projects_id`
        $this->dropIndex(
            'idx-proImg-projects_id',
            'proImg'
        );

        $this->dropTable('proImg');
    }
}
