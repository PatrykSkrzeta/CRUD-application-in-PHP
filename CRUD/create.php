<?php 
include('config/db.php');
if(isset($_POST['add'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  if($title != '' && $description != '' && $category != ''){
    $sql = "INSERT INTO crudapp (title, description, category) VALUES('$title', '$description', '$category')";
    $query = $con -> query($sql);
    if($title != '' && $description != '' && $category != ''){
      $sql = "INSERT INTO crudapp (title, description, category) VALUES('$title', '$description', '$category')";
      $query = $con -> query($sql);
    }
  }

    
}

  


?>

<?php 
include ('inc/header.php'); ?>

<div class="container mx-auto">
    <h3 style="text-align: center;" class="pt-3 text-warning">Create your idea. . . </h3>
    <form class="mx-auto" action="create.php" method="post">
    <div class=form-group>
        <div class="col-lg-7">
        <label for="title" class="form-label mt-4">Title</label>
      <textarea class="form-control" name="title" rows="1"></textarea>
        </div>
    </div>

    <div class=form-group>
        <div class="col-lg-7">
        <label for="description" class="form-label mt-4">Description</label>
      <textarea class="form-control" name="description" rows="19"></textarea>
        </div>
    </div>

    <div class=form-group>
        <div class="col-lg-7">
        <label for="Category" class="form-label mt-4">Category</label>
      <select class="form-control col-lg-3" name="category">
        <option>HTML/CSS/JS</option>
        <option>Crypto</option>
        <option>Python</option>
        <option>PHP</option>
      </select> 
        </div>


    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2"></label>
      <div class="col-lg-6">
        <?php 
        if(isset($_POST['add'])){?>
        <p> </p>
      <?php 
        }
        ?>
      </div>
    </div>

    <div class="mt-4 mb-4">
    <button type="submit" name="add" class="btn btn-warning">Submit</button>
    </div>

</form>
</div>

<?php
include ('inc/footer.php');
?>