<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Create Account</title>
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

   			<h5>Registration</h5>
   			<h1>Create new account.</h1>
   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">
            <form  method="post" action="regaction.php">
               <fieldset>

                  <div class="form-field">
                     <input name="user" type="text" placeholder="Enter Name" minlength="2" required="">
                  </div> 
                  <div class="form-field">
                     <input name="password" type="Password"  placeholder="Enter Password" minlength="2" required="">
                  </div> 
                  <br>
                     <center>
                      <form>
                        <button class="submitform" type="submit">Register</button>
                     </form>
                     <center>
               </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->
 
   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>