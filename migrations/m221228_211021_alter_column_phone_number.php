<?php

use yii\db\Migration;

/**
 * Class m221228_211021_alter_column_phone_number
 */
class m221228_211021_alter_column_phone_number extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('profile', 'phone_number', 'varchar(15)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('profile', 'phone_number', 'int');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221228_211021_alter_column_phone_number cannot be reverted.\n";

        return false;
    }
    */
}
