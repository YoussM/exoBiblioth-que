<?php

function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/bookManager.php");

// creat new object bookManager
$manager= new BookManager;

$books = $manager->getAllbook();
foreach ($books as $key => $value) {
    $books[$key]=new Book($value);
}

// condition for add book
if (isset($_POST["button"])) {
    $book= new Book($_POST);
    $book->setIdUser("1");
    $manager->addBook($book);

    header("refresh:0");
}



include "../views/indexVue.php";
