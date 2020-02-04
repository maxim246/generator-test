<?php

use yii\db\Migration;
use app\models\project\LinkModel;
use yii\db\Schema;

/**
 * Class m200203_174521_CreateTableLinks
 */
class m200203_174521_CreateTableLinks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(LinkModel::tableName(), [
            'id' => $this->primaryKey(),
            'user_link' => Schema::TYPE_STRING,
            'link' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(LinkModel::tableName());
    }
}
