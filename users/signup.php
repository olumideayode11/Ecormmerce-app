<?php

include('../includes/connection.php');
if(isset($_POST["register"])){

  $firstName= $_POST['fname'];
  $lastName= $_POST['lname'];
  $email= $_POST['email'];
  $phoneNo= $_POST['phone'];
  $pwd= $_POST['password'];
  $hashpassword=password_hash($pwd,PASSWORD_DEFAULT); //hashing the password
  $confirmPassword= $_POST['confirmPassword'];


  if($firstName===''|| $lastName==='' || $email===''|| $phoneNo==='' 
  || $pwd===''){
 echo " <script> alert('Fill all the fields')</script>";
exit();
}
elseif($pwd!=$confirmPassword){
  echo "<script> alert('Password not match')</script>";
}
else{
  $select_query="select * from `users` where email= '$email'";
$result_select=mysqli_query($conn,$select_query);
$rows=mysqli_num_rows($result_select);
if($rows>0){
  echo "<script> alert('Email Already Exit')</script>";
}else{
  $insert_users="insert into `users` (first_name, last_name, email ,phone_no,pwd)
  values (' $firstName', '$lastName', '$email','$phoneNo',
  '$hashpassword')";
  $result_query=mysqli_query($conn,$insert_users);

 if($result_query){
  echo"<script> alert('successfully Resgistered.')</script>";
  echo "<script> window.open('/Ecormmerce/index.php','_self')</script>";
  //header('location:index.php?signup=empty');
}else{die("Registration failed: ". mysqli_connect_error());
}}
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="../fontawesome-free-6.5.2-web/css/all.min.css">
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

  <style>
    .imgsocial {
      width: 50%;
      height: 50px;
      object-fit: contain;
    }

    .social-container a {
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 5px;
      height: 40px;
      width: 40px;
      background: rgb(237, 238, 242);
    }

    .b:hover {
      background-color: #91f309;
    }
  </style>

  <div class='signup'>
    <div class='container mt-5  col- '>
      <form action="" method="POST" class='row d-flex justify-content-center align-content-center '>
        <h3 class="d-flex justify-content-center align-content-center mb-3  ">Create Account</h3>
        <div class='col-md-5 '>
          <label htmlFor="" class='form-label '>First Name</label>
          <input name="fname" type="text" class='form-control' placeholder='First Name' required="required"
            />
        </div>

        <div class='col-md-5 mb-2'>
          <label htmlFor="" class='form-label '>Last Name</label>
          <input name='lname' type="text" class='form-control' placeholder='Last Name' required="required"
            />
        </div>

        <div class='col-md-5 mb-2 '>
          <label htmlFor="" class='form-label'>Email</label>
          <input name='email' type="email" class='form-control' placeholder='Enter your email address'
            required="required" />
        </div>

        <div class='col-md-5 mb-2 '>
          <label htmlFor="" class='form-label'>Mobile No</label>
          <input name='phone' type="phone" class='form-control' placeholder='Phone No' required="required"
             />
        </div>

        <div class='Email col-md-5 mb-2'>
          <label htmlFor="" class='form-label'>Password </label>
          <input name='password' type="password " class='form-control ' placeholder='********' required="required"
            autocomplete='off' />
        </div>

        <div class='Email col-md-5 mb-2'>
          <label htmlFor="" class='form-label'>Confirm Password </label>
          <input name='confirmPassword' type="password " class='form-control ' placeholder='********' required="required"
            autocomplete='off' />
        </div>
        <div class='social-container p-4 d-flex justify-content-center'>

          <a href=""><img class='imgsocial' src="../images/icons8-facebook-logo-48.png" alt="facebook" /></a>
          <a href=""> <img class='imgsocial' src="../images/icons8-google-logo-48.png" alt="" /></a>
          <a href=""><img class='imgsocial' src="../images/icons8-linkedin-logo-48.png" alt="" /></a>

        </div>
        <span class="d-flex  justify-content-center ">or use your email to resgister</span>
        <button class="btn btn-dark mt-3 col-md-4 " name='register'>Register</button>
        <p class="d-flex  justify-content-center mt-3  ">Already have an account? <span><a type=""
              class=" login-btn ms-2  " data-bs-toggle="modal" data-bs-target="#modalId">
              Login
            </a></span></p>
      </form>
    </div>

<?php
include('../includes/connection.php');
    if(isset($_POST["Login"])){
      $loginEmail=$_POST['email'];
      $loginPwd=$_POST['password'];
      
      $select_query="select * from `users` where email= '$loginEmail'";
      $result=mysqli_query($conn,$select_query);
$rows=mysqli_num_rows($result);
$rows_data=mysqli_fetch_assoc($result);
if($rows>0){
  if(password_verify($loginPwd,$rows_data['pwd'])){
    if($rows==1){
    echo "<script> alert('login succesfull')</script>";
    echo "<script> window.open('/Ecormmerce/index.php','_self')</script>";}}  //header('location:index1.php?signup=empty');
    else{
      echo "<script> alert('Invalid Password')</script>";
    }
  
}   else{
  echo "<script> alert('Email not found')</script>";
}
    }
?>
    <style>
      .password {
        position: relative;
      }

      .eye-icon {
        font-size: 12px;
        color: #8b8b8b;
        position: absolute;
        top: 47%;
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

      .login-btn {
        color: #0a58ca;
        text-decoration: none;
        cursor: pointer;
        font-weight: 500;
      }

      #btn:hover {
        background-color: #EA6500;
        font-size: 0.9rem;
        transition-duration: s;
        font-weight: 600;
      }
    </style>

    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
      aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">
              Login
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div>
              <form method="POST" class="row">
                <div>
                  <label for="" class="form-label">Email</label>
                  <input class="form-control " type="text" name='email'>
                </div>

                <div>
                  <label for="" class="form-label">Password</label>
                  <input class="form-control " type="text" name='password'>
                  <FaEyeSlash class='EyeIcon' /> <i class="eye-icon fa-solid fa-eye-slash"></i>
                </div>
                <div class='d-flex justify-content-between '>
                  <style>
                    #ckeckbox {
                      width: 10px;
                      height: 10px;
                      /* accent-color: #EA6500; */
                    }

                    .register {
                      font-weight: 00;
                      font-size: 13px;

                    }

                    a {
                      text-decoration: none;
                    }
                  </style>
                  <div class=''>
                    <input class='mt-' type='checkbox' id='ckeckbox' name='' value=''>
                    <a id='remember-forgot' type='checkbox' href=""><small>Remember me</small></a>
                  </div>

                  <a id='remember-forgot' href=""><small>Forgot Password</small></a>
                </div>
                <button class="btn btn-dark mt-3 w-50 m-auto" id="btn"name='Login'>Login</button>
            </div>
            <div class='register text-center mt-2 '>Don't have an account? <a href="./signup.php"> Register</a></div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <img class=' d-flex justify-content-center ' id='footer-img' src='../images/Routta Logo resize.png'
              alt='' />

          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>

<!--  login
<style>
      .password {
        position: relative;
      }

      .eye-icon {
        font-size: 12px;
        color: #8b8b8b;
        position: absolute;
        top: 47%;
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

      .login-btn {
        color: #0a58ca;
        text-decoration: none;
        cursor: pointer;
        font-weight: 500;
      }

      #btn:hover {
        background-color: #EA6500;
        font-size: 0.9rem;
        transition-duration: s;
        font-weight: 600;
      }
    </style>

    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
      aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">
              Login
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div>
              <form class="row">
                <div>
                  <label for="" class="form-label">Email</label>
                  <input class="form-control " type="text">
                </div>

                <div>
                  <label for="" class="form-label">Password</label>
                  <input class="form-control " type="text">
                  <FaEyeSlash class='EyeIcon' /> <i class="eye-icon fa-solid fa-eye-slash"></i>
                </div>
                <div class='d-flex justify-content-between '>
                  <style>
                    #ckeckbox {
                      width: 10px;
                      height: 10px;
                      /* accent-color: #EA6500; */
                    }

                    .register {
                      font-weight: 00;
                      font-size: 13px;

                    }

                    a {
                      text-decoration: none;
                    }
                  </style>
                  <div class=''>
                    <input class='mt-' type='checkbox' id='ckeckbox' name='' value=''>
                    <a id='remember-forgot' type='checkbox' href=""><small>Remember me</small></a>
                  </div>

                  <a id='remember-forgot' href=""><small>Forgot Password</small></a>
                </div>
                <button class="btn btn-dark mt-3 w-50 m-auto" id="btn">Login</button>
            </div>
            <div class='register text-center mt-2 '>Don't have an account? <a href="./signup.php"> Register</a></div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <img class=' d-flex justify-content-center ' id='footer-img' src='../images/Routta Logo resize.png'
              alt='' />

          </div>
        </div>
      </div>
    </div>
  </div> -->
