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
				<h1 style="text-transform: capitalize;">A demonstartion of simple operations on the list of projects</h1>

				<br>
				<br>

				<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">
				<h5>List of Projects</h5>
<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

<br>
<br>
				<h6>Query</h6>
			</h3>
			<h2>"Select pname from info";</h2>
			<h6>Result</h6>
			<?php 
			/*$sql = "CREATE view contributions as select teammate1,teammate2 from info where pname = 'Library Management System';";
			$rs= mysqli_query($con,$sql);
			if (!$rs) {
                       printf("Error: %s\n", mysqli_error($con));
                       exit();
}
				$result = mysqli_fetch_array($rs);
				echo"<h2> $result[0]</h2>"; 
				*/

			$sql1 = "SELECT pname,iname FROM info";

 $result1 = mysqli_query($con, $sql1);
 if (!$result1) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
			//while($row = mysqli_fetch_array($result)) {
    //echo "<h4>".$row['pname']; // Print a single column data
    //echo $row['year']."</h4>";
    //echo "<br>";
				?>
	
                     <table class="table table-striped">  
                          <tr> 
                               <th>Project Names</th>  
                               <th>Teams</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                          ?>  
                          <tr>
                               <td><?php echo $row["pname"];?></td>  
                               <td><?php echo $row["iname"];?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>

				<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">
				<h5>1. Count</h5>
				<h2>The COUNT() function returns the number of rows that matches a specified criteria.

<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">
 
 <br>
 <br>

				</h3>          <h6>Query</h6>
				<h2>"SELECT COUNT(id) FROM info;"</h2>

				<h6>Result</h6>
				<?php  
				$sql=("SELECT COUNT(id) FROM info;");
				$rs= mysqli_query($con,$sql);
				$result = mysqli_fetch_array($rs);
echo"<h2> $result[0]</h2>";
				?>
 <br>
 <br>
<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

				<h5>2. Like</h5>
				<h3>LIKE is a special operator used with the WHERE clause to search for a specific pattern in a column.</h3>

<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

  <br>
  <br>

					<h6>Query</h6>
				<h2>"SELECT pname FROM info WHERE FrontEnd LIKE '%html%';"
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
<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">
				<h5>3. Order By</h5>
				<h3>ORDER BY is a clause that indicates you want to sort the result set by a particular column either alphabetically or numerically.</h3>
<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

<br>
<br>
				<h6>Query</h6>
			</h3>
			<h2>"SELECT pname,year FROM info ORDER BY year ASC;"
			</h2>
			<h6>Result</h6>
			<?php  
			$sql=("SELECT pname,year FROM info ORDER BY year ASC;");
			$rs= mysqli_query($con,$sql);
			$result= mysqli_query($con,$sql);
			 if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
				?>
	<table class="table table-striped">  
                          <tr> 
                               <th>Project Name</th>  
                               <th>Year of Submission</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>
                               <td><?php echo $row["pname"];?></td>  
                               <td><?php echo $row["year"];?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>
    <!--//echo print_r($row);       // Print the entire row data -->

<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">
				<h5>4. View</h5>
				<h3>A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database. You can add SQL functions, WHERE, and JOIN statements to a view and present the data as if the data were coming from one single table.</h3>
<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

<br>
<br>
				<h6>Query</h6>
			</h3>
			<h2>"Create View Contributions AS<br>
				 Select teammate1,teammate2<br>
				 From info<br>
				 Where pname = "Salary Management";"
			</h2>
			<h6>Result</h6>
			<?php 
			/*$sql = "CREATE view contributions as select teammate1,teammate2 from info where pname = 'Library Management System';";
			$rs= mysqli_query($con,$sql);
			if (!$rs) {
                       printf("Error: %s\n", mysqli_error($con));
                       exit();
}
				$result = mysqli_fetch_array($rs);
				echo"<h2> $result[0]</h2>"; 
				*/

			$sql1 = "SELECT * FROM contributions";

 $result1 = mysqli_query($con, $sql1);
 if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
			//while($row = mysqli_fetch_array($result)) {
    //echo "<h4>".$row['pname']; // Print a single column data
    //echo $row['year']."</h4>";
    //echo "<br>";
				?>
				<table class="table table-striped">  
                          <tr> 
                               <th>TeamMate1</th>  
                               <th>TeamMate2</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                          ?>  
                          <tr>
                               <td><?php echo $row["teammate1"];?></td>  
                               <td><?php echo $row["teammate2"];?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                     
<br>
<br>

<hr style="height:3px; border:none; color:#FF0076; background-color:#FF0076">

		</div> <!-- /timeline-block -->

	</div> <!-- /timeline-wrap -->   			

</div> <!-- /col-twelve -->

</div> <!-- /resume-timeline -->

<div class="row resume-timeline">

	<div class="col-twelve resume-header">









   <footer>
     	<div class="col-six tab-full">
	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>

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