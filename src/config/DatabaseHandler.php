<?php

class DatabaseHandler {

    public static function getConnection() {

        // $connection = new mysqli('localhost:3306', 'root', 'Urano&I11', 'warehouse');

        //Onde está o arquivo
        $envPath = 'E:\PROJETOS\warehouse-php\env.ini';
        //Interpreta o arquivo .ini
        $env = parse_ini_file($envPath);

        $connection = new mysqli($env['host'],
     $env['username'], $env['password'],
     $env['database']);

        if($connection->connect_error) {
            die("Erro: " . $connection->connect_error);
        }

        return $connection;
    }

    public static function getResultFromQuery($sql) {
        $connection = self::getConnection();
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

}