<?php
  include("template/header.php")
 ?>


  </head>
  <body>

    <!-- form type card -->
<form class="" action="index.php" method="post">
  <div class="card carte" style="width: 20rem;" >
    <p> <?php echo $book->getTitle()?></p>
    <p> <?php echo $book->getAuthor()?></p>
    <p><?php echo $book->getResum()?></p>
    <p><?php echo $book->getCategory()?></p>
    <p><?php echo $book->getAvailability()==1 ?"yes":"no";?></p>
    <input type="text" name="nameUser" value="">
    <input type="hidden" name="id" value="<?php echo $book->getId()?>">
    <button class= "btn btn-primary" type="submit" name="button" id="btn-send">send</button>
  <div class="card-body">
  </form>
    <?php if (empty($book)): ?>
      <div class="alert alert-danger">
        <p><?php echo $erreur ?></p>
      </div>
    <?php endif; ?>

  </div>
  </div>

  </body>
</html>

<?php
  include("template/footer.php")
 ?>
