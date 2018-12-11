<?php
   session_start();


   if(!isset($_SESSION['username'])){
         header('Location: loginerror.html');
    }
//    if( isset($_GET['index.html'])){
//  session_destroy();
//  header('Location: loginerror.html');
//     }
?>

<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Homepage</title>
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
                  <li class="current"><a href="sessionlogout.php">LOGOUT</a> </li>
               </ul>
            </nav>         
         </div> <!-- /top-bar --> 
         
      </div> <!-- /row -->       
   </header> <!-- /header -->

   <section id="portfolio">

      <div class="row section-intro">
         <div class="col-twelve">

            <h5>Gateway Section</h5>
            <h1 style="text-transform: capitalize;">Welcome <?php echo $_SESSION['username']; ?>!</h1>
            <h5> ID <?php echo $_SESSION['ids']; ?> </h5>
            <h1>What do you want to do ?</h1>

            <p class="lead">Edit project info, view your project, search for other projects and execute simple SQL queries!</p>

         </div>         
      </div> <!-- /section-intro--> 

<div class="row portfolio-content">

         <div class="col-twelve">

            <!-- portfolio-wrapper -->
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

               <div class="bgrid folio-item">
                  <div class="item-wrap">
                     <img src="images/portfolio/edit.jpg" alt="Liberty">
                     <a href="#modal-01" class="overlay">                                   
                        <div class="folio-item-table">
                           <div class="folio-item-cell">
                               <h3 class="folio-title">EDIT</h3>                        
                               <span class="folio-types">
                                   
                               </span>
                           </div>                           
                        </div>                    
                     </a>
                  </div>                  
               </div> <!-- /folio-item -->
<br>
<br>
               <!-- modal popups - begin
               ============================================================= -->
               <div id="modal-01" class="popup-modal slider mfp-hide">  

                  <div class="media">
                     <img src="images/portfolio/modals/editfull.jpg" alt="" />
                  </div>         

                  <div class="description-box">
                     <h4>Edit information</h4>           
                     <p>This section is provided to the user to Add,Edit and Delete information about the project.</p>

                     <div class="categories"></div>                        
                  </div>

                  <div class="link-box">
                     <a href="editpage.php">Go to Edit mode</a>
                     <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>            

               </div> <!-- /modal-01 -->

               <!-- rating page -->

               <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

               <div class="bgrid folio-item">
                  <div class="item-wrap">
                     <img src="images/portfolio/rate.jpg" alt="Liberty">
                     <a href="#modal-02" class="overlay">                                   
                        <div class="folio-item-table">
                           <div class="folio-item-cell">
                               <h3 class="folio-title">VIEW</h3>                        
                               <span class="folio-types">
                                   
                               </span>
                           </div>                           
                        </div>                    
                     </a>
                  </div>                  
               </div> <!-- /folio-item -->

               <!-- modal popups 2 rating - begin
               ============================================================= -->
               <div id="modal-02" class="popup-modal slider mfp-hide">  

                  <div class="media">
                     <img src="images/portfolio/modals/ratefull.jpg" alt="" />
                  </div>         

                  <div class="description-box">
                     <h4>View your project display</h4>           
                     <p>This section is provided to the user to view your project</p>

                     <div class="categories"></div>                        
                  </div>

                  <div class="link-box">
                     <a href="viewandrate.php">Go to View mode</a>
                     <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>            

               </div> <!-- /modal-01 -->

               <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

               <div class="bgrid folio-item">
                  <div class="item-wrap">
                     <img src="images/portfolio/rate.jpg" alt="Liberty">
                     <a href="#modal-03" class="overlay">                                   
                        <div class="folio-item-table">
                           <div class="folio-item-cell">
                               <h3 class="folio-title">SEARCH</h3>                        
                               <span class="folio-types">
                                   
                               </span>
                           </div>                           
                        </div>                    
                     </a>
                  </div>                  
               </div> <!-- /folio-item -->

               <!-- modal popups 2 rating - begin
               ============================================================= -->
               <div id="modal-03" class="popup-modal slider mfp-hide">  

                  <div class="media">
                     <img src="images/portfolio/modals/ratefull.jpg" alt="" />
                  </div>         

                  <div class="description-box">
                     <h4>Search Section</h4>           
                     <p>This section is provided to the user to search for certain projects based on constraints.</p>

                     <div class="categories"></div>                        
                  </div>

                  <div class="link-box">
                     <a href="search.php">Go to Search mode</a>
                     <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>            

               </div> 


               <!-- modal popups 2 rating - begin
               ============================================================= -->

               <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

               <div class="bgrid folio-item">
                  <div class="item-wrap">
                     <img src="images/portfolio/edit.jpg" alt="Liberty">
                     <a href="#modal-04" class="overlay">                                   
                        <div class="folio-item-table">
                           <div class="folio-item-cell">
                               <h3 class="folio-title">OPERATIONS</h3>                        
                               <span class="folio-types">
                                   
                               </span>
                           </div>                           
                        </div>                    
                     </a>
                  </div>                  
               </div>


               <div id="modal-04" class="popup-modal slider mfp-hide">  

                  <div class="media">
                     <img src="images/portfolio/modals/editfull.jpg" alt="" />
                  </div>         

                  <div class="description-box">
                     <h4>Operations Section</h4>           
                     <p>This section is provided to the user to perform a few operations on the list</p>

                     <div class="categories"></div>                        
                  </div>

                  <div class="link-box">
                     <a href="operations.php">Go to Operation mode</a>
                     <a href="#" class="popup-modal-dismiss">Close</a>
                  </div>            

               </div><!-- /modal-01 -->


       <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>