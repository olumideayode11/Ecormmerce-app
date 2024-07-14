<style>
  #addtocart {
    background-color: #EA6500;
    color: #fff;
    padding: 7px 15px;
    border-radius: 10px;
    box-shadow: none;
  }

  #addtocart:hover {

    /* font-size: 0.9rem;  */
    transition-duration: s;
    font-weight: 500;

  }

  .card-img1 {
    width: 100%;
    height: 150px;
    object-fit: contain;
  }

  .product-desc {
    font-size: 12px;
    font-weight: 500;
  }

  .product-title {
    font-size: 15px;
    font-weight: 500;
  }

  .price {
    font-size: 16px;
    font-weight: 400;
  }

  .v-more {
    font-size: 13px;
    font-weight: 400;

  }
</style>

<?php
include('./includes/connection.php');


// function for geting the all product
function getproducts(){
    
global $conn;
if(!isset($_GET['categories'])){
if(!isset($_GET['brands'])){  
$select_query="SELECT * FROM `products` order by rand() LIMIT 0,16";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $productId=$row['product_id'];
    $productTitle=$row['product_title'];
    $productDescription=$row['product_description'];
    $productImage=$row['product_img1'];
    $productPrice=$row['product_price'];
    $productCategory=$row['categories_title'];
    $productBrand=$row['brand_title'];
  
echo "

 <div class='col-md-3 mb-3 '>
  <div class='row'>

    <div data-aos='fade-out' data-aos-duration='1000'>

      <div class='card' >

        <img class='card-img1' src='./admin.con/productImages/$productImage' alt='$productImage' >
      <div class='card-body'>
          <h5 class='product-title '>   $productTitle</h5>
          <h5 class='product-desc'> $productDescription </h5>
          <h5 class='price'>  <b>$$productPrice</b></h5>
        <div class='d-flex justify-content-between '>
          <a href='#'class='btn btn-sm ' id='addtocart'>addToCart</a>
          <a href='viewMore.php?product_id=$productId' class='text-muted text-decoration-none me-1 mt-2  '> <i class='v-more'>View More</i></a>
        </div>

      </div>
     </div>

   </div>

 </div>
</div>
"; 

}
}
}
}


//getting unique categories

