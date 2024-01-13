<?php
    //Register autoload
    require __DIR__ . '/vendor/autoload.php';

    USE Scandiweb\DBConnection;
    USE Scandiweb\Products;
    USE Scandiweb\DeleteProduct;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/assets/includes/header.inc.php';  ?>
    </head>
    <body>
        <form method='post' action='/'>
            <nav class='navbar navbar-expand-lg bg-white border-bottom'>
                <div class='container-fluid pt-3'>
                    <h2 class='ms-2 me-auto'>Product List</h2>
                    <div class='justify-content-end' id='navbarSupportedContent'>
                        <div class='d-flex pe-5'>
                            <a href="/AddProduct" class="btn btn-outline-primary me-3" id='add-product-btn'> ADD </a>
                            <button class='btn btn-outline-danger' type='submit' name='MassDelete'> MASS DELETE </button>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">  

                <?php echo DeleteProduct::Delete(); ?>
            
                <div class="p-5">
                    <div class="row row-cols-4 g-4 ">

                        <?php
                            $Result = Products::Get_Product();
                            if($Result){ foreach($Result as $product){
                        ?>

                        <div class="card me-4" style="width: 18rem;">
                            <div class="card-body">
                                <input type="checkbox" class="delete-checkbox" name='Checkbox[]' value='<?= $product['id'] ?>'>
                                <div class="text-center">
                                    <h5 class="card-title"><?= $product['sku'] ?></h5>
                                    <h5 class="card-title"><?= $product['name'] ?></h5>
                                    <h5 class="card-title"><?= $product['price'] ?> $</h5>
                                    <h5 class="card-title">
                                        <?= $product['size']   ? "Size: ".$product['size']." MB" : null ?>
                                        <?= $product['weight'] ? "Weight: ".$product['weight']." KG" : null ?>
                                        <?= $product['height'] ? "Dimensions: ".$product['height']."x".$product['width']."x".$product['length'] : null ?>
                                    </h5>
                                </div>   
                            </div>
                        </div>

                        <?php } } else {echo "No Product Found";} ?>

                    </div>
                </div>
            </div>
        </form>

        <?php require __DIR__ . '/assets/includes/footer.inc.php';  ?>

    </body>
</html>    