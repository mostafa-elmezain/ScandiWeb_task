<?php 
    namespace Scandiweb;

        class Products{

            public static function Get_Product(){
                $DB = new DBConnection;

                $Query = "SELECT * FROM products";
                $GetResult = $DB->Connection->query($Query);
                if($GetResult->num_rows > 0){
                    return $GetResult; 
                }else{
                    return false;
                }
            }
        }
?>