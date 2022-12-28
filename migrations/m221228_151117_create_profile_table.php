<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m221228_151117_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->text()->notNull(),
            'surname' => $this->text(),
            'phone_number' => $this->integer(),
            'penis_size' => $this->integer(),
            'is_nigger' => $this->boolean(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-profile-user_id}}',
            '{{%profile}}',
            'user_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-profile-user_id}}',
            '{{%profile}}',
            'user_id',
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
            '{{%fk-profile-user_id}}',
            '{{%profile}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-profile-user_id}}',
            '{{%profile}}'
        );

        $this->dropTable('{{%profile}}');
    }
}
