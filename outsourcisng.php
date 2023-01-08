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



<?php  
$sql = "SELECT * FROM outsourcisng3 ";
$result = $db->query($sql);
?>

<section id="pg_course_overviwe pb-0">
   <div class="container">
      <div class="row">
         <div class="pgc_for_whom">
            <h3>Outsourcisng in for</h3><br><br><br>
   
          <center>
            <div class="row">
            <?php while($row = $result->fetch_assoc()): ?>
                              <div class="col-6 col-lg-4">
                  <div class="pgcf_whom_item">
                     <div class="pgcf_whom_item_icon"><img class="img-fluid" src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img"></div>
                     <div class="pgcf_whom_item_text">
                        <p><b><?php echo $row['title'] ; ?></b></p>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?> 
                             
               
            </div>
        
         </center>
         </div> 
      </div>
   </div>
   
</section><br><br><br><br><br>

<?php  
$sql = "SELECT * FROM outsourcisng4";
$result = $db->query($sql);
  ?>

<section id="counter_up" class="about_counter_up" style="margin-bottom: 3rem;">
   <div class="container">
      <h2>Outsourcisng our awesome afew enterprise</h2><br><br><br><br>
      <div class="row">
      <?php while($row = $result->fetch_assoc()): ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="counter_up_item">
            <h4 class="m-0 text-danger"><?php echo $row['text'] ; ?></b></h4><br>
               <p><?php echo $row['title'] ; ?></p>
            </div>
            <br>
         </div>
         <?php endwhile; ?>
               
        </div>
   </div>
</section><br>


<?php  
$sql = "SELECT * FROM outsourcisng_images";
$result = $db->query($sql);
?>
<section id="pg_course_overviwe pb-0">
   <div class="container">
      <div class="pg_marketplace2 section_heading2">
        
         
         <div class="row">
         <?php while($row = $result->fetch_assoc()): ?>
                        <div class="col-sm-4 col-md-3 col-lg-2">
               <div class="marketplace_item">
                  <div class="icon"><img src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="Marketplace"></div>
               </div>
               <br><br><br>
            </div>
            <?php endwhile; ?> 
                    
      </div>
   </div>
</section><br><br>




<?php 

$sql = "SELECT * FROM outsourcisng2 ";
$result = $db->query($sql);
?>
<section id="Office_and_traning">
<?php while($row = $result->fetch_assoc()): ?>
   <div class="container">
      <h2><?php echo $row['title'] ; ?></h2>
        <div class="row office_and_traning_slider_for slick-initialized slick-slider">
                 
            <div class="office_slide_item">
               <img class="img-fluid w-100" src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img" height="300px" >
            </div>
         
        </div>
    </div> 
    <?php endwhile; ?>                                  
</section>        
<br>




                                  
<!-- footer -->
 <?php include 'include/footer.php' ; ?>
 