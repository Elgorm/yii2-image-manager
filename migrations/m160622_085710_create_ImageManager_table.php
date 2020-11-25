<?php

use yii\db\Migration;

/**
 * Handles the creation for table `ImageManager`.
 */
class m160622_085710_create_ImageManager_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
	//ImageManager: create table
        $this->createTable('{{%image_manager}}', [
            'id' => $this->primaryKey(),
			'fileName' => $this->string(128)->notNull(),
			'fileHash' => $this->string(32)->notNull(),
			'created' => $this->datetime()->notNull(),
			'modified' => $this->datetime(),
        ],$tableOptions);
	
	 if ($this->db->driverName === 'mysql') {
		//ImageManager: alter id column
		$this->alterColumn('{{%image_manager}}', 'id', 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT');
	 }

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%image_manager}}');
    }
}
