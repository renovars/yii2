<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m221228_150434_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'text' => $this->text(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-comments-author_id}}',
            '{{%comments}}',
            'author_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-comments-author_id}}',
            '{{%comments}}',
            'author_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-comments-author_id}}',
            '{{%comments}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-comments-author_id}}',
            '{{%comments}}'
        );

        $this->dropTable('{{%comments}}');
    }
}
