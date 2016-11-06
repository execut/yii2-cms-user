<?php

use yii\db\Schema;
use yii\db\Migration;

class m140109_091757_drop_default_user_table extends Migration
{
    public function safeUp()
    {
        // Drop the default user table
        $this->dropTable('{{%user}}');       
    }

    public function safeDown()
    {
        echo "m140109_091757_drop_default_user_table cannot be reverted.\n";

        return false;
    }
}
