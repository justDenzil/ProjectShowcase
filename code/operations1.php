<?php
session_start();



if(!isset($_SESSION['username'])){
	header('Location: loginerror.html');
}

$con = mysqli_connect("localhost", "root", "jesus123", "spm");


//echo $result[0];


?>
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

   	<header>   	
   		<div class="row">

   			<div class="top-bar">
   				<a class="menu-toggle" href="#"><span>Menu</span></a>

   				<div class="logo">
   					<a href="index.html">KARDS</a>
   				</div>		      

   				<nav id="main-nav-wrap">
   					<ul class="main-navigation">
   						<li><a href="gateway.php" title="">Homepage</a></li>
   						<li><a href="sessionlogout.php" title="">Logout</a></li>				
   					</ul>
   				</nav>    		
   			</div> <!-- /top-bar --> 

   		</div> <!-- /row --> 		
   	</header> <!-- /header -->




<!-- resume Section
	================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>OPERATIONS</h5>
				<h1 style="text-transform: capitalize;">A series of simple operations on the list of projects</h1>

				<br>
				<br>
				<h5>1. Count</h5>
				<h3>The COUNT() function returns the number of rows that matches a specified criteria.

				</h3>          <h6>Query</h6>
				<h2>"SELECT COUNT(id) FROM info;"</h2>

				<form method="get" action="operations.php">
    <button type="submit">Execute</button>
</form>

				<h6>Result</h6>
				<?php  
				$sql=("SELECT COUNT(id) FROM info;");
				$rs= mysqli_query($con,$sql);
				$result = mysqli_fetch_array($rs);

				echo"<h2> $result[0]</h2>";
				?>
				<br>
				<br>
<hr>

				<h5>2. Like</h5>
				<h3>LIKE is a special operator used with the WHERE clause to search for a specific pattern in a column.
					<h6>Query</h6>
				</h3>
				<h2>"SELECT pname FROM info WHERE fe LIKE '%html%'";"
				</h2>
				<h6>Result</h6>
				<?php  
				$sql=("SELECT pname FROM info WHERE fe LIKE '%html%'");
				$rs= mysqli_query($con,$sql);
				$result = mysqli_fetch_array($rs);

				echo"<h2> $result[0]</h2>";
				?>
				<br>
				<br>
<hr>
				<h5>3. Order By</h5>
				<h3>ORDER BY is a clause that indicates you want to sort the result set by a particular column either alphabetically or numerically.</h3>

				<h6>Query</h6>
			</h3>
			<h2>"SELECT pname,year FROM info ORDER BY year ASC;"
			</h2>
			<h6>Result</h6>
			<?php  
			$sql=("SELECT pname,year FROM info ORDER BY year ASC;");
			$rs= mysqli_query($con,$sql);
			$result= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)) {
    echo "<h4>".$row['pname']; // Print a single column data
    echo $row['year']."</h4>";
    echo "<br>";
    //echo print_r($row);       // Print the entire row data
}
			?>


		</div> <!-- /timeline-block -->

	</div> <!-- /timeline-wrap -->   			

</div> <!-- /col-twelve -->

</div> <!-- /resume-timeline -->

<div class="row resume-timeline">

	<div class="col-twelve resume-header">










		<div id="preloader"> 
			<div id="loader"></div>
		</div> 

   <!-- Java Script
   	================================================== --> 
   	<script src="js/jquery-2.1.3.min.js"></script>
   	<script src="js/plugins.js"></script>
   	<script src="js/main.js"></script>

   </body>

   </html>