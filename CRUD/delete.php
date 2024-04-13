<?php  include("config/db.php");
        $id = $_GET['id'];
        $sql = "DELETE FROM crudapp WHERE id = '$id'";
        $query = $con->query($sql);
        if($query)
            header("location:index.php");
        

?> 