function getUniqueCategory(){

    global $conn;

    if(isset($_GET['categories'])){
    $categoryTitle=$_GET['categories'];
    $select_query="SELECT * FROM `products` WHERE categories_title='$categoryTitle'";
    // to display if notting is in the category start!
    $result_query=mysqli_query($conn,$select_query);
    $row=mysqli_fetch_assoc($result_query);
    if($row==0){
        echo " <img class='card-img1' src='./images/opps.png' alt='' >
        <h4 class='text-center text-danger'>No product availabe in this category<h4/>";
    }
    // end
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $productId=$row['product_id'];
        $productTitle=$row['product_title'];
        $productDescription=$row['product_description'];
        $productImage=$row['product_img1'];
        $productPrice=$row['product_price'];
        $productCategory=$row['categories_title'];
        $productBrand=$row['brand_title'];
      
    echo "
<div class='col-md-3 mb-3 '>
  <div class='row'>
    <div data-aos='fade-out' data-aos-duration='1000'>
      <div class='card' >
       <img class='card-img1' src='./admin.con/productImages/$productImage' alt='$productImage' >
       <div class='card-body'>
         <h5 class='product-title '>   $productTitle</h5>
           <h5 class='product-desc'> $productDescription </h5>
           <h5 class='price'>  <b>$$productPrice</b></h5>
          <div class='d-flex justify-content-between '>
           <a href='#'class='btn btn-sm ' id='addtocart'>addToCart</a>
           <a href='viewMore.php?product_id=$productId' class='text-muted text-decoration-none me-1 mt-2  '> <i class='v-more'>View More</i></a>
          </div>
      </div>
     </div>
    </div>
  </div>
</div>";
    
    }
    }
    }
    
    //getting unique brands

    function getUniqueBrand(){

        global $conn;
    
        if(isset($_GET['brands'])){
        $brandTitle=$_GET['brands'];
        $select_query="SELECT * FROM `products` WHERE brand_title='$brandTitle'";
        // to display if notting is in the brand start!
        $result_query=mysqli_query($conn,$select_query);
        $row=mysqli_fetch_assoc($result_query);
        if($row==0){
            echo "<img class='card-img1' src='./images/opps.png' alt='' >
             <h4 class='text-center text-danger'>No Brand available <h4/>";
        }
        // end
        $result_query=mysqli_query($conn,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $productId=$row['product_id'];
            $productTitle=$row['product_title'];
            $productDescription=$row['product_description'];
            $productImage=$row['product_img1'];
            $productPrice=$row['product_price'];
            $productCategory=$row['categories_title'];
            $productBrand=$row['brand_title'];
          
        echo " 
       
 <div class='col-md-3 mb-3 '>
 <div class='row'>
 
 <div data-aos='fade-out' data-aos-duration={1000}>
 
 <div class='card' >
 
 <img class='card-img1' src='./admin.con/productImages/$productImage' alt='$productImage' >
 <div class='card-body'>
     <h5 class='product-title '>   $productTitle</h5>
     <h5 class='product-desc'> $productDescription </h5>
         <h5 class='price'>  <b>$$productPrice</b></h5>
         <div class='d-flex justify-content-between '>
         <a href='#'class='btn btn-sm ' id='addtocart'>addToCart</a>
         <a href='viewMore.php?product_id=$productId' class='text-muted text-decoration-none me-1 mt-2  '> <i class='v-more'>View More</i></a>
        </div>
      
     
  
 
 </div>
 </div>
 
 </div>
 
 </div>
 </div>";
        
        }
        }
        }
        

        // for getting search product

        function searchProduct(){
    
          
            global $conn;
            if(isset($_GET['searchProduct'])){
                $search_data=$_GET['searchDataProduct'];
             $search_query="select * from `products` where categories_title like '%$search_data%'||
             brand_title  like '%$search_data%' || product_title  like '%$search_data%'";
             $result_query=mysqli_query($conn,$search_query);
             $row=mysqli_fetch_assoc($result_query);
             if($row==0){

                // still want to design pop up meesage for this! V21
                 echo " <img class='card-img1' src='./images/opps.png' alt='' >
                  <h4 class='text-center text-danger '>There are no results for $search_data <h4/>";
             }
            $result_query=mysqli_query($conn,$search_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $productId=$row['product_id'];
                $productTitle=$row['product_title'];
                $productDescription=$row['product_description'];
                $productImage=$row['product_img1'];
                $productPrice=$row['product_price'];
                $productCategory=$row['categories_title'];
                $productBrand=$row['brand_title'];
              
            echo "
           
 <div class='col-md-3 mb-3 '>
   <div class='row'>
     <div data-aos='fade-out' data-aos-duration={1000}>
      <div class='card' >
         <img class='card-img1' src='./admin.con/productImages/$productImage' alt='$productImage' >
       <div class='card-body'>
            <h5 class='product-title '>   $productTitle</h5>
            <h5 class='product-desc'> $productDescription </h5>
            <h5 class='price'>  <b>$$productPrice</b></h5>
          <div class='d-flex justify-content-between '>
           <a href='#'class='btn btn-sm ' id='addtocart'>addToCart</a>
           <a href='viewMore.php?product_id=$productId' class='text-muted text-decoration-none me-1 mt-2  '> <i class='v-more'>View More</i></a>
         </div>
       </div>
     </div>
    </div>
   </div>
</div>";
            
            }
        }    
        }

            // getting all the product in PRODUCT navbar
        function getAllproducts(){
    
            global $conn;
            if(!isset($_GET['categories'])){
            if(!isset($_GET['brands'])){  
            $select_query="SELECT * FROM `products` order by rand()";
            $result_query=mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $productId=$row['product_id'];
                $productTitle=$row['product_title'];
                $productDescription=$row['product_description'];
                $productImage=$row['product_img1'];
                $productPrice=$row['product_price'];
                $productCategory=$row['categories_title'];
                $productBrand=$row['brand_title'];
              
            echo " 
            
          
 <div class='col-md-3 mb-3 '>
 <div class='row'>
 
 <div data-aos='fade-out' data-aos-duration='1000'>
 
 <div class='card' >
 
 <img class='card-img1' src='./admin.con/productImages/$productImage' alt='$productImage' >
 <div class='card-body'>
     <h5 class='product-title '>   $productTitle</h5>
     <h5 class='product-desc'> $productDescription </h5>
         <h5 class='price'>  <b>$$productPrice</b></h5>
         <div class='d-flex justify-content-between '>
         <a href='#'class='btn btn-sm ' id='addtocart'>addToCart</a>
         <a href='viewMore.php?product_id=$productId' class='text-muted text-decoration-none me-1 mt-2  '> <i class='v-more'>View More</i></a>
        </div>
      
     
  
 
 </div>
 </div>
 
 </div>
 
 </div>
 </div>";
            
            }
            }
            }
            }


            // add to cart function

            function addtocart(){

            }

            
            function login(){

              echo "
              <style>
              .password {
                  position: relative;
              }

              .eye-icon {
                  font-size: 12px;
                  color: #8b8b8b;
                  position: absolute;
                  top: 45%;
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

          <div class='modal fade' id='modalId' tabindex='-1' data-bs-backdrop='static' data-bs-keyboard='false'
              role='dialog' aria-labelledby='modalTitleId' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm' role='document'>
                  <div class='modal-content'>
                      <div class='modal-header'>
                          <h5 class='modal-title text-dark' id='modalTitleId'>
                              login
                          </h5>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='modal-body'>
                          <div>
                              <form METHOD='POST' class='row'>
                                  <div>
                                      <label for='' class='form-label text-dark'>Email</label>
                                      <input class='form-control ' type='text' name='email'>
                                  </div>

                                  <div>
                                      <label for='' class='form-label text-dark'>Password</label>
                                      <input class='form-control' type='text' name='password'>
                                      <FaEyeSlash class='EyeIcon' /> <i class='eye-icon fa-solid fa-eye-slash'></i>
                                  </div>
                                  <div class='d-flex justify-content-between '>
                                      <style>
                                          #ckeckbox {
                                              width: 10px;
                                              height: 10px;
                                              /* accent-color: #EA6500; */
                                          }
                                          .register{
                                              font-weight:00;
                                              font-size: 13px;
                                              color:#212529
                                         }
                                          a{
                                               text-decoration:none;
                                            }
                                      </style>
                                      <div class=''>
                                          <input class='mt-' type='checkbox' id='ckeckbox' name='' value=''>
                                          <a id='remember-forgot' type='checkbox' href=''><small>Remember
                                                  me</small></a>
                                      </div>

                                      <a id='remember-forgot' href=''><small>Forgot Password</small></a>
                                  </div>
                                  
                                  <button class='btn btn-dark mt-3 w-50 m-auto' id='btn'name='Login'>login</button>
                                  <div class='register text-center mt-2' >Don't have an account? <a href='./users/signup.php'> Register</a></div>
                          </div>
                          
                      </div>
                      <div class='modal-footer d-flex justify-content-center'>
                          <img class=' d-flex justify-content-center ' id='footer-img'
                              src='images/Routta Logo resize.png' alt='' />

                      </div>
                  </div>
              </div>
          </div>
      </div>
";
            }
       
            
