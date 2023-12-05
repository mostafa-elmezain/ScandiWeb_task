<?php

    namespace Scandiweb;

        define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_PASSWORD','');
        define('DB_DATABASE','scandiweb');

        class DB_Connection{

            public function __construct(){
                $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                return $this->connection = $connection;
            }
        }

?>
