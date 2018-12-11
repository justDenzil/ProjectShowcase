<?php

  session_start();
  //header('location:login.html');
  $con = mysqli_connect("localhost", "root", "jesus123", "spm");
  //mysql_select_db($con,"spm");
  $synopsis=$_POST['synopsis'];
  $contribution=$_POST['contributions'];
  $frontend=$_POST['frontend'];
  $backend=$_POST['backend'];

  //$s= "INSERT into images(synopsis) values ('$synopsis')";
  $s="UPDATE images SET synopsis = '$synopsis' WHERE id='11'";
  mysqli_query($con,$s);

  echo $synopsis;

 ?>