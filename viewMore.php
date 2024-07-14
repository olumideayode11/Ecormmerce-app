<?php
include('includes/connection.php');
include('functions/functions.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>


<body class="body">

    <style>
        .body {
            overflow-y: auto;
            overflow-x: hidden;
        }

        .body::-webkit-scrollbar {
            max-width: px;
        }

        .body::-webkit-scrollbar-track {
            background: #f3f3f3;
            border-radius: px;
        }

        .body::-webkit-scrollbar-thumb {
            background: #a3a3a6;
            border-radius: px;
        }

        .body::-webkit-scrollbar-thumb:hover {
            background: ;
            border-radius: px;
        }
        #serachbar {
            width: 360px;
            box-shadow:none;
            border-color: #d9d9d9;
            font-size: 13px;
        }
        #search{
            box-shadow:none
        }

        .logo-img {
            width: 100%;
            height: 40px;
            object-fit: contain;
            margin-top: ;
        }

        #profile {
            background-color: #EA6500;
            color: #fff;
            padding: 6px 12px;
            border-radius: 8px;
            border-color: #fff;
            box-shadow:none
        }

        .logo-img {
            width: 100%;
            height: 40px;
            object-fit: contain;
            margin-top: ;

        }   @media screen and (min-width:430px) {
            .navba {
                position: sticky;
                top: 0;
                z-index: 999;

            }
        }

        .product-keyword{
            font-size: 12px;
            font-weight: 500;
        }
        .brand{
            font-size: 15px;
            font-weight: 600;
        }
        .product-price{
            font-size: 15px;
            font-weight: 600;
        }
        .card-img1  {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }
        #addtocart-logo{ 
            color: #514D4D;
        }
        #addtocart-logo:hover {
           color:#EA6500;
           /* font-size: 0.9rem; */
           transition-duration: s;
           font-weight: 600;
           
       }

       .cart{
   height: 20px;
   width: 20px;
     
        background-color: #EA6500;
         display:flex;
        justify-content: center;
        color: white; 
 
        cursor: pointer;
       }
    </style>
    <div class='navba'>
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <div class="container-fluid ms-4 me-4 ">
                <a class="navbar-brand" href="index.php"><img src="./images/Routta Logo resize.png" class="logo-img"
                        alt="logo"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="getAllProduct.php">All Products</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:</a>
                        </li>
                    </ul>

                    <form class="d-flex my-2 my-lg-0 " action="searchProduct.php" method='GET'>
                        <input class="form-control me-sm-2" id="serachbar" name="searchDataProduct" type="search"
                            placeholder="Search Products, Brands and Categories " />
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button> -->
                        <input type="submit" value="Search" name="searchProduct" class="btn btn-outline-secondary"id='search'>
                        <div class="dropdown ms-2">
                            <button class="btn btn-secondary dropdown-toggle" id='profile' type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i> Profile
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../Ecormmerce/users/signup.php">Sign Up</a></li>
                                <li><a class="dropdown-item" href="#">
                                        <div type="button" class="" data-bs-toggle="modal" data-bs-target="#modalId">
                                            Login
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item" href="#">My Orders</a></li>
                                <li><a class="dropdown-item" href="#">More Services</a></li>
                            </ul>
                        </div>
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus" id='addtocart-logo'></i></a>
                        <span
                                        class="cart  text-center  translate-middle  badge rounded-circle   "
                                    >
                                        0
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                    </form>
                  
                </div>
            </div>
        </nav>

        <style>
            #welcome-note {
                background-color: #6d057c
            }
        </style>
        <!-- welcome note -->
        <nav class="navnav navbar-expand-lg navbar-dark " id="welcome-note">
            <!--  bg-secondary  -->

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Quest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">welcome login</a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- carousel, Brand and the categories-->

    <div class="text-center mb-2 ">
        <h3>PRODUCT</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
    </div>

    <!-- For the card -->
    <div class='container'>
        <div class='row d-flex  justify-content-center '>


        <style>
            #increment-btn,
            #decrement-btn {
                background-color: #d9d9d9;
                color: #000;
                font-size: 0.8rem;
                border-color: #fff;
                width: 11%;
                height: 100%;
                font-weight: 500;
                box-shadow:none
               
            }
            
           #increment-btn:hover,
            #decrement-btn:hover { 
          background-color:#EA6500;
           /* font-size: 0.9rem; */
           transition-duration: s;
           font-weight: 700;
           color: rgb(255, 255, 255);
          
       }
       .dropdown-item{
          font-size: 0.9rem;
       }
       .dropdown-item:hover { 
          background-color:#d9d9d9;
           /* font-size: 1rem; */
           transition-duration: s;
           font-weight: 400;
          color: black;
       }   
        </style>

            <?php

  if(isset($_GET['product_id'])){
if(!isset($_GET['categories'])){
if(!isset($_GET['brands'])){ 
    $productId=$_GET['product_id']; 
$select_query="SELECT * FROM `products` where product_id=  $productId";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $productId=$row['product_id'];
    $productTitle=$row['product_title'];
    $productDescription=$row['product_description'];
    $productKeyword=$row['product_keyword'];
    $productImage1=$row['product_img1'];
    $productImage2=$row['product_img2'];
    $productImage3=$row['product_img3'];
    $productPrice=$row['product_price'];
    $productCategory=$row['categories_title'];
    $productBrand=$row['brand_title'];

  echo "
  
  <div class='container mb-5'>
  <div class='row mt- d-flex justify-content-center'>

    <div class='col-md-6  mt-3 mb-5 ' >
    
        <div class='card mt-4 '  style='width: 600px; '>
            <div class='row '>
                <div class='col-sm-6'>
                    <img class='card-img1' src=' ./admin.con/productImages/$productImage1' alt='$productTitle'>
                </div>
                <div class='col-sm-6'>
                    <div class='card-body'>
                        <h5 class='card-title'>$productTitle</h5>
                        <p>$productDescription</p>
                        <p class='product-keyword'>$productKeyword</p>
                        <p> <b class='brand'>Brand:</b> $productBrand</p>
                        <div class='d-flex justify-content-between '>
                             <p class='product-price'>Price: $$productPrice</p>
                             <a href='#'class='btn' id='addtocart'>addToCart</a>
                       </div>
                       <div class='d-flex align-items-center gap-3'>
                       <button class='btn btn-sm btn-primary' id='decrement-btn'>-</button>
                       <b class='fw-normal ' id='counter-value'>1</b>
                       <button class='btn btn-sm btn-primary ' id='increment-btn'>+</button>
                     
                   </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    
    
    <div class='col-6'>
    
   
       <div class='row ms-5 d-flex  justify-content-center'>
            <div class='col-6' style='width: 350px; height: 300px; '>
              <img class='card-img' src='./images/Related Display.png ' alt='Suresh Dasari Card'>
            </div>
      
       </div> 
    </div> 


  <div class='col-6'>
    <div class='row'>
            <div class=''>
               <h5 class='text text-center '>Related Images</h5>
            </div> 
        <div class='row d-flex  justify-content-center'>
             <div class='col-6' style='width: 130px; height: 150px; '>
               <img class='card-img' src=' ./admin.con/productImages2/$productImage2' alt=''>
             </div> 
            <div class='col-6' style='width: 130px; height: 150px; '>
               <img class='card-img' src=' ./admin.con/productImages3/$productImage3' alt=''>
             </div>
       
        </div> 
    </div> 
  </div>

 </div> 
 </div>
   " ;
  

}}}}
  ?>


            <!-- to display the products -->
            <?php
