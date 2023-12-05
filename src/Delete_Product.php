<?php 
    namespace Scandiweb;

        class Delete_Product{

            public static function Delete(){

                $DB = new DB_Connection;

                if(isset($_POST['Mass_Delete'])){

                    $Error_Message = "";

                    if(isset($_POST['Delete_Checkbox'])){
                        foreach($_POST['Delete_Checkbox'] as $Delete_ID){
            
                            $SQl_Query = "DELETE from products WHERE id=".$Delete_ID;
                            $Run_Query = $DB->connection->query($SQl_Query);
                        }
                    }else{
                        $Error_Message = "<br><div class='col-sm-5 p-3 text-bg-danger rounded-3 fw-bold'> - Please, Select One Item To Delete </div>";
                    }
                    return $Error_Message;
                }

            }
            
        }

?>