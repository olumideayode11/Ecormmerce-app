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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/Ecormmerce/bootstrap-5.0.2-dist/aos.js"> -->

</head>


<body class="body p- ">

    <style>
        .body {
            background-color: #f1f1f1
                /* background:url(/Ecormmerce/images/ecommerce-bg.jpg) no-repeat center center fixed ;
  background-repeat: no-repeat;
    object-fit:contain;
   background-size: cover;
   background-position:center;
   height:100px */
        }

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
        }

        #scroll {
            /* max-height: 150px; */
            overflow-y: auto;

        }

        #scroll::-webkit-scrollbar {
            max-width: 6px;
        }

        #scroll::-webkit-scrollbar-track {
            background: #f3f3f3;
            border-radius: 3px;
        }

        #scroll::-webkit-scrollbar-thumb {
            background: #a3a3a6;
            border-radius: 3px;
        }

        #scroll::-webkit-scrollbar-thumb:hover {
            background: ;
            border-radius: 3px;
        }

        #categories-scroll {

            overflow-y: auto;
            overflow-x: hidden;
        }

        #categories-scroll::-webkit-scrollbar {
            max-width: 40px;
        }

        #categories-scroll::-webkit-scrollbar-track {
            background: #f3f3f3;
            border-radius: px;
        }

        #categories-scroll::-webkit-scrollbar-thumb {
            background: #a3a3a6;
            border-radius: px;
        }

        #categories-scroll::-webkit-scrollbar-thumb:hover {
            background: ;
            border-radius: px;
        }

        .carouselBrand {
            background: url(/Ecormmerce/images/ecommerce4.jpg) no-repeat center center;
            fixed background-repeat: no-repeat;
            object-fit: contain;
            background-size: cover;
            background-position: center;
            height: 430px
        }

        #profile {
            background-color: #EA6500;
            color: #fff;
            padding: 6px 12px;
            border-radius: 8px;
        }

        .logo-img {
            width: 100%;
            height: 40px;
            object-fit: contain;
            margin-top: ;

        }

        @media screen and (min-width:430px) {
            .navba {
                position: sticky;
                top: 0;
                z-index: 999;

            }
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus"></i></a>
                        </li> -->
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
                        <input type="submit" value="Search" name="searchProduct" class="btn btn-outline-secondary ">
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
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus"></i></a>

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

<style>
    .brand-cat{
        font-size: 17px;
        font-weight: 500;
    }
</style>

    <div class="carouselBrand ">
        <div class="row p-2 ms-1   ">
            <div class=" col-md-2 bg-light  " id="brand">
                <a class="mt-3 text-dark text-decoration-none navbar-nav me-auto text-center   " href="#">
                    <h5 class='brand-cat'> BRANDS</h5>
                </a>
                <!-- for searching of the brand start -->
                <!-- <form class="">
                    <div class="form-outline" data-mdb-input-init>
  <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
</div>
</form> end -->

                <ul class=" navbar-nav me-auto ms-2 " id="scroll">
                    <!-- <li class="nav-item">
                    <a class="nav-link  " href="#">
                        <h5>Delivery Brand</h5>
                    </a>
                </li> -->

                    <?php
$select_brands="select * from brands order by rand()";

// to select a brand randomly and the limit 
// $select_brands="select * from Brands order by rand() limit 0,6";
$result_brands=mysqli_query($conn,$select_brands);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
   $brand_title=$row_data['brand_title']; 
   echo "<li class='mb-1'><a class=' text-muted text-decoration-none  ' href='index.php?brands=$brand_title'>$brand_title</a></li>";
}
   ?>

                    <!-- still want to remove the link to close the gap -->
                    <!-- from the front end!  -->

                    <!-- <li class="nav-item">
                    <a class="nav-link  " href="#">Brand1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">Brand1</a>
                </li> -->


                </ul>

                <a class="mt-3  text-dark text-decoration-none navbar-nav me-auto text-center   " href="#">
                    <h5 class='brand-cat'>CATEGORIES</h5>
                </a>
                <ul class="navbar-nav me-auto ms-2  " id="scroll">


                    <?php
