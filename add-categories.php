
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../boot_css.php'?>
  <link rel="stylesheet" href="../style.css">
   <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/174/174847.png" type="image/x-icon">
  <title>Admin Dashboard || Categories</title>
  <style>
    body{
      overflow-x: hidden;
    }
  </style>
</head>
<body>
   
  <?php

include '../popup.php';
            displayMessage('success-category' , 'green');
?>

    


  <div class="p-0 m-0" style="background-color: #d4d4d4 ;" >
<?php include './admin-nav.php'?>
<div class="row">
  <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
    <?php include './admin-sidebar.php'?>
  </div>
  <div class="col-xl-10 p-5 d-flex align-items-center justify-content-center col-lg-9 col-sm-8 col-md-8">
 <form class="p-5 col-lg-6 mx-auto shadow bg-white rounded-3" action="./add-category-data.php" method="Post" enctype="multipart/form-data">
  <h2 class="text-center display-5">
    Add catogry
  </h2>
  <div class="form-group">
    <label for="Name" class="form-label">Category Name</label>
    <input type="text" name="name" placeholder="Enter Category..." class="form-control" >
  </div>
  <div class="form-group">
    <label for="Name" class="form-label">Category Image</label>
    <input type="file" name="image" placeholder="Enter Category..." class="form-control" >
  </div>
  <button class="btn text-white fw-semibold" style="background-color: var(--color-logo);" >Add catogries</button>
 </form>
  </div>
</div>

</div>


<?php include '../boot.js.php'?>



</body>
</html>