<!-- 
v 10-11 -->

<?php
// i still want to rename the datab to camelcase
include("../includes/connection.php");
if(isset($_POST['insertBrand'])){
$brand_title=$_POST['catBrand'];

// to select data from datab in-order to ro repeat same category
$select_query="select * from `brands` where brand_title= '$brand_title'";
$result_select=mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
  echo "<script> alert('Brand Already Exit')</script>";
}else{

  
$insert_query="insert into `brands` (brand_title) values('$brand_title')";
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
  <input type="text" class="form-control" name="catBrand"
   placeholder="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-25 mt-2 me-auto ">
  <button class="btn btn-danger "name="insertBrand">Insert Brand</button>
</div>

</form>