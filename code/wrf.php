<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Display Section</h5>
            <h1 style="text-transform: capitalize;">Project display of <?php echo $_SESSION['username']; ?>!</h1>
            <br>
            <br>
            <h2>Project Name</h2>
            <h3><?php echo "<h3>" . $row['pname'] . "</h3>";?></h3>
            <h2>Synopsis</h2>
            <h3><?php echo "<h3>" . $row['synopsis'] . "</h3>";?></h3>
            <br>
            <br>
            <h2>Year</h2>
            <h3><?php echo "<h3>" . $row['year'] . "</h3>";?></h3>
            <br>
            <br>
            <h2>Structure</h2>
            <h3><?php echo "<h3>FrontEnd:" . $row['fe'] . "</h3>";?></h3>
            <h3><?php echo "<h3>BackEnd:" . $row['be'] . "</h3>";?></h3>
            <br>
            <br>
            <h2>Contributions</h2>
            <h3><?php echo "<h3>" . $row['teammate1'] . "</h3>";?></h3>
            <h3><?php echo "<h3>" . $row['teammate2'] . "</h3>";?></h3>
            <br>
            <br>
            <h2>Skills</h2>
            <h3><?php echo "<h3>" . $row['skills'] . "</h3>";?></h3>

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