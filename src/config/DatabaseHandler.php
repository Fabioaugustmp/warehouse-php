  <?php
    class DatabaseHandler
    {

        public static function getConnection()
        {
            $env = self::loadEnvFile();
            
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


        public static function getResultFromQuery($sql) {
            $connection = self::getConnection();
            $result = $connection->query($sql);
            $connection->close();
            return $result; 
        }

        public static function loadEnvFile() {
            //Onde está o arquivo
            $envPath = 'env.ini';
            var_dump($envPath);

            //Interpreta o arquivo .ini
            return parse_ini_file($envPath);
        }
    }
