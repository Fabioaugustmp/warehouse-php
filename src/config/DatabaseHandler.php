<?php

class DatabaseHandler
{

    public static function getConnection()
    {
        //Onde está o arquivo
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        //Interpreta o arquivo .ini
        $env = parse_ini_file($envPath);

        $connection = new mysqli(
            $env['host'],
            $env['username'],
            $env['password'],
            $env['database']
        );

        if ($connection->connect_error) {
            die("Erro: " . $connection->connect_error);
        }

        return $connection;
    }

    public static function getResultFromQuery($sql)
    {
        $connection = self::getConnection();
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

    public static function executeSQL($sql)
    {
        $conn = self::getConnection();

        if (!mysqli_query($conn, $sql)) {
            throw new Exception(mysqli_error($conn));
        }

        $id = $conn->insert_id;

        $conn->close();

        return $id;
    }
}
