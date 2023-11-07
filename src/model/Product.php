<?php

require 'E:\PROJETOS\warehouse-php\src\model\DataBase.php';

class Product extends DataBase {

    public $id;
    public $sku;
    public $nome;
    public $description;
    public $estilo;
    public $valor;
    public $estoque;
    

    function __construct($sku, $nome, $description, $estilo, $valor, $estoque)
    {
        $this->sku = $sku;
        $this->nome = $nome;
        $this->description = $description;
        $this->estilo = $estilo;
        $this->valor = $valor;
        $this->estoque = $estoque;
    

    }
}

$product = new Product("1234", "", "", "", "", "", "", "");