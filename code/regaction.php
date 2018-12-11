

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>    
      <div class="row">

         <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
               <a href="index.html">MENU</a>
            </div>            

            <nav id="main-nav-wrap">
               <ul class="main-navigation">
                  <li><a href="index.html" title="">HOME</a></li>
                  <li class="current"><a href="login.html" title="">LOGIN</a></li> 
               </ul>
            </nav>         
         </div> <!-- /top-bar --> 
         
      </div> <!-- /row -->       
   </header> <!-- /header -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">
   			<?php

  session_start();
  //header('location:login.html');
  $con = mysqli_connect("localhost", "root", "jesus123", "spm");
  //mysql_select_db($con,"spm");
  $name=$_POST['user'];
  $pwd=$_POST['password'];

  $s= "select * from registration where name= '$name'";
  
  $result =mysqli_query($con,$s);

  $num=mysqli_num_rows($result);

  if($num==1)
  {
  	echo "<h1>Username Already Taken!</h1>";
  }else{
  	$reg="insert into registration(name , password) values ('$name', '$pwd')";
    $id = "SELECT `id` FROM `registration` WHERE name = '$name'";
  	mysqli_query($con,$reg);	
    $t = mysqli_query($con,$id);
  
  //Stores ID value of username to $t in string
  
  while ($row = $t->fetch_assoc()) {
   $ids = $row['id'];
   }
   $ins = "INSERT INTO `info`(`id`) VALUES ($ids);";
   mysqli_query($con,$ins);
   $ins = "INSERT INTO `images`(`id`) VALUES ($ids);";
   mysqli_query($con,$ins);
   $insname = "UPDATE info SET iname='$name' where id='$ids';";
      mysqli_query($con,$insname);
 
  	echo "<h1>Account Sucessfully Created!</h1>";
    echo "<h1>'$name'</h1>";
  }
?>
   		</div> 
   	</div> <!-- /section-intro -->

   	
   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>