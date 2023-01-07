<!-- header -->
<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM outsourcisngs";
// $sql = "SELECT * FROM outsourcisng2 ";
$result = $db->query($sql);
  ?>




   <div class="container">
        <div class="row">
           <div class="col-12">
                <div class="facilities_heading ">
                <h1 class="m-0 text-danger">Outsourcisng</h1>
                </div>
           </div>
        </div>
    </div><br><br><br>



<section class="facilities-placement">

        <div class="container">
            <div class="row">
                <div class="col-md-12 job_placement" style="background-color: rgb(255, 247, 235);">
                    <div class="row">
                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-6">
                
                        <div class="job_placement_contant freelancing">
                        
                            
                                <h3><b><?php echo $row['title'] ; ?></b></h3>
                            
                            
                        
                                <p><h6><?php echo $row['text'] ; ?></h6></p>
                            
                        </div>
                        
                                <div class="job_placement_contant_img">
                                    <img class="img-fluid w-100" src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img">
                                    
                                </div>
                    </div>
                    <?php endwhile; ?>  

                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-6">
                        <div class="jobplacement_partner  text-center">
                            <h3 class="pt-3"><b><?php echo $row['title'] ; ?></b></h3>
                            <p><h6><?php echo $row['text'] ; ?></h6></p>
                        
                                                        <img class="img-fluid" src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img"><br><br>
                                                                                                                                                                            
                                                     
              
                        </div>
                    </div>
                    <?php endwhile; ?> 
                    </div>
                </div>
            </div>
        </div>
    
</section><br><br><br><br>



<section id="pg_course_overviwe pb-0">
   <div class="container">
      <div class="row">
         <div class="pgc_for_whom">
            <h3>Outsourcisng in for</h3><br><br><br>
   
          <center>
            <div class="row">
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image33.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Housewife</b></p>
                     </div>
                  </div>
               </div>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image31.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Employment Expectant</b></p>
                     </div>
                  </div>
               </div>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image34.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Entrepreneur</b></p>
                     </div>
                  </div>
                  <br><br><br><br><br>
               </div>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image32.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Students</b></p>
                     </div>
                  </div>
               </div>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image34.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Expat</b></p>
                     </div>
                  </div>
               </div>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="images/image30.png" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b>Freelances Eager</b></p>
                     </div>
                  </div>
               </div>
            </div>
        
         </center>
         </div> 
      </div>
   </div>
   
</section><br><br><br><br><br>
<section id="counter_up" class="about_counter_up" style="margin-bottom: 3rem;">
   <div class="container">
      <h2>Outsourcisng our awesome afew enterprise</h2><br><br><br><br>
      <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>50000</span>+</b></h4><br>
               <p>Students carrer counseling work</p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>2000</span>+</b></h4><br>
               <p>Women's compleat free it  scholarship training </p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>3000</span>+</b></h4><br>
               <p>Students online internship facility get</p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>20000</span>+</b></h4><br>
               <p>Physically autistic mens it training get it</p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
               <h4 class="m-0 text-danger"><span class="counter"><b>8000</span>+</b></h4><br>
               <p>Outsourcisng deprived got id scholarship</p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>120</span>+</b></h4><br>
               <p>Polytechnic industrial training in for joint has been </p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>100</span>+</b></h4><br>
               <p>Aged citigen it schoolership got</p>
            </div>
         </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><span class="counter"><b>500</span>+</b></h4><br>
               <p>Child students cretive it family joint has been</p>
            </div>
         </div>
        </div>
   </div>
</section><br>


<section id="pg_course_overviwe pb-0">
   <div class="container">
      <div class="pg_marketplace2 section_heading2">
        
         
         <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image18.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image19.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image20.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image21.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image22.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image23.png" alt="Marketplace"></div>
               </div><br><br><br>

            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image24.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image25.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image26.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image36.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image37.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image38.png" alt="Marketplace"></div>
               </div><br><br><br>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image39.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image40.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image41.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image42.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image43.png" alt="Marketplace"></div>
               </div>
            </div>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="images/image44.png" alt="Marketplace"></div>
               </div>
            </div>
                     </div>
      </div>
   </div>
</section><br><br>





<section id="Office_and_traning">
   
   <div class="container">
      <h2>Office and traning</h2>
        <div class="row office_and_traning_slider_for slick-initialized slick-slider">
                 
            <div class="office_slide_item">
               <img class="img-fluid w-100" src="images/OUT.jpg" alt="img" height="300px" >
            </div>
         
        </div>
    </div>                                   
</section>        
<br>




                                  
<!-- footer -->
 <?php include 'include/footer.php' ; ?>
 