// Footer
            function footer(){
               echo"
               <style>
               .footer{
                   background-color:#6d057c
               }
               .footer-img {
           width: 90%;
           height: 90px;
           object-fit: contain;
           margin-top:-1.4rem ;
           position: absolute;
           top: rem;
       
           right: 6.5rem;
       
           display: inline-block;
       }
       
       .qwer {
           
           position: relative;
       }
       
       h6 {
           display: inline-flex;
           font-family: Georgia, 'Times New Roman', Times, serif;
       margin-left: 4rem;
       }
       .last{
           position: relative;
           top: rem;
       
           right: 1rem;
       
          
       } 
       .subs {
       
           display: flex;
           align-items: center;
           justify-content: space-between;
           background-color: rgb(255, 255, 255);
           border-radius: 10px;
           width: 20rem;
           height: 2rem;
           padding: rem;
           font-size: smaller;
       }
       
       input {
           background: transparent;
           outline: none;
           border: none;
           padding: 0.6rem;
       }
       
       .ads {
           outline: none;
           border: none;
           background: rgb(108, 117, 125);
           border-radius: 10px;
           padding: 0.7rem;
           padding-right: px;
           color: rgb(255, 255, 255);
           height: 1.8rem;
           display: flex;
          align-items: center;
         
           /* transition: all 3s ease-in-out; */
           /* font-size: large;
           font-weight:400; */
       }
       
       #btn:hover {
        background-color:#EA6500;
           font-size: 0.9rem;
           transition-duration: s;
           font-weight: 600;
           color: rgb(255, 255, 255)
       }
       .lorem{
          font-size: 14px; 
         padding-top: 
       }
       .fa-brands {
           width: 8%;
           height: %;
           object-fit: contain;
           font-size:25px;
           color:#fff;
           margin: 25px 0;
           margin-right:
           
       }
       
           </style>
       
           <div class=' footer main footer mt-5 text-light  '>
             <div class='container pt-5  '>
               <div class='row  ' >
       
                 <div class='qwer col-md-3'>

                   <div class=' mb-5 '>
                      <!-- //  <h6>  <img  src='./images/Routta Logo white.png' alt='...' > </h6> -->
                      <img class='footer-img p-4  mb-1 pb-4' src='./images/Routta Logo white.png' alt='' />
                      <!-- {/* <img class='img px-2 ' src='./images/logo2.png' alt='' style={{maxWidth:  '180px '}} /> */} -->
                   </div>

                   <div class='lorem '>
                     <small class=''>Lorem, ipsum dolor sit amet Sint  </small><br />
                     <small>consectetur adipisicing ipsum elit. </small> <br />
                     <small>Numquam, harum. Sintnemo iure</small> <br /><small> reiciendis  harum illo nemo!</small>
                   </div>
       
                 </div>
       
                 <div class='col-md-2  '>
                   <h5>Quick Links</h5>
                   <ul class='list-unstyled '>
                     <li>About Us</li>
                     <li>Services</li>
                     <li>Project</li>
                     <li>Blog</li>
                   </ul>
                 </div>
       
                 <div class='col-md-3'>
                   <h5>Contact Us </h5>
                   <ul class='list-unstyled '>
                     <li><i class='fa-solid fa-location-dot'> </i>&ensp; 99B Devonshire Ave,camp Hill,<br />TX 473456</li>
                     <li> <i class='fa-solid fa-envelope'></i> example@gmain.com</li>
                     <li> <i class='fa-solid fa-phone-volume'></i>&ensp;573-357-6986</li>
                   </ul>
       
                 </div>
       
                 <div class='last col-md-4 justify-content-bottom '>  Sign up for more updates
                   <div class='subs'>
                     <input type='text' placeholder='Enter your email address' />
                     <button id='btn' class=' ads  ' type='submit'>Subscribe </button>
                   </div>
                      <style>
                      #policy{
                        font-size: 10px;
                      }

                      #terms{
                        font-size: 10px;
                        color: #EA6500;
                      }
                      #fa-brands{
                         margin-left: 200px;
                      }
                      #ckeckbox{
                        width:12px;
                        height: 12px;
                        accent-color: #EA6500;
                      }
                      
                      </style>
                   <div class='mt-1 ms-1' >
                   <input  class='mt-'type='checkbox' id='ckeckbox' name='' value=''>
                       <small class='mt-'id='policy'>I agree to Routta’s Privacy and Cookie Policy.</small> <br/>
                       <small class='ms-3' id='terms'>I accept the legal terms.</small>
                   </div>


         <div class='ms-3 mb-5  'id='fa-brands' >
           <a href='#' ><i class='fa-brands fa-dribbble'></i></a>&ensp; 
           <a href='#' ><i class='fa-brands fa-x-twitter'></i></a>&ensp; 
           <a href='#'><i class='fa-brands fa-linkedin'></i></a>&ensp; 
           <a href='#'><i class='fa-brands fa-square-facebook'></i></a> 
         </div>
                 </div>
       
               </div>
       
       
               <div class='row'>
                 <p class='col-sm  mt-3 text-center'> &copy;<i>Copyright </i> routta.com All rights reserved. <?php echo date('Y');?>
</p>
</div>


<!-- </div>
             <i class='  mt- d-flex justify-content-end  text-center'>Designed By Olumide</i>
           </div> -->";
}
?>