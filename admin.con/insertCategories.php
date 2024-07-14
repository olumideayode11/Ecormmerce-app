<?php
// i still want to rename the datab to camelcase
include("../includes/connection.php");
if(isset($_POST['insertCat'])){
$categories_title=$_POST['catTitle'];

// to select data from datab in-order to ro repeat same category
$select_query="select * from `categories` where categories_title= '$categories_title'";
$result_select=mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
  echo "<script> alert('Categories Already Exit')</script>";
}else{

  
$insert_query="insert into `categories` (categories_title) values('$categories_title')";
$result=mysqli_query($conn,$insert_query);
if ($result) {
  // echo "inserted";
  echo "<script> alert('Inserted Successfully')</script>";
}
}}

?>



<form action="" method="POST" class="mt-2">
<div class="input-group w-75 mb-2">
  <span class="input-group-text bg-danger " id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="catTitle"
   placeholder="Insert Category" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-25 mt-2 me-auto ">
  <button class="btn btn-danger " name="insertCat">Insert Categories</button>
</div>

</form>