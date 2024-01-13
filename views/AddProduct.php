<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require  '../assets/includes/header.inc.php';  ?>
    </head> 
    <body>
        <form action="" method="POST" id="product_form">
        <nav class='navbar navbar-expand-lg bg-white border-bottom'>
            <div class='container-fluid pt-3'>
                <h2 class='ms-2 me-auto'>Product Add</h2>
                <div class='justify-content-end' id='navbarSupportedContent'>
                    <div class='d-flex pe-5'>
                        <button class='btn btn-outline-primary me-3 ' type='button' id='save-product-btn'> Save </button>
                        <a href="/" class="btn btn-outline-secondary" id='cancel-product-btn'>Cancel</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <div id="ErorrDiv"></div>

            <div class='p-5'>
                <div class="form-group row mb-4">
                    <label for="sku" class="col-sm-1 col-form-label">SKU </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="sku" name="sku">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="name" class="col-sm-1 col-form-label">Name </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="name" name="name">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="price" class="col-sm-1 col-form-label">Price </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm" id="price" name="price">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="productType" class="col-sm-2 col-form-label">Type Switcher </label>
                    <div class="col-sm-3">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id='productType' name='productType'>
                            <option value="default" id='default' selected>Type Switcher</option>
                            <option value="DVD" id='DVD'>DVD</option>
                            <option value="Furniture" id='Furniture'>Furniture</option>
                            <option value="Book" id='Book'>Book</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4" id='sizeDiv'>
                    <label for="size" class="col-sm-1 col-form-label">Size (MB) </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm" id="size" name="size">
                    </div>
                    <p class='pt-3'>Please provide a size in megabyte (MB).</p>
                </div>

                <div id='furnitureDiv'>
                    <div class="form-group row mb-4">
                        <label for="height" class="col-sm-1 col-form-label">Height (CM)</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control-sm" id="height" name="height">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="width" class="col-sm-1 col-form-label">Width (CM) </label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control-sm" id="width" name="width">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="length" class="col-sm-1 col-form-label">Length (CM) </label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control-sm" id="length" name="length">
                        </div>
                        <p class='pt-3'>Please provide dimensions in HxWxL (height/width/length) format.</p>
                    </div>
                </div>

                <div class="form-group row mb-4" id='weightDiv'>
                    <label for="weight" class="col-sm-1 col-form-label">Weight (KG)</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm" id="weight" name="weight">
                    </div>
                    <p class='pt-3'>Please provide a weight in kilograms (KG).</p>
                </div>

           </div>
        </div>
        </form>

        <?php require '../assets/includes/footer.inc.php';  ?>

    </body>
</html>