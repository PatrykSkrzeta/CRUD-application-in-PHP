<?php include('config/db.php')?>
<?php 
include ('inc/header.php'); ?>
<?php $id = $_GET['id'];
    $sql = "SELECT * FROM crudapp WHERE id = $id";
    $results = mysqli_query($con, $sql);

    if(mysqli_num_rows($results)){
        while($row = mysqli_fetch_assoc($results)){
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $category = $row['category'];
        }
    }
        
?>

<div class="container mx-auto">
    <h3 style="text-align: center;" class="pt-3 text-success">Update your post.</h3>
    <form class="mx-auto" action="update.php" method="POST">
        <input type="hidden" name="id" value=<?php echo $id; ?>>
    <div class=form-group>
        <div class="col-lg-7">
        <label for="title" class="form-label mt-4">Title</label>
      <textarea class="form-control" name="title" rows="1"><?php echo $title; ?></textarea>
        </div>
    </div>

    <div class=form-group>
        <div class="col-lg-7">
        <label for="description" class="form-label mt-4">Description</label>
      <textarea class="form-control" name="description" rows="19"><?php echo $description; ?></textarea>
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
    <button type="submit" name="update" class="btn btn-success">Submit</button>
    </div>

</form>
</div>

<?php
include ('inc/footer.php');
?>