//   calling the function for the product
// getting all product


   getUniqueCategory();
   getUniqueBrand();

   login()
//    the normal code without creating it as function!

// $select_query="SELECT * FROM `products` order by rand() LIMIT 0,5";
// $result_query=mysqli_query($conn,$select_query);
// while($row=mysqli_fetch_assoc($result_query)){
//     $productId=$row['product_id'];
//     $productTitle=$row['product_title'];
//     $productDescription=$row['product_title'];
//     $productImage=$row['product_img1'];
//     $productPrice=$row['product_price'];
//     $productCategory=$row['categories_title'];
//     $productBrand=$row['brand_title'];
  
// echo " 

// <div class='col-md-3 mb-3 '>
// <div class='row'>
// <div class='card' style=''>
// <img src='./admin.con/productImages/$productImage' alt='$productImage' >
// <div class='card-body'>
//     <h5 class='card-title '>   $productTitle</h5>
//     <p class='card-text'>Some quick example text to build on the card title and make up the bulk of
//         the card's content.</p>
//     <p>  <b>$$productPrice</b></p>
//      <div class='d-flex justify-content-between '>
//         <a href='#'class='btn btn-success'>addToCart</a>
//         <a href='#' class='text-muted text-decoration-none me-1 mt-2'> <i>View More</i></a>
//      </div>
    
// </div>
// </div>
// </div>
// </div>";

// }
    ?>
        </div>
    </div>

    <!-- card for the static data -->

    <!-- <div class="row   ">
            <div class="col-md-3 ">
                <div class="card" style="width: 22rem;">
                    <img src="/Ecormmerce/images/caro1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">addToCart</a>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div> -->


    <!-- footer -->

    <?php
  footer();
    ?>
 <script>
        let counter = 0;

const counterValue = document.getElementById('counter-value');
const incrementBtn = document.getElementById('increment-btn');
const decrementBtn = document.getElementById('decrement-btn');
// const resetBtn = document.querySelector('#reset');

// To increment the value of counter
incrementBtn.addEventListener('click', () => {
    counter++;
    counterValue.innerHTML = counter;
});

// To decrement the value of counter
decrementBtn.addEventListener('click', () => {
    counter--;
    counterValue.innerHTML = counter;
});

// To reset the counter to zero
// resetBtn.addEventListener('click', reset);

// function reset() {
//     counter = 0;
//     counterValue.innerHTML = counter;
// }
    </script>
    <script src="/sigup/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>