<?php

use yii\db\Migration;
use brick\wpo\models\Category;

class m151116_144414_init extends Migration
{
    use \brick\engine\db\pgsql\SchemaBuilderTrait;

    public function safeUp()
    {
        $this->createTable('{{wpo_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'slug' => $this->string(255),
            'description' => $this->text(),
            'content' => $this->text(),
            'status' => $this->integer()->notNull()->defaultValue(Category::STATUS_OK),
            'created_at' => $this->timestamp(),
            'published_at' => $this->timestamp(),
            'unpublished_at' => $this->timestamp(),
            'author_id' => $this->integer(),
            'redactor_id' => $this->integer(),

            'extra' => $this->jsonb(),
        ]);
    }
    
    public function safeDown()
    {
        $this->dropTable('{{wpo_category}}');
        return true;
    }
}
