<?php
function loadClass($class)
{
    require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

require("../model/bookManager.php");

//book manager
$manager = new BookManager;

// si il y a du get
if (isset($_GET["id"])) {
    $book = $manager->getBook($_GET["id"]);
    $book = new Book($book);
} else {
    if (empty($book)) {
        $erreur="aucun livre";
        return $erreur;
    }
}

include "../views/bookVue.php";

    //header("refresh:0");
