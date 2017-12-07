<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/bookManager.php");

//book manager
$manager = new BookManager;

// display card book
if (isset($_GET["id"])) {
    $book = $manager->getBook($_GET["id"]);
    $book = new Book($book);
}


include "../views/bookVue.php";
