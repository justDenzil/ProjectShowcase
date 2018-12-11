<?php
   session_start();
   if(!isset($_SESSION['username'])){
         header('Location: loginerror.html');
    }

    $con = mysqli_connect("localhost", "root", "jesus123", "spm");

    $info = mysqli_query($con,"SELECT * FROM info WHERE id='".$_SESSION['ids']."'; ");
    


$sql = "SELECT * FROM images WHERE id='".$_SESSION['ids']."';";
$sth = $con->query($sql);
$result=mysqli_fetch_array($sth);
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

<?php 

while($row = mysqli_fetch_array($info))
{

 ?>

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

   			<h5>Display Section</h5>
   			<h1 style="text-transform: capitalize;">Project display of <?php echo $_SESSION['username']; ?>!</h1>

   			

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

 





	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

            <h2>Project Name</h2>
            <h3><?php echo "<h3>" . $row['pname'] . "</h3>";?></h3>
            <br>
            <h2>Synopsis</h2>
            <h3><?php echo "<h3>" . $row['synopsis'] . "</h3>";?></h3>
            <br>
           
            <h2>Year</h2>
            <h3><?php echo "<h3>" . $row['year'] . "</h3>";?></h3>
            <br>
            
            <h2>Structure</h2>
            <h3><?php echo "<h3>FrontEnd : " . $row['fe'] . "</h3>";?></h3>
            <h3><?php echo "<h3>BackEnd : " . $row['be'] . "</h3>";?></h3>
            <br>
            
            <h2>Contributions</h2>
            <h3><?php echo "<h3>" . $row['teammate1'] . "</h3>";?></h3>
            <h3><?php echo "<h3>" . $row['teammate2'] . "</h3>";?></h3>
            <br>
            <h2>Skills</h2>
            <h3><?php echo "<h3>" . $row['skills'] . "</h3>";?></h3>
            <br>
            <h2>Tables</h2>
            <h3>No of Tables : <?php echo "" . $row['notables'] . "";?></h3>
            <h3>No of Attributes : <?php echo "" . $row['noattributes'] . "";?></h3>
            <h3>Trigger and Stored Procedure : <?php echo "" . $row['tsp'] . "";?></h3>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['er'] ).'"/>';
				     	 ?>
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">ER Diagram</h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['dbsnap'] ).'"/>';
				     	 ?>
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">DataBase Snapshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['screenshot'] ).'"/>';
				     	 ?>
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Screenshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	        		

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['screenshot2'] ).'"/>';
				     	 ?>
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Screenshot</h3>	     					    
		     					    	<span class="folio-types">
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     	<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['er'] ).'"/>';
				     	 ?>

				     	</div>      	

					   <div class="description-box">
					      <h4>ER DIAGRAM</h4>		      
					      <p>This entity relationship diagram explains the relations between entities</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['dbsnap'] ).'"/>';
				     	 ?>
				     	</div>      	

					   <div class="description-box">
					      <h4>DataBase Snapshot</h4>		      
					      <p>A pictorial representation of their working DataBase</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<?php 	
				     		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['screenshot'] ).'"/>';
				     	 ?>
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>

					      <div class="categories"></div>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/screenshot2.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

			         <div id="modal-05" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/screenshot3.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Screenshot</h4>		      
					      <p>Screenshots of their projects</p>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 

   
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
  
 <?php  
        }
 ?>
</body>

</html>