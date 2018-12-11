    <?php

    session_start();

    if(!isset($_SESSION['username'])){
     header('Location: loginerror.html');
   }

   $con = mysqli_connect("localhost", "root", "jesus123", "spm");

///////ADD/UPDATE BUTTONS BELOW


 if(isset($_POST['msubmit'])){ //check if form was submitted
  
  if(isset($_POST['nameau'])){ //check if form was submitted
      $stext = $_POST['nametext']; //get input text
      $s="UPDATE `info` SET `pname`='$stext' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    }
    //If synopsis add / update button is pressed
      if(isset($_POST['synau'])){ //check if form was submitted
      $stext = $_POST['synopsistext']; //get input text
      $s="UPDATE `info` SET `synopsis`='$stext' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    } 




}  




//// add/update delete screenshot 
      if(isset($_POST['sc_submit2'])){ //check if form was submitted
       $image = addslashes(file_get_contents($_FILES['screenshot_image2']['tmp_name']));
       $query ="UPDATE `images` SET `screenshot2`='$image' WHERE id='".$_SESSION['ids']."' ";
       mysqli_query($con, $query);
     }  
//// add/update delete screenshot 
      if(isset($_POST['sc_submit'])){ //check if form was submitted
       $image = addslashes(file_get_contents($_FILES['screenshot_image']['tmp_name']));
       $query ="UPDATE `images` SET `screenshot`='$image' WHERE id='".$_SESSION['ids']."' ";
       mysqli_query($con, $query);
     }  
///DOES NOT WORK FOR NOW... WHY??? IDK :)
     //WORKS NOW!!!
     if(isset($_POST['teamadd'])){ //check if form was submitted
      $t1= $_POST['tone'];
      $t2= $_POST['ttwo'];
      $s="UPDATE `info` SET `teammate1`='$t1',`teammate2`='$t2' WHERE id='".$_SESSION['ids']."' ;";
      mysqli_query($con,$s);
    }   

    //UPLOADS ER DIAGRAM
     if(isset($_POST['er_submit'])){ //check if form was submitted
       $image = addslashes(file_get_contents($_FILES['er_image']['tmp_name']));
       $query ="UPDATE `images` SET `er`='$image' WHERE id='".$_SESSION['ids']."' ";
       mysqli_query($con, $query);
     }  


//// add/update delete screenshot 
      if(isset($_POST['sc_submit2'])){ //check if form was submitted
       $image = addslashes(file_get_contents($_FILES['screenshot_image2']['tmp_name']));
       $query ="UPDATE `images` SET `screenshot2`='$image' WHERE id='".$_SESSION['ids']."' ";
       mysqli_query($con, $query);
     } 
//ADD UPDATE TABLES
    if(isset($_POST['autables'])){ //check if form was submitted
      $nt = $_POST['notables']; //get input text
      $na=$_POST['noattributes'];
      $tsp=$_POST['tsp'];
      $s="UPDATE `info` SET `notables`='$nt',`noattributes`='$na',`tsp`='$tsp' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    }    
//ADD UPDATE TABLES
    if(isset($_POST['auskill'])){ //check if form was submitted
      $skill = $_POST['skill']; //get input text
      $s="UPDATE `info` SET `skills`='$skill' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    }  
///Send front end and back end
   if(isset($_POST['febeau'])){ //check if form was submitted
    $front=$_POST['fe'];
    $back=$_POST['be'];
    echo "$front";
    echo "$back";
    $s="UPDATE `info` SET `fe`='$front' WHERE id='".$_SESSION['ids']."' ";
    mysqli_query($con,$s);
    $s="UPDATE `info` SET `be`='$back' WHERE id='".$_SESSION['ids']."' ";
    mysqli_query($con,$s);
  }    
///Send year
   if(isset($_POST['yearau'])){ //check if form was submitted
    $year=$_POST['yr'];
    $s="UPDATE `info` SET `year`='$year' WHERE id='".$_SESSION['ids']."' ";
    mysqli_query($con,$s);
  } 
   //If name add / update button is pressed
      if(isset($_POST['nameau'])){ //check if form was submitted
      $stext = $_POST['nametext']; //get input text
      $s="UPDATE `info` SET `pname`='$stext' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    }

       if(isset($_POST['db_submit'])){ //check if form was submitted
         $image = addslashes(file_get_contents($_FILES['db_image']['tmp_name']));
         $query ="UPDATE `images` SET `dbsnap`='$image' WHERE id='".$_SESSION['ids']."' ";
         mysqli_query($con, $query);
       }  


       //If synopsis add / update button is pressed
      if(isset($_POST['synau'])){ //check if form was submitted
      $stext = $_POST['synopsistext']; //get input text
      $s="UPDATE `info` SET `synopsis`='$stext' WHERE id='".$_SESSION['ids']."' ";
      mysqli_query($con,$s);


    } 




///////////////DELETE BUTTONS BELOW




//Delete year

      if(isset($_POST['namedel'])){ //check if form was submitted
        $s="UPDATE `info` SET `name`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      } 

      
   //Delete Name
      if(isset($_POST['namedel'])){ //check if form was submitted
        $s="UPDATE `info` SET `name`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  


      
      //Delete Synopsis
      if(isset($_POST['syndel'])){ //check if form was submitted
        $s="UPDATE `info` SET `synopsis`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  






      if(isset($_POST['erdelete'])){ //check if form was submitted
        $s="UPDATE `images` SET `er`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  





       if(isset($_POST['db_delete'])){ //check if form was submitted
        $s="UPDATE `images` SET `dbsnap`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  






       if(isset($_POST['sc_delete2'])){ //check if form was submitted
        $s="UPDATE `images` SET `screenshot2`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  











       if(isset($_POST['sc_delete'])){ //check if form was submitted
        $s="UPDATE `images` SET `screenshot`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  




      //Delete tables
      if(isset($_POST['deltables'])){ //check if form was submitted
        $s="UPDATE `info` SET `synopsis`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  




      //Delete tables
      if(isset($_POST['deltables'])){ //check if form was submitted
        $s="UPDATE `info` SET `synopsis`=' ' WHERE id='".$_SESSION['ids']."' ";
        mysqli_query($con,$s);
      }  



      ?>

      <!DOCTYPE html>
      <html class="no-js" lang="en"> <!--<![endif]-->
      <head>

       <!--- basic page needs
         ================================================== -->
         <meta charset="utf-8">
         <title>Upload Form</title>
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
              <li><a href="sessionlogout.php" title="">Logout</a></li>				
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

            <h5>Edit Page</h5>
            <h1>Welcome, <?php echo $_SESSION['username'];?>!</h1>
            <h1> <?php echo $_SESSION['ids']; ?> </h1>


            <p class="lead">Enter your details.</p>

          </div> 
        </div> <!-- /section-intro -->

      <!-- 	<div class="row contact-form">

       <div class="col-twelve"> -->

        <!-- form -->
              <!--  <form method="post" action="editaction.php">
          			<fieldset>

                      <div class="form-field">
     						   <input name="synopsis" type="text" placeholder="Synopsis">
                      </div>
                      <div class="form-field">
    	      			   <input name="contributions" type="text" placeholder="Contributions">
    	               </div>
                      <div class="form-field">
    	     				   <input name="frontend" type="text" placeholder="FrontEnd Used">
    	               </div>  
    	               <div class="form-field">
    	     				   <input name="backend" type="text" placeholder="FrontEnd Used">
    	               </div>                       
                     <br>
                     <form>
                            <button class="submitform" type="submit">Subimit</button>
                         </form>
    								</div>
    							</div>
                      </div>

          			</fieldset>
          		</form> Form End --> 
              <form method="post" action="">
                <div class="row services-content">

                  <div id="owl-slider" class="owl-carousel services-list">



                    <div class="service"> 

                      <span class="icon"><i class="icon-window"></i></span>            

                      <div class="service-content"> 

                       <h3>Name of the Project</h3>

                       <div> 

                        <label for="sampleRecipientInput">Enter Name:</label>
                        <form method="post" action="">
                          <div class="ss-custom-select">
                            <input type="text" name="nametext" class="full-width" placeholder="Input text here" id="exampleMessage">
                          </div>

                        </div>

                        
                        <br>
                        <input name="namedel"class="button-primary" type="submit" value="DELETE">
                      </form>

                    </div>

                  </div>  



                     <div class="service"> 

                <span class="icon"><i class="icon-earth"></i></span>                          

                <div class="service-content"> 

                  <h3>Structure</h3>  
                  <form method="post" action="">
                    <div>
                      <label for="sampleRecipientInput">Front-End</label>
                      <div class="ss-custom-select">
                        <select name="fe" class="full-width" id="sampleRecipientInput">
                          <option value="HTML/CSS">HTML/CSS</option>
                          <option value="NetBeans">NetBeans/Jframes</option>
                          <option value="C#.Net/ASP.Net">C#.Net/ASP.Net</option>
                        </select>
                      </div>                
                    </div>

                    <div>
                     <label for="sampleRecipientInput">Back-End</label>
                     <div class="ss-custom-select">
                      <select name="be" class="full-width" id="sampleRecipientInput">
                        <option value="XAMPP/MySQL">XAMPP/MySQL</option>
                        <option value="MySQL WorkBench">MySQL WorkBench</option>
                        <option value="Others">Others</option>
                      </select>  
                    </div> 
                    <br>
                    <input name="febedel"class="button-primary" type="submit" value="DELETE">
                  </form>


                </div>

              </div>                            

            </div> <!-- /service -->


                  <div class="service"> 

                    <span class="icon"><i class="icon-window"></i></span>            

                    <div class="service-content"> 

                     <h3>Synopsis</h3>

                     <div> 

                      <label for="sampleRecipientInput">Enter Synopsis</label>
                      <form method="post" action="">
                        <div class="ss-custom-select">
                          <input type="text" name="synopsistext" class="full-width" placeholder="Input text here" id="exampleMessage">
                        </div>

                      </div>

                      <br>
                      <input name="syndel"class="button-primary" type="submit" value="DELETE">
                    </form>

                  </div>

                </div>  

            <!--<label for="exampleMessage">Enter Synopsis</label>
                  <textarea class="full-width" placeholder="Input text here" id="exampleMessage"></textarea>



                   <input class="button-primary" type="submit" value="Submit"> 
                   <input class="button-primary" type="submit" value="Submit"> 
                   <input class="button-primary" type="submit" value="Submit"> 

                </div>             

              </div> -->

              <!-- /service -->

             
            <div class="service"> 

              <span class="icon"><i class="icon-earth"></i></span>                          

              <div class="service-content"> 

                <h3>Year</h3>  
                <form method="post" action="">
                  <div>
                    <label for="sampleRecipientInput">Project submitted on:</label>
                    <div class="ss-custom-select">
                      <select name="yr" class="full-width" id="sampleRecipientInput">
                        <option name="Nov_2018">November 2018</option>
                        <option name="Nov_2017">November 2017</option>
                        <option name="Nov_2016">November 2016</option>
                      </select>
                    </div>                
                  </div>


                  <input name="yeardel" class="button-primary" type="submit" value="DELETE">

                  <div></form>



                  </div>

                </div>                            

              </div> <!-- /service -->

              <div class="service">

                <span class="icon"><i class="icon-paint-brush"></i></span>                

                <div class="service-content">

                  <h3>Tables</h3>

                  <div class="row add-bottom">

                    <div class="col-twelve">

                      <div class="table-responsive">
                        <form method="post" action=""> 
                          <table>
                            <thead>
                              <tr>
                                <th>No. of Tables</th>
                                <th>No. of Attributes</th>
                                <th>Triggers and Stored Procedures</th>          
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="number" min="1" name="notables"></td>
                                <td><input type="number" min="1" name="noattributes"></td>
                                <td><input type="number" min="1" name="tsp"></td>             
                              </tr>
                            </tbody>
                          </table>


                          <input class="button-primary" name="deltables" type="submit" value="DELETE">
                        </form>

                      </div>        

                    </div>

                  </div>

                </div>                               

              </div> <!-- /service -->

              <div class="service">

                <span class="icon"><i class="icon-image"></i></span>                

                <div class="service-content">

                  <h3>ER DIAGRAM</h3>

                  <form method="POST" action="" enctype="multipart/form-data">

                   <br><input name="er_image" type="file" style="width:200px"></br>

                  
                   <br><input name="erdelete" class="button-primary" type="submit" value="DELETE"></br>

                 </form>

               </div>                

             </div> <!-- /service -->

             <div class="service">

              <span class="icon"><i class="icon-image"></i></span>              

              <div class="service-content">

                <h3>DataBase Snapshot</h3>

                <form method="post" enctype="multipart/form-data"> 
                 <br><input name="db_image" type="file" style="width:200px"></br>

                 <br><input name="db_delete" class="button-primary" type="submit" value="DELETE"></br>

               </form>



             </div>                 

           </div> <!-- /service -->

           <div class="service">

            <span class="icon"><i class="icon-image"></i></span>                

            <div class="service-content">

             <h3>Screenshots</h3>
             <form method="post" enctype="multipart/form-data"> 
               <br><input name="screenshot_image" type="file" style="width:200px"></br>

               <br><input name="sc_delete" class="button-primary" type="submit" value="DELETE"></br>
             </form>
           </div>                 

         </div> <!-- /service -->



         <div class="service">

          <span class="icon"><i class="icon-image"></i></span>                

          <div class="service-content">

           <h3>Screenshots</h3>
           <form method="post" enctype="multipart/form-data"> 
             <br><input name="screenshot_image2" type="file" style="width:200px"></br>

             <br><input name="sc_delete2" class="button-primary" type="submit" value="DELETE"></br>
           </form>
         </div>                 

       </div> <!-- /service -->

       <div class="service"> 

        <span class="icon"><i class="icon-window"></i></span>            

        <div class="service-content"> 
          <form method="post" action="">

           <h3>Contribution</h3>

           <div> 

            <label for="sampleRecipientInput">Enter Individual Contribution</label>
            <div class="ss-custom-select">
             TeamMate1: <input type="text" name="tone"><br>
             TeamMate2: <input type="text" name="ttwo"><br>
           </div>
         </div>

         <input name="teamd" class="button-primary" type="submit" value="DELETE">

       </form>
     </div>

   </div>  

   <div class="service"> 

    <span class="icon"><i class="icon-window"></i></span>            

    <div class="service-content"> 

     <h3>Skills Learnt</h3>
     <form method="post" action="">
       <div> 

        <label for="sampleRecipientInput">Enter Skills learnt</label>
        <div class="ss-custom-select">
          <input type="text" name="skill" class="full-width" placeholder="Input text here" id="exampleMessage">
        </div>


      </div>


      <input name="delskill" class="button-primary" type="submit" value="DELETE">
    </form>
  </div>

</div>

</div> <!-- /services-list -->
<br>
<center><input name="msubmit" class="button-primary" type="submit" value="SUBMIT"></center>
</form>

</div> <!-- /services-content -->

</section>


       <!-- footer
         ================================================== -->

         <footer>
         	<div class="row">
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