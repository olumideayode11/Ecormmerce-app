<?php 
 

 $host =  "localhost";
 $username = "Hollumy820";
 $password = "Ayo01@Deji02";
$dbname = "store";

 
 $conn = mysqli_connect($host, $username, $password, $dbname);
 if(!$conn){
 
   die("Connection failed: ". mysqli_connect_error());
 }

?>