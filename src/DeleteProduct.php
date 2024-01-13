<?php 
    namespace Scandiweb;

        class DeleteProduct{

            public static function Delete(){
                $DB = new DBConnection;

                if(isset($_POST['MassDelete'])){
                    $ErrorMessage = "";
                    if(!empty($_POST['Checkbox'])){
                        $IDS = $_POST['Checkbox'];
                        foreach($IDS as $ID){
                            $Query = "DELETE from products WHERE id=".$ID;
                            $RunQuery = $DB->Connection->query($Query);
                        }
                    }else{
                        $ErrorMessage = "<br><div class='col-sm-5 p-3 text-bg-danger rounded-3 fw-bold'> - Please, Select an item to Delete </div>";
                    }
                    return $ErrorMessage;
                }
            }
        }
?>