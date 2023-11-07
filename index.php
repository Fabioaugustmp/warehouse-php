<?php 

require 'E:\PROJETOS\warehouse-php\src\config\DatabaseHandler.php';

require_once(dirname(__FILE__) . '\src\model\Product.php');

$product = new Product(12,1, "asdaso", 1, "teste", "adsa", "asd", "asd", "as", "asd");

$sql = 'select * from products';

$result = DatabaseHandler::getResultFromQuery($sql);

print_r($result);

while($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}

// var_dump($product);