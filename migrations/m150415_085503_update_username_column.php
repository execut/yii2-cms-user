<?php

use yii\db\Schema;
use yii\db\Migration;

class m150415_085503_update_username_column extends Migration
{
    public function safeUp()
    {
        // Change the length of the 'username' column in the 'users' table
        $this->alterColumn('{{%user}}', 'username', $this->string());
    }

    public function safeDown()
    {
        $this->alterColumn('{{%user}}', 'username', $this->string(25));
    }
}
