<?php 
include("inc/header.php");?>

<div class="container">
    <a href="create.php" class="btn btn-info mt-5">Create</a>
    <h3 style="text-align: center;">Main Branch Panel</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr class="table-info rounded-top">
      <th scope="col">S1. No.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include('config/db.php');?>

    <?php
    $sql = "SELECT * FROM crudapp";
    $results = mysqli_query($con, $sql);

    if(mysqli_num_rows($results)){
        while($row = mysqli_fetch_assoc($results)){
            ?>
      <tr class="table-light">
      <th><?php echo $row['id'];?></th>
      <td><?php echo $row['title'];?></td>
      <td><?php echo $row['description'];?></td>
      <td><?php echo $row['category'];?></td>
      <td>
      <a href="view.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-primary mx-1 px-2">View</a>
      <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-success mx-1 px-2">Update</a>
      <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger mx-2 px-2">Delete</a>
      </td>
    </tr>
            <?php

        }
    }else{
        ?>
        <tr><td> No records found<td> </tr>
        <?php
    }
    ?>

  </tbody>
</table>
</div>

<?php
include("inc/footer.php");
?>