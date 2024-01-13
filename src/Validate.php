<?php
  
  namespace Scandiweb;

    class Validate {

      public static function validator(array $keys, array $Required){
        $DB = new DBConnection;
        
        foreach ($keys as $key) {
          if (empty($key)) {
            return "- Please, submit required data";
          }
        }

        $sku = $keys[0];
        $sku_num = $DB->Connection->query("SELECT sku FROM products WHERE sku = '$sku'");
        if($sku_num->num_rows > 0){
          return "SKU is already exists";
        }

        $ErrorMessage = "";
        foreach ($Required as $Data) {
            if (!in_array($Data, array_keys(array_filter($_REQUEST)))) {
                $ErrorMessage = "- Please, provide the data of indicated type";
                continue;
            } else {
                return null;
            }
        }
        return $ErrorMessage;

      }
    }
?>