$select_categories="select * from categories order by rand() limit 0,12";
$result_categories=mysqli_query($conn,$select_categories);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
   $categories_title=$row_data['categories_title']; 
   echo "<li class='mb-1'><a class=' text-decoration-none text-muted' href='index.php?categories=$categories_title'>$categories_title</a></li>";
}
   ?>

                    <!-- <li class="nav-item">
                    <a class="nav-link  " href="#">Brand1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">Brand1</a>
                </li> -->


                </ul>
            </div>

            <!-- Carousel -->
            <style>
                .carousel-indicators [data-bs-target] {
                    /* box-sizing: content-box; */
                    width: 6px;
                    /* change width */
                    height: 6px;
                    /* change height */
                    padding: ;
                    margin-right: 3px;
                    margin-left: 3px;
                    /* text-indent: -999px; */
                    /* cursor: pointer; */
                    background-color: #fff;
                    /* background-clip: padding-box; */
                    /* border: 0; */
                    /* border-top: 10px solid transparent; */
                    /* border-bottom: 10px solid transparent; */
                    /* opacity: .6px;  */
                    /* transition: opacity .6s ease; */
                    border-radius: 100%; // /* add border-radius */
                }
            </style>
            <div class="col-md-8 ">
            
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""
                            aria-current="true" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class=""
                            aria-current="true" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class=""
                            aria-current="true" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class=""
                            aria-current="true" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" class=""
                            aria-current="true" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" class=""
                            aria-current="true" aria-label="Slide 7"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="/Ecormmerce/images/CAROUSEL1.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL 2.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL3.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL4.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL5.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL6.png" class="d-block w-100 " alt="...">
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="/Ecormmerce/images/CAROUSEL7.png" class="d-block w-100 " alt="...">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class=" col-md-2 p-1 " id="">
                <div class=" addImg mb-3  me-2 ">
                 <a href="/Ecormmerce/users/signup.php"> <img src="./images/CAROUSEL ADVERT 1.png" class="w-100 " class="mb-5" alt="..."></a> 
                </div>
                <div class=" addImg me-2 mb-2  ">
                    <a class="" href="getAllProduct.php"><img src="./images/CAROUSEL ADVERT 2.png" class="w-100  "
                            alt="..."></a>

                </div>
            </div>
        </div>
        <style>
            .body #banner {
                width: 300vw;
                height: 30vh;
                object-fit: contain;
                background-size: 100% 100%;
                background-position: 100% 100%;
                /* background-image: url('/Ecormmerce/images/BANNER.png'); */
                /* width: 100%;
                height: 30px; */
                /* height: 25vh; */
                /* background-size: contain; */
                /* padding: rem;
                background-size: contain;
                background-image: url('/Ecormmerce/images/BANNER.png');
                background-repeat: no-repeat; */
            }

            .banner-img {

                /* width: %;
                height: 100%;
                object-fit: Contain;
                background-size: ;

                margin: 1rem; */
            }

            {
                border-radius: 50%;
                height: %;
                width: %;
object-fit: contain;
            }

            #banner-img {  
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 70px;
    width: 100px;
    background: #fff;
    object-fit: contain;
}
        </style>
    </div>

    

        <div class="container">
            <div class="row mt-3 d-flex justify-content-center  ">
                
                <div class="col-md-1 mt-2 gap-5 ms-3 " id="">
                    <div class=" ">
                        <img src="./images/Banner1.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Women</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5  ms-5 " id="">
                    <div class=" ">
                        <img src="./images/Banner2.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                        <p class='d-flex justify-content-center '> Men</p>
                    </div>
                   
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5  " id="">
                    <div class=" ">
                        <img src="./images/Banner3.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Kids</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5" id="">
                    <div class=" ">
                        <img src="./images/Banner4.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Gown</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5" id="">
                    <div class=" ">
                        <img src="./images/Banner5.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Sneakers</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5  ms-5" id="">
                    <div class=" ">
                        <img src="./images/Banner6.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>BeachWears</p>
                 </div>
                 <div class="col-md-1 mt-2 gap-5 ms-5 " id="">
                    <div class=" ">
                        <img src="./images/Banner7.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Perfumes</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5  ms-5 " id="">
                    <div class=" ">
                        <img src="./images/Banner8.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Groceries</p>
                 </div>

                 <div class="col-md-1 mt-2  gap-5 ms-3" id="">
                    <div class=" ">
                        <img src="./images/Banner9.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Accessories</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5 " id="">
                    <div class=" ">
                        <img src="./images/Banner10.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Gadget</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5 " id="">

                    <div class=" ">
                        <img src="./images/Banner11.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Heels</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5  " id="">
                    <div class=" ">
                        <img src="./images/Banner12.png" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                        <p class='d-flex justify-content-center '>Watches</p>
                    </div>
                    
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5 " id="">

                    <div class=" ">
                        <img src="./images/bag.jpg" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Furnitures</p>
                 </div>

                 <div class="col-md-1 mt-2  gap-5 ms-5 " id="">

                    <div class=" ">
                        <img src="./images/bag.jpg" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Liquor</p>
                 </div>

                  <div class="col-md-1 mt-2 gap-5  ms-5 " id="">
                    <div class=" ">
                        <img src="./images/bag.jpg" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Lingeries</p>
                 </div>

                 <div class="col-md-1 mt-2 gap-5 ms-5 " id="">
                    <div class=" ">
                        <img src="./images/bag.jpg" class="w-100 " class="mb-5 " id='banner-img' alt="...">
                    </div>
                    <p class='d-flex justify-content-center '>Crocs</p>
                 </div>
            </div>
            </div>
        </div>

            <div class="text-center mt-2 ">
                <h3>PRODUCT</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>

            <!-- For the card -->
            <div class='container'>
                <div class='row'>
                    

                    <!-- to display the products -->
                    <?php
