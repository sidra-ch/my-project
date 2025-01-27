<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../boot_css.php'?>
  <link rel="stylesheet" href="../style.css">
   <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/174/174847.png" type="image/x-icon">
  <title>Admin || view-Categories</title>
  </head>
  <body>
    
  <div class="p-0 m-0" style="background-color: #d4d4d4 ;" >
<?php include './admin-nav.php'?>
<div class="row">
  <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
    <?php include './admin-sidebar.php'?>
  </div>
 <div class="col-xl-10 p-5 col-lg-9 col-sm-8 col-md-8">
  <div class="container">
    <div class="card shadow-lg p-4 border-0">
      <div class="d-flex justify-content-between align-items-center">
        <form>
          <input type="search" class="form-control" placeholder="search">
           </form>
           <a href="./add-categories.php" class="btn text-white fw-semibold" style="background-color: #f27427;"><i class="bi bi-plus"></i>Add catagory</a>
      </div>
      <div class="table-responsive my-4"  style="overflow-y:scroll;">
        <table class="table text-capitalize table-striped">
          <thead>
            <tr class=" text-secondary">
              <td class="text-secondary"><input type="checkbox" name="" class="form-check" id=""></td>
              <td class="text-secondary">total product</td>
              <td class="text-secondary">total earning</td>
              <td class="text-secondary">action</td>
              <td class="text-secondary">categories</td>
            </tr>
          </thead>
    <tbody>
        <!-- get data from tht backened -->
         <?php include '../config.php'; 
         $select ="SELECT * FROM category";
         $result = mysqli_query($connection, $select);
            foreach($result as $item){
          ?>
            <tr>
        <td><input type="checkbox" name="" class="form-check" id=""></td>
        <td>
          <div class="d-flex gap-3">
            <img width="50px" height="50px" style ="object-fit:contain" src="../category_images/<?php echo $item['image']?>"class="border; rounded-2 p-1" alt="">
            <div class=" d-flex flex-column">
              <h6> <?php echo $item['name'] ?></h6>
              <p class="text-secondary m-0 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing saepe.</p>
            </div>
          </div>
        </td>
        <td class="text-secondary">
          12,586
        </td>
        <td class="text-secondary">$98,495 </td>
        <td>
          <div class="d-flex gap-3">
            <i class="bi bi-pencil-square"></i>
            <i class="bi bi-three-dots"></i>
          </div>
        </td>
      </tr>
    </tbody>
    <?php  } 
     ?>
        </table>
      </div>
</div>
</div>
  </div>
 </div>
</div>




<?php include '../boot.js.php'?>

  </body>