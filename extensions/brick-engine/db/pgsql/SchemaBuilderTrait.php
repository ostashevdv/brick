<?php
namespace brick\engine\db\pgsql;

/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */
trait SchemaBuilderTrait
{
    /**
     * @return string
     */
    public function jsonb()
    {
        return $this->getDb()->getSchema()->createColumnSchemaBuilder(Schema::TYPE_JSONB);
    }
}