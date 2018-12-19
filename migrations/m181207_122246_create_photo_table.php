<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 * Has foreign keys to the tables:
 *
 * - `alboum`
 */
class m181207_122246_create_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'alboum_id' => $this->integer()->notNull(),
            'img' => $this->string(),
        ]);

        // creates index for column `alboum_id`
        $this->createIndex(
            'idx-photo-alboum_id',
            'photo',
            'alboum_id'
        );

        // add foreign key for table `alboum`
        $this->addForeignKey(
            'fk-photo-alboum_id',
            'photo',
            'alboum_id',
            'alboum',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `alboum`
        $this->dropForeignKey(
            'fk-photo-alboum_id',
            'photo'
        );

        // drops index for column `alboum_id`
        $this->dropIndex(
            'idx-photo-alboum_id',
            'photo'
        );

        $this->dropTable('photo');
    }
}