//   calling the function for the product
// getting all product

   getproducts();

   getUniqueCategory();
   getUniqueBrand();
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

            <!-- This is for login page -->
            <style>
                .password {
                    position: relative;
                }

                .eye-icon {
                    font-size: 12px;
                    color: #8b8b8b;
                    position: absolute;
                    top: 50%;
                    right: 1.5rem;
                    cursor: pointer;
                }

                #remember-forgot {
                    text-decoration: none;
                    font-size: 14px;
                }

                #footer-img {
                    width: 40%;
                    height: 30px;
                    object-fit: contain;
                    margin-top: rem;

                    top: rem;
                }

                #btn:hover {
                    background-color: #EA6500;
                    font-size: 0.9rem;
                    transition-duration: s;
                    font-weight: 600;
                }
            </style>

            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="modalTitleId">
                                login
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <form class="row">
                                    <div>
                                        <label for="" class="form-label text-dark">Email</label>
                                        <input class="form-control " type="text">
                                    </div>

                                    <div>
                                        <label for="" class='form-label text-dark'>Password</label>
                                        <input class='form-control' type='text'>
                                        <FaEyeSlash class='EyeIcon' /> <i class="eye-icon fa-solid fa-eye-slash"></i>
                                    </div>
                                    <div class='d-flex justify-content-between '>
                                        <style>
                                            #ckeckbox {
                                                width: 10px;
                                                height: 10px;
                                                /* accent-color: #EA6500; */
                                            }
                                        </style>
                                        <div class=''>
                                            <input class='mt-' type='checkbox' id='ckeckbox' name='' value=''>
                                            <a id='remember-forgot' type='checkbox' href=""><small>Remember
                                                    me</small></a>
                                        </div>

                                        <a id='remember-forgot' href=""><small>Forgot Password</small></a>
                                    </div>
                                    <button class="btn btn-dark mt-3 w-50 m-auto" id="btn">login</button>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <img class=' d-flex justify-content-center ' id='footer-img'
                                src='images/Routta Logo resize.png' alt='' />

                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    </script>

<script src="/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="/sigup/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="/Ecormmerce/aos.js"></script>
        <script src="/Ecormmerce/purecounter_vanilla.min.js "></script>
        <script src="./bootstrap-5.0.2-dist/aos.js"></script>
        <script src="/Ecormmerce/bootstrap-5.0.2-dist/purecounter_vanilla.min.js "></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./bootstrap-5.0.2-dist/typed.js"></script>
    
</body>

</html>