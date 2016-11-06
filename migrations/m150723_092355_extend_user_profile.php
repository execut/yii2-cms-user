<?php

use yii\db\Schema;
use yii\db\Migration;

class m150723_092355_extend_user_profile extends Migration
{
    public function safeUp()
    {
        // Get the column names of the current profile table
        $columnNames = $this->db->schema->getTableSchema('profile', true)->getColumnNames();
        $newColumns = ['firstname', 'address', 'city', 'zipcode', 'phone', 'mobile', 'fax', 'language'];
        
        // Drop any of the new columns if they exist yet
        foreach ($newColumns as $newColumn) {
            if (in_array($newColumn, $columnNames))
                $this->dropColumn('{{%profile}}', $newColumn);
        }
        
        // Add new columns
        $this->addColumn('{{%profile}}', 'firstname', $this->string()->notNull());
        $this->addColumn('{{%profile}}', 'address', $this->string()->notNull());
        $this->addColumn('{{%profile}}', 'city', $this->string()->notNull());
        $this->addColumn('{{%profile}}', 'zipcode', $this->string(25)->notNull());
        $this->addColumn('{{%profile}}', 'phone', $this->string(25)->notNull());
        $this->addColumn('{{%profile}}', 'mobile', $this->string(25)->notNull());
        $this->addColumn('{{%profile}}', 'fax', $this->string(25)->notNull());
        $this->addColumn('{{%profile}}', 'language', $this->string(10)->notNull());
        $this->addColumn('{{%profile}}', 'created_at', $this->integer()->unsigned()->notNull());
        $this->addColumn('{{%profile}}', 'updated_at', $this->integer()->unsigned()->notNull());
    }

    public function safeDown()
    {
        return false;    
    }
}
