<?php
include 'functions.php';

$dvdProducts = $_POST['dvd'];
$bookProducts = $_POST['book'];
$furnitureProducts = $_POST['furniture'];
if (isset($dvdProducts)){
    foreach ($dvdProducts as $dvdId){
        $dvd = Dvd::find($dvdId);
        $dvd->delete();
    }
}
if (isset($bookProducts)){
    foreach ($bookProducts as $bookId){
        $book = Book::find($bookId) ;
        $book->delete();
    }
}
if (isset($furnitureProducts)){
    foreach ($furnitureProducts as $furnitureId){
        $furniture = Furniture::find($furnitureId);
        $furniture->delete();
    }
}

header('Location: index.php');
