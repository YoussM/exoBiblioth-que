<?php
  class BookManager
  {
      // function to add and bdd
      public function getBdd()
      {
          $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8', 'root', 'root');
          $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          return $bdd;
      }

      // function to get and bdd a table
      public function getAllBook()
      {
          $response = $this->getBdd()->query("SELECT * FROM book");
          $books=$response->fetchAll();
          return $books;
      }

      // function to insert and getBdd

      public function addBook(Book $book)
      {
          $response = $this->getBdd()->prepare("INSERT INTO book(id_user,title,author,dates,category,availability,resum) VALUES (:id_user,:title,:author,:dates,:category,:availability,:resum)");
          $response->execute(array(
          "id_user"=>$book->getIdUser(),
          "title"=>$book->getTitle(),
          "author"=>$book->getAuthor(),
          "dates"=>$book->getDates(),
          "category"=>$book->getCategory(),
          "availability"=>$book->getAvailability(),
          "resum"=>$book->getResum()

      ));
      }
      // function for addBook
      public function getBook($id)
      {
          $response= $this->getBdd()->prepare("SELECT * FROM book WHERE id= :id");
          $response->execute(array(
            "id"=>$id,

      ));
          return $book = $response->fetch();
      }

      // function for trie category
      public function sort($category)
      {
          $response= $this->getBdd()->prepare("SELECT * FROM book WHERE category= :category");
          $response->execute(array(
          "category"=>$category,
      ));
          return $book = $response->fetch();
      }
  }
