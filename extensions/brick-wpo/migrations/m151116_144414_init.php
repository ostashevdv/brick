<?php

use yii\db\Migration;

class m151116_144414_init extends Migration
{
    use \brick\engine\db\pgsql\SchemaBuilderTrait;

    public function safeUp()
    {
        $this->createTable('{{wpo_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'content' => $this->text(),

            'lft' => $this->integer()->notNull(),
            'rgyiit' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            //'tree' => $this->integer()->notNull(),

            'extra' => $this->jsonb(),
        ]);
    }
    
    public function safeDown()
    {
        $this->dropTable('{{wpo_category}}');
        return true;
    }
}
