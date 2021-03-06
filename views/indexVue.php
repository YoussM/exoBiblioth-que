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
      <input class="form-control" type="checkbox" name="availability" value="yes" >
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

    <div class="tableau">
      <table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Author</th>
      <th>Catégory</th>
      <th>availability</th>

    </tr>
  </thead>

  <tbody>
    <?php
    if ($books[0]) {
        foreach ($books as $key => $value): ?>

    <tr>
      <th scope="row"><?php echo $value->getId()?></th>
      <td><a href="thisBook.php?id=<?php echo $value->getId()?>" ><?php echo $value->getTitle()?></a></td>
      <td><?php echo $value->getAuthor()?></td>
      <td><?php echo $value->getCategory()?></td>
      <td><?php echo $value->getAvailability()==1 ?"yes":"no"; ?></td>


    </tr>
    <?php endforeach;
    } else {
        echo "<tr><td>aucun livre trouver</td></tr>";
    } ?>
  </tbody>

</table>

      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
        <form class="" action="index.php" method="post">
        <select class="" name="type" id="type" required>
          <option value="roman">Roman</option>
          <option value="aventure">Aventure</option>
          <option value="polar">Polar</option>
          <option value="science Fiction">Science-Fiction</option>
          <option value="horreur">Horreur</option>
          <option value="bd">BD</option>
        </select>
        <button class= "btn btn-primary" type="submit" name="buttons" id="btn-send">send</button>
      </form>

        </div>
      </div>
   </body>
 </html>


 <?php
   include("template/footer.php")
  ?>
