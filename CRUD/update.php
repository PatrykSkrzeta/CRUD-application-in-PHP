<?php 
include('config/db.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    if ($title != '' && $description != '' && $category != ''){
        $sql = "UPDATE crudapp SET title = '$title', description = '$description', category = '$category' WHERE id = '$id'";
        $query = $con->query($sql);
        if($query){
            header('location:index.php');
        }
    }
        
    }
?> 