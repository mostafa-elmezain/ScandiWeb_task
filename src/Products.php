<?php 
    namespace Scandiweb;

        class Products{

            public static function Get_Product(){
                $DB = new DB_Connection;

                $SQl_Query = "SELECT * FROM products";
                $Get_Result = $DB->connection->query($SQl_Query);
                if($Get_Result->num_rows > 0){
                    return $Get_Result; 
                }else{
                    return false;
                }
            }
        }
?>