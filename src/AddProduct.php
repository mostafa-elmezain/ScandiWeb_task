<?php

    namespace Scandiweb;
    
    //Register autoload
    require '../vendor/autoload.php';

    USE Scandiweb\DBConnection;
    USE Scandiweb\Validate;

        class AddProduct{

            public static function Add(){
                $DB = new DBConnection;

                if(isset($_POST['sku'])){
                    $sku = str_replace(" ", "-",htmlspecialchars($_POST['sku']));
                    $name = htmlspecialchars($_POST['name']);
                    $price = htmlspecialchars($_POST['price']);
                    $select = htmlspecialchars($_POST['select']);
                    $size = htmlspecialchars($_POST['size']) ?: null;
                    $weight = htmlspecialchars($_POST['weight']) ?: null;
                    $height = htmlspecialchars($_POST['height']) ?: null;
                    $width = htmlspecialchars($_POST['width']) ?: null;
                    $length = htmlspecialchars($_POST['length']) ?: null;

                    $validator = Validate::validator([$sku, $name, $price], ['weight','size','height','width','length']);
                    if ($validator != null) {
                        $status = false; $message = $validator;
                    }else{
                        $Query = "INSERT INTO products (sku,name,price,size,height,width,length,weight) VALUES ('$sku','$name','$price','$size','$height','$width','$length','$weight')";
                        $Result = $DB->Connection->query($Query);
                        if($Result){ $status = true; $message = " "; }
                    }
                }
                echo '{"status":"'.$status.'","message":"'.$message.'"}'; 
            }
        }

    AddProduct::Add();
?>