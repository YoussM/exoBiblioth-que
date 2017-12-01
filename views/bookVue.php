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
