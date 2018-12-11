<?php
session_start();
 $con = mysqli_connect("localhost", "root", "jesus123", "spm");
if (isset($_GET['click']))
{
  $_SESSION['pusername'] = $_GET['name'];
  $_SESSION['pid'] =$_GET['id'];
  header('location:viewandrate1.php');
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>

   <!--- basic page needs
     ================================================== -->
     <meta charset="utf-8">
     <title>Project Showcase Management</title>
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
   <link rel="stylesheet" href="css/search.css">

   <style type="text/css" media="screen">

   #styles { 
    background: white;
    padding-top: 12rem;
    padding-bottom: 12rem;
  }
  #styles .row {
    max-width: 1024px;
  }
  #styles .section-intro {
    max-width: 800px;
  }

</style>       

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
         <a href="index.html">KARDS</a>
       </div>          

       <nav id="main-nav-wrap">
        <ul class="main-navigation">
          <li><a href="gateway.php" title="">Homepage</a></li>
          <li><a href="index.html" title="">Logout</a></li>       
        </ul>
      </nav>        
    </div> <!-- /top-bar --> 

  </div> <!-- /row -->    
</header> <!-- /header -->

   <!-- contact
     ================================================== -->
     <section id="contact">

      <div class="row section-intro">
        <div class="col-twelve">

          <h5>Search</h5>
          <h1><?php echo $_SESSION['username'];?> logged in!</h1>

          <p class="lead"></p>
        </div>
      </div>


<?php
    $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       // $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($con,"SELECT * FROM info
            WHERE (`pname` LIKE '%".$query."%') OR (`pname` LIKE '%".$query."%')") or die(mysql_error());
        $raw_results1 = mysqli_query($con,"SELECT * FROM info
            WHERE (`teammate1` LIKE '%".$query."%') OR (`teammate1` LIKE '%".$query."%')") or die(mysql_error());
         $raw_results2 = mysqli_query($con,"SELECT * FROM info
            WHERE (`teammate2` LIKE '%".$query."%') OR (`teammate2` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

       






        echo "<center>";

         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
               
                echo "<h3><a style='color:  #FF0076;'href='searchpage.php?click=true&pname=".urlencode($results['pname'])."&id=".urlencode($results['id'])."&name=".urlencode($results['iname'])."'>".$results['pname']."</a></h3>";

                echo "<br>";
                echo "<br>";


                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }

            echo "</center>";
             
        }



        else{ // if there is no matching rows do following
            echo "";
        }


        if(mysqli_num_rows($raw_results1) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results1)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
               
                echo "<h3><a style='color:  #FF0076;'href='searchpage.php?click=true&pname=".urlencode($results['teammate1'])."&id=".urlencode($results['id'])."&name=".urlencode($results['iname'])."'>".$results['pname']."</a></h3>";

                echo "<br>";
                echo "<br>";


                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }

            echo "</center>";
             
        }



        else{ // if there is no matching rows do following
            echo "";
        }

        if(mysqli_num_rows($raw_results2) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results2)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
               
                echo "<h3><a style='color:  #FF0076;'href='searchpage.php?click=true&pname=".urlencode($results['teammate2'])."&id=".urlencode($results['id'])."&name=".urlencode($results['iname'])."'>".$results['pname']."</a></h3>";

                echo "<br>";
                echo "<br>";


                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }

            echo "</center>";
             
        }



        else{ // if there is no matching rows do following
            echo "";
        }
        
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
<div>
     
      <div class="row contact-form">
        <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>
    <div class="row contact-info">

    </div>

      <div class="col-twelve">
      </div>
    </div>
    </div>
  </div>

</section>

   <!-- Java Script
     ================================================== --> 
     <script src="js/jquery-2.1.3.min.js"></script>
     <script src="js/plugins.js"></script>
     <script src="js/main.js"></script>

   </body>

   </html>