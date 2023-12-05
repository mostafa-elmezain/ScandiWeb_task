<?php

    namespace Scandiweb;
    
    require '../vendor/autoload.php';

    use Scandiweb\DB_Connection;

        class ADD_Product{

            public static function Add(){

                $DB = new DB_Connection;


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
                    

                    if(empty($sku) || empty($name) || empty($price)){
                        $status = false; $message = "Please, submit required data";
                    }
                    elseif($select == "default"){
                        $status = false; $message = "Please, Select product type";
                    }
                    elseif($select == "Furniture" && empty($height) || $select == "Furniture" && empty($width) || $select == "Furniture" && empty($length)){
                        $status = false; $message = "Please, provide the data of indicated type";
                    }
                    elseif($select == "DVD" && empty($size)){
                        $status = false; $message = "Please, provide the data of indicated type";
                    }
                    elseif($select == "Book" && empty($weight)){
                        $status = false; $message = "Please, provide the data of indicated type";
                    }else{

                        $sku_num = $DB->connection->query("SELECT sku FROM products WHERE sku = '$sku'");
                        if($sku_num->num_rows > 0){
                            $status = false; $message = "SKU is already exists.";
                        }else{

                            $productQuery = "INSERT INTO products (sku,name,price,size,height,width,length,weight) VALUES ('$sku','$name','$price','$size','$height','$width','$length','$weight')";
                            $result = mysqli_query($DB->connection, $productQuery);

                            if($result){
                                $status = true; $message = " ";
                            }else{
                                $status = false; $message = "Whoops! Error";
                            }
                        }
                    }
              
                    echo '{"status":"'.$status.'","message":"'.$message.'"}';
               
                }
            }
        }

        ADD_Product::Add();
?>