<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <link rel="stylesheet" href="../fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <style>
        .admin-img {
            width: 100px;
            object-fit: contain;

        }
    </style>
    <!-- admin navbar -->
    <div class="container-fluid p-0  ">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container">
                <a class="navbar-brand " href="#">
                    LOGO
                </a>
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-link ">Welcome guest</li>
                    </ul>
                </nav>
            </div>
        </nav>


        <div class="bg-light ">
            <h3 class="text-center ">update details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-2 d-flex align-items-center ">

                <div class="px-5">
                    <a href=""><img src="../images/adminpic.png" alt="" class="admin-img">
                    </a>
                    <p class="text-center  ">admin name</p>
                </div>
                <div class="button text-center pt-1 ">
                    <button class="my-2 "><a href="insertProducts.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insertCategory" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insertBrand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments </a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
            <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
            
        </div>

    </div>

    <div class="container my-5">
        <?php 
    if (isset($_GET['insertCategory'])) {
        include('insertCategories.php');
    }; 
    if (isset($_GET['insertBrand'])) {
        include('insertBrands.php');
    }
        
        ?>
    </div>

    <script src="/sigup/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>