<?php
  include("template/header.php")
 ?>


  </head>
  <body>

    <!-- form type card -->
 <div class="card carte" style="width: 20rem;" >
    <input type="text" name="" value="<?php echo $book->getTitle()?>" readonly=""placeholder="title">
    <input type="text" name="" value="<?php echo $book->getAuthor()?>" readonly="" placeholder="author">
    <input type="text" name="" value="<?php echo $book->getResum()?>" readonly="" placeholder="resum">
    <input type="text" name="" value="<?php echo $book->getCategory()?>" readonly="" placeholder="category">
    <input type="text" name="" value="<?php echo $book->getAvailability()?>" readonly="" placeholder="availability">
    <button class= "btn btn-primary" type="submit" name="button" id="btn-send">send</button>

<div class="card-body">

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
