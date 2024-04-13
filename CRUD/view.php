<?php include('config/db.php')?>
<?php include('inc/header.php')?>
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
    <div class="container mt-5">
        <div class="row">
            <div class="form-group">
                <label class="col-lg-2 control-label text-info" for="">Title</label>
                <div class="col-lg-6">
                    <p class="text-dark"><?php echo $title; ?></p>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-lg-2 control-label text-info" for="">Description</label>
                <div class="col-lg-6">
                    <p class="text-dark"><?php echo $description; ?></p>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-lg-2 control-label text-info" for="">Category</label>
                <div class="col-lg-6">
                    <p class="text-dark"><?php echo $category; ?></p>
                </div>
                
            </div>

            <div class="row mt-5">
            <div class="form-group">
                <div class="col-lg-6">
                    <a href="index.php" class="btn btn-info">Home</a>
                </div>
                
            </div>
        </div>
    </div>

<?php include('inc/footer.php')?>