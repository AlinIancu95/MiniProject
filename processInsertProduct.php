<?php include "functions.php";

if (count(Dvd::findBy('sku', $_POST['sku'])) > 0 || count(Book::findBy('sku', $_POST['sku']) ) > 0 || count(Furniture::findBy('sku', $_POST['sku']))){
    header('Location: add-product.php');
} else {
    if ($_POST['productType'] == 'None'){
        header('Location: add-product.php');
    }

    if ($_POST['productType'] == 'DVD'){
        $dvd = new Dvd();
        $dvd->sku = $_POST['sku'];
        $dvd->name = $_POST['name'];
        $dvd->price = $_POST['price'];
        $dvd->size = $_POST['size'];
        $dvd->save();
        header('Location: index.php');
    }

    if ($_POST['productType'] == 'Book'){
        $book = new Book();
        $book->sku = $_POST['sku'];
        $book->name = $_POST['name'];
        $book->price = $_POST['price'];
        $book->weight = $_POST['weight'];
        $book->save();
        header('Location: index.php');
    }

    if ($_POST['productType'] == 'Furniture'){
        $furniture = new Furniture();
        $furniture->sku = $_POST['sku'];
        $furniture->name = $_POST['name'];
        $furniture->price = $_POST['price'];
        $furniture->height = $_POST['height'];
        $furniture->width = $_POST['width'];
        $furniture->length = $_POST['length'];
        $furniture->save();
        header('Location: index.php');
    }
}

