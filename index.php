<?php

require_once(dirname(__FILE__) . "\src\config\DatabaseHandler.php");

$sql = 'select * from products';

$result = DatabaseHandler::getResultFromQuery($sql);

echo '<br>';
print_r($result);
echo '<br>';
// print_r($result->fetch_all());

echo '<br>';
echo '<br>';

while($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}