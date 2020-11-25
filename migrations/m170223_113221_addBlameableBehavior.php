<?php

use yii\db\Migration;

class m170223_113221_addBlameableBehavior extends Migration
{
    public function up()
    {
        $this->addColumn('{{%image_manager}}', 'created_by', $this->integer()->unsigned()->null()->defaultValue(null));
        $this->addColumn('{{%image_manager}}', 'created_by', $this->integer()->unsigned()->null()->defaultValue(null));
    }

    public function down()
    {
    	$this->dropColumn('{{%image_manager}}', 'created_by');
    	$this->dropColumn('{{%image_manager}}', 'modified_by');
    }
}
