<?php

    namespace Scandiweb;

        define('HOST','db_host');
        define('USER','db_user');
        define('PASSWORD','db_password');
        define('DATABASE','db_name');

        class DBConnection{

            public function __construct(){
                $Connection = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
                return $this->Connection = $Connection;
            }
        }

?>