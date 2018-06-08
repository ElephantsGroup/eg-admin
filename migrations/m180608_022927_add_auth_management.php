<?php

use yii\db\Migration;
use yii\db\Query;

/**
 * Class m180608_022927_add_auth_management
 */
class m180608_022927_add_auth_management extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$db = \Yii::$app->db;
		$query = new Query();
        if ($db->schema->getTableSchema("{{%auth_item}}", true) !== null)
		{
			if (!$query->from('{{%auth_item}}')->where(['name' => '/admin/*'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> '/admin/*',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'auth_management'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'auth_management',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'auth_manager'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'auth_manager',
					'type'			=> 1,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'administrator'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'administrator',
					'type'			=> 1,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
		}
        if ($db->schema->getTableSchema("{{%auth_item_child}}", true) !== null)
		{
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'auth_management', 'child' => '/admin/*'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'auth_management',
					'child'		=> '/admin/*'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'auth_manager', 'child' => 'auth_management'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'auth_manager',
					'child'		=> 'auth_management'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'administrator', 'child' => 'auth_manager'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'administrator',
					'child'		=> 'auth_manager'
				]);
		}
        if ($db->schema->getTableSchema("{{%auth_assignment}}", true) !== null)
		{
			if (!$query->from('{{%auth_assignment}}')->where(['item_name' => 'administrator', 'user_id' => 1])->exists())
				$this->insert('{{%auth_assignment}}', [
					'item_name'	=> 'administrator',
					'user_id'	=> 1,
					'created_at' => time()
				]);
		}
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		// it's not safe to remove auth data in migration down
    }
}
