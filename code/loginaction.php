<?php
  session_start();
  //header('location:login.html');
  $con = mysqli_connect("localhost", "root", "jesus123", "spm");
  //mysql_select_db($con,"spm");
  $name=$_POST['user'];
  $pwd=$_POST['password'];
  $id = "SELECT `id` FROM `registration` WHERE name = '$name'";

  $t = mysqli_query($con,$id);
  
  //Stores ID value of username to $t in string
  
  while ($row = $t->fetch_assoc()) {
   $ids = $row['id'];
   }
   echo $ids;
   echo $name;
  

  $s= "select * from registration where name = '$name' && password ='$pwd'";
  
  $result =mysqli_query($con,$s);

  $num=mysqli_num_rows($result);

 if($num==1)
 {
  $_SESSION['username'] =$name;


  $_SESSION['ids'] =$ids;
 header('location:gateway.php');
 }else{
   header('location:registration.html');
 }
?>