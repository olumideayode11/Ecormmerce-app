<?php
include("../includes/connection.php");
if(isset($_POST["insertProduct"])){

  $productTitle= $_POST['productTitle'];
  $productDescription= $_POST['productDescription'];
  $productKeywords= $_POST['productKeywords'];
  $productCategories= $_POST['productCategories'];
  $productBrands= $_POST['productBrands'];
  $productPrice= $_POST['productPrice'];
  $productStatus= 'true';
  
  // to access the images
   $productImage1=$_FILES['productImage1']['name'];
   $productImage2=$_FILES['productImage2']['name'];
   $productImage3=$_FILES['productImage3']['name'];

  // to access img tmp name
   $tempImage1=$_FILES['productImage1']['tmp_name'];
   $tempImage2=$_FILES['productImage2']['tmp_name'];
   $tempImage3=$_FILES['productImage3']['tmp_name'];

   $folder = 'productImages/'.$productImage1;
   $folder2 = 'productImages2/'.$productImage2;
   $folder3 = 'productImages3/'.$productImage3;
  // to check empty condition

  if($productTitle===''|| $productDescription==='' || $productKeywords===''|| $productCategories==='' 
      || $productPrice===''|| $productImage1==='' || $productImage2===''){
     echo " <script> alert('Fill all the fields')</script>";
    exit();
  }else{
      move_uploaded_file($tempImage1,"$folder");
      move_uploaded_file($tempImage2,"$folder2");
      move_uploaded_file($tempImage3,"$folder3");
    //  move_uploaded_file($tempImage2,"./productImages/$productImage2");
    // move_uploaded_file($tempImage3,"./productImages/$productImage3");

    // inserting to DB
    $insert_products="insert into `products` (product_title, product_description, product_keyword, 
      categories_title,brand_title,product_img1,product_img2,product_img3,product_price,status)
      values ('$productTitle', \"$productDescription\", \"$productKeywords\",'$productCategories',
      '$productBrands','$productImage1', '$productImage2', '$productImage3', '$productPrice','$productStatus')";
       $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        echo"<script> alert('successfully Uploaded.')</script>";
      
    }else{ echo"<script> alert(Failed to upload.')</script>";
    }
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="/Ecormmerce/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center">Insert Products</h2>

        <form action="" method="POST" enctype="multipart/form-data" >

            <!-- product title -->
    <div class="form-outline mb-3 w-50  mx-auto">
       <label for="" class="form-label">Product Title</label>
       <input type="text" class="form-control" name="productTitle"
        placeholder = "Enter Product Title" required="required">
  </div>

  <!-- product description -->
  <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="" class="form-label">Product Description</label>
       <input type="text" class="form-control" name="productDescription"
        placeholder = "Enter Product Description" required="required" autocomplete="off" >
  </div>

   <!-- product keywords-->
   <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="" class="form-label">Product Keywords</label>
       <input type="text" class="form-control" name="productKeywords"
        placeholder = "Enter Product Description" required="required" autocomplete="off" >
  </div>

   <!-- product description -->
 <div class="form-outline  w-50 mb-3 mx-auto">
  <select class="form-select " name="productCategories" >
      <option selected>Select Categories</option>

      <?php
$select_query="select * from categories ";
$result_query=mysqli_query($conn,$select_query);
while($row_data=mysqli_fetch_assoc($result_query)){
   $categories_title=$row_data['categories_title']; 
   $categories_id=$row_data['categories_id']; 
   echo "<option value='$categories_title'> $categories_title</option>";
}
   ?>
      <!-- <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option> -->
    </select>
</div>

  <!-- brand description -->
  <div class="form-outline  w-50 mb-3 mx-auto">
  <select class="form-select form-select-md" name="productBrands">
      <option selected>Select Brands</option>
      
      <?php
$select_query="select * from brands ";
$result_query=mysqli_query($conn,$select_query);
while($row_data=mysqli_fetch_assoc($result_query)){
   $brand_title=$row_data['brand_title']; 
   $brand_id=$row_data['brand_id']; 
   echo "<option value='$brand_title'> $brand_title</option>";
}
   ?>
    </select>
</div>

  <!-- IMG1 -->
  <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="productImage1" class="form-label">Product Image1</label>
       <input type="file" class="form-control" name="productImage1"
     required="required">
  </div>

   <!-- IMG2 -->
   <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="productImage2" class="form-label">Product Image2</label>
       <input type="file" class="form-control" name="productImage2"
     required="required" >
  </div>

   <!-- IMG3-->
   <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="productImage3" class="form-label">Product Image3</label>
       <input type="file" class="form-control" autocomplete="off" name="productImage3"
    >
  </div>

    <!-- product price-->
    <div class="form-outline  w-50 mb-3 mx-auto">
       <label for="" class="form-label">Product Price</label>
       <input type="text" class="form-control" name="productPrice"
        placeholder = "Enter Product Price" autocomplete="off" required="required">
  </div>   
    <!-- submit -->
  <div class="form-outline  w-50 mb-3 mx-auto">
      <input type="submit" name="insertProduct" class="btn btn-info"  value="Insert Product">  
     <!-- <button type="submit" class="btn btn-dark " 
    name="insertCat">Insert Product</button> -->
  </div>

 
      </form>
    </div>


    <script src="/Ecormmerce/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>