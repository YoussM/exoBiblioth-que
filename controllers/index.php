<?php

function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/bookManager.php");

// creat new object bookManager
$manager= new BookManager;


// function for add availability
if (isset($_POST["nameUser"])) {
    $updateBook = $manager->getBook($_POST["id"]);
    $updateBook = new Book($updateBook);
    if ($updateBook->getAvailability()==0) {
        $updateBook->setAvailability(1);
    } else {
        $updateBook->setAvailability(0);
    }
    $manager->availability($updateBook, $_POST["nameUser"]);
}


$books = $manager->getAllbook();


// condition for add book
if (isset($_POST["button"])) {
    $book= new Book($_POST);
    $book->setAvailability(1);
    $book->setIdUser("1");
    $manager->addBook($book);

    // header("refresh:0");
}

// function trie Category
if (isset($_POST["type"])) {
    $books=[];
    $books[]=$manager->sort($_POST["type"]);
}
if ($books[0]) {
    foreach ($books as $key => $value) {
        $books[$key]=new Book($value);
    }
}






include "../views/indexVue.php";
