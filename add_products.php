<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <?php include '../boot_css.php'?>
  
  <title>admin || add products</title>
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/174/174847.png" type="image/x-icon">

</head>
<body>





  <div class="p-0 m-0" style="background-color: #d4d4d4 ;" >
<?php include './admin-nav.php'?>
<div class="row">
  <div class="col-xl-2 p-0 col-lg-3 col-md-4 col-sm-4">
    <?php include './admin-sidebar.php'?>
  </div>
  <div class="col-xl-10 p-5 col-lg-9 col-sm-8 col-md-8">
    <form action="./add_products-data.php" method="POST" enctype="multipart/form-data">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex flex-column">
        <h3>Add a new products </h3>
        <p class="text-secondary">Order placed across your store</p>
      </div>
      <button class="btn text-white fw-semibold" style="background-color: #f27427"> <i class="bi bi-plus"></i>Publish Products</button>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card p-4 shadow border-0">
       <h4>Product Information</h4>
       <input type="text" placeholder="Product Name" class="form-control w-100">
       <div class="d-flex gap-2 align-items-center">
        <input type="color" placeholder="sku" class="form-control-color w-100 my-3">
        <input type="text" placeholder="Product Barcode" class="form-control my-3 w-100">
       </div>
       <label for="Description(optional)"></label>
       <div class="card p-4">
        <div class="card-header">
          <div class="d-flex gap-3">
         <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
              <i class="editor-option bi bi-type-bold"></i>
          </div>
            <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
             <i class=" editor-option bi bi-type-underline"></i>
          </div>
            <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
             <i class=" editor-option bi bi-type-strikethrough"></i>
          </div>
            <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
             <i class=" editor-option bi bi-text-left"></i>
          </div>
            <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
             <i class=" editor-option bi bi-text-right"></i>
          </div>
            <div class="d-flex  justisy-content-between align-itens-center" style="height:40px; width:40px;">
             <i class=" editor-option bi bi-justify"></i>
          </div>
          </div>
        </div>
       </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

</div>








<?php include '../boot.js.php' ?>
</body>
</html>