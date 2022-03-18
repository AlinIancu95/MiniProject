<?php include "header.php" ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 headPages">
                <div class="row">
                    <div class="col-9">
                        <h3>Product List</h3>
                    </div>
                    <div class="col-1">
                        <a href="../MiniProject/add-product.php" class="btn btn-primary">
                            ADD
                        </a>
                    </div>
                    <div class="col-2">
                        <button type="submit" form="formDeleteProduct" class="btn btn-primary" id="delete-product-btn">
                            MASS DELETE
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"><hr></div>
        </div>
        <div class="row">
            <div class="col bodyPages">
                <div class="row">
                    <?php
                    $arrayDVDs = Dvd::findAll();
                    $arrayBooks = Book::findAll();
                    $arrayFurnitures = Furniture::findAll();
                    $productArray = array_merge($arrayDVDs, $arrayBooks, $arrayFurnitures);

                    function sortFunction($a, $b)
                    {
                        if ($a->getId() == $b->getId() ){
                            return 0;
                    }
                        return ($a->getId() < $b->getId()) ? -1 : 1;
                    }

                    usort($productArray, 'sortFunction');
                    echo '<form action="processDeleteProduct.php" method="post" id="formDeleteProduct" class="row">';
                    foreach ($productArray as $product){
                        $product->cardProduct();
                    }
                    echo '</form>';
                    ?>
                </div>
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