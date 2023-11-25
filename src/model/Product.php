<?php

class Product extends Model {

    protected static $tableName = 'products';
    protected static $columns = [
        "id",
        "sku",
        "nome",
        "description",
        "estilo",
        "valor",
        "estoque"
    ];

    public function insert()
    {
        return parent::insert();
    }
}
