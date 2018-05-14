<?php

use yii\db\Migration;
use elephantsGroup\admin\components\Configs;

class m160312_050000_create_user extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $userTable = Configs::instance()->userTable;
        $db = Configs::userDb();

        // Check if the table exists
        if ($db->schema->getTableSchema($userTable, true) === null) {
            $this->createTable($userTable, [
                'id' => $this->primaryKey(),
                'username' => $this->string(32)->notNull(),
                'auth_key' => $this->string(32)->notNull(),
                'password_hash' => $this->string()->notNull(),
                'password_reset_token' => $this->string(),
                'email' => $this->string()->notNull(),
                'status' => $this->smallInteger()->notNull()->defaultValue(10),
                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);
        } else {
			if ($db->schema->getTableSchema($userTable, true)->getColumn('status') == null)
				$this->addColumn($userTable, 'status', $this->smallInteger()->notNull()->defaultValue(10));
			if ($db->schema->getTableSchema($userTable, true)->getColumn('password_reset_token') == null)
				$this->addColumn($userTable, 'password_reset_token', $this->string());
		}
    }

    public function down()
    {
        $userTable = Configs::instance()->userTable;
        $db = Configs::userDb();
        if ($db->schema->getTableSchema($userTable, true) !== null) {
            $this->dropTable($userTable);
        } else {
			$this->dropColumn($userTable, 'password_reset_token');
			$this->dropColumn($userTable, 'status');
		}
    }
}
