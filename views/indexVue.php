<?php
  include("template/header.php")
 ?>

  <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target=".bd-example-modal-sm" >Add-Book</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <form class="" action="index.php" method="post">
            <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name-book:</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="title" value="" placeholder="Name-book">
        </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">author:</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" name="author" value="" placeholder="author">
      </div>
    </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">date:</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="dates" value="" placeholder="dates">
    </div>
  </div>



  <div class="form-group">
    <label class="control-label col-sm-2" for="name">category:</label>
    <div class="col-sm-10">
    <input class="form-control" type="" name="category" value=""placeholder="category">
    </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="name">availability:</label>
      <div class="col-sm-10">
      <input class="form-control" type="checkbox" name="availability" value="1" >
    </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="name">resum:</label>
      <div class="col-sm-10">
      <input class="form-control" type="" name="resum" value="" placeholder="resum">
    </div>
  </div>

  <button class= "btn btn-primary" type="submit" name="button" id="btn-send">send</button>

  </form>
    </div>
  </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Book
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php foreach ($books as $key => $value): ?>
            <a class="dropdown-item" href="thisBook.php?id=<?php echo $value->getId()?>"><?php echo $value->getTitle()?></a>
        <?php endforeach; ?>




      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
        <select class="" name="type" id="type" required>
          <option value="Roman">Roman</option>
          <option value="Aventure">Aventure</option>
          <option value="Polar">Polar</option>
          <option value="Science-Fiction">Science-Fiction</option>
          <option value="Horreur">Horreur</option>
          </select>
        </div>
      </div>
   </body>
 </html>


 <?php
   include("template/footer.php")
  ?>
