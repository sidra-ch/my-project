<?php 
session_start();
include '../config.php';

 $name = $_POST['name'];
 
 $filename = $_FILES['image']['name'];
 $tmp_name = $_FILES['image']['tmp_name'];

 move_uploaded_file($tmp_name, '../category_images/' .$filename);
 
 
 $insert = "INSERT INTO category (name, image) VALUES ('{$name}' , '{$filename}')";
 
 $result = mysqli_query($connection,$insert);

if($result){
         $_SESSION['success-category'] = 'category added successfully!';
}




  header("Location: $base_url/admin/add-categories.php");
 ?>