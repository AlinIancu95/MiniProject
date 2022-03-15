<?php include "templates/header.php"; ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 headPages">
                <div class="row">
                    <div class="col-9">
                        <h3>Product Add</h3>
                    </div>
                    <div class="col-1">
                        <button type="submit" form="product_form" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    <div class="col-1">
                        <a href="index.php" class="btn btn-primary">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"><hr></div>
        </div>
        <div class="row">
            <div class="col-12 bodyPages">
                <form id="product_form" action="processInsertProduct.php" method="post">
                    <div class="form-group">
                        <label class="alignLabel" for="sku">SKU</label>
                        <input type="text" name="sku" id="sku" placeholder="SKU">
                    </div>
                    <div class="form-group">
                        <label class="alignLabel" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label class="alignLabel" for="price">Price ($) </label>
                        <input type="text" name="price" id="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="productType">Type Switcher</label>
                        <select  name="productType" id="productType">
                            <option value="None">Select Type</option>
                            <option value="DVD">DVD</option>
                            <option value="Book">Book</option>
                            <option value="Furniture">Furniture</option>
                        </select>
                    </div>
                    <div class="typeDVD divSelected" style="display:none" id="DVD">
                        <div class="form-group">
                            <label for="size">Size (MB) </label>
                            <input type="text" name="size" id="size" placeholder="Size" aria-describedby="sizeHelpBlock">
                            <small id="sizeHelpBlock" class="form-text text-muted">
                                Please, provide size (MB)
                            </small>
                        </div>
                    </div>
                    <div class="typeBook divSelected" style="display:none" id="Book">
                        <div class="form-group">
                            <label for="weight">Weight (KG) </label>
                            <input type="text" name="weight" id="weight" placeholder="Weight" aria-describedby="sizeHelpBlock">
                            <small id="sizeHelpBlock" class="form-text text-muted">
                                Please, provide weight (KG)
                            </small>
                        </div>
                    </div>
                    <div class="typeFurniture divSelected" style="display:none" id="Furniture">
                        <div class="form-group">
                            <label for="height">Height (CM) </label>
                            <input type="text" name="height" id="height" placeholder="Height" aria-describedby="sizeHelpBlock">
                            <label for="witdh">Witdh (CM) </label>
                            <input type="text" name="width" id="witdh" placeholder="Witdh" aria-describedby="sizeHelpBlock">
                            <label for="length">Length (CM) </label>
                            <input type="text" name="length" id="length" placeholder="Length" aria-describedby="sizeHelpBlock">
                            <small id="sizeHelpBlock" class="form-text text-muted">
                                Please provide dimensions in HxWxL format
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col hrBottom"><hr></div>
        </div>
        <div class="row">
            <div class="col footerText" >
                Scandiweb Test assignment
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $(function() {
        $('#productType').change(function(){
            $('.divSelected').hide();
            $('#' + $(this).val()).show();
        });
    });


</script>
