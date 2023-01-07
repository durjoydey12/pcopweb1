<!-- header -->
<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM homes";
$result = $db->query($sql);
?>

    <!-- slider -->
    <?php include 'include/slider.php' ; ?><br><br>

<!-- home -->
<?php while($row = $result->fetch_assoc()): ?>
        <div id="about">
            <div class="container">
                <div class="row">
                        <div class="col-xs-12 col-md-8">

                                <div class="about-text">
                                    <h2 class="text-info"> <span class="text-dark"><?php echo $row['title'] ; ?></h2>
                                    <hr>
                                    <b><?php echo $row['text'] ; ?></b>
                                
                                </div>
                        </div>
                            
                        <div class="col-xs-12 col-md-3">
                            <div class="about-media"> <img src="<?php echo"admin/images/" .$row['image'] ; ?>" height="350px" width="500px" > </div>
                            
                        </div>
                </div>
            </div>
        </div><br><br><br>
    <?php endwhile; ?>
        

        <!-- Services Section -->
        <?php while($row = $result->fetch_assoc()): ?>   
<div id="services">
        <div class="container">
            <div class="section-title text-center center">
                    <h2><?php echo $row['title'] ; ?></h2>
                    <hr><br>
                    <p><b><?php echo $row['text'] ; ?></b></p>
            </div><br>

            <div class="row">
                <div class="col-xs-10 col-md-6">
                            <div class="service-media"> 
                                <img src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img" height="300px" width="500px" > 
                            </div>
                                    <div class="service-desc">
                                        <h3><?php echo $row['title'] ; ?></h3>
                                        <p><b><?php echo $row['text'] ; ?> </b></p>
                                    </div>
                </div>
            

                                <div class="col-xs-10 col-md-6">
                                    <div class="service-media"> <img src="<?php echo"admin/images/" .$row['image'] ; ?>" alt=" img" height="300px" width="500px" > </div>
                                        <div class="service-desc">
                                            <h3><?php echo $row['title'] ; ?></h3>
                                            <p><b><?php echo $row['text'] ; ?> </b></p>
                                    </div>
                               </div>
             </div>
           
        </div>
</div>
<br><br>
<?php endwhile; ?>



<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Our Gallery</h2>
      <hr>
      
    </div><br><br>
    <div class="row">
                <div class="col-xs-12 col-md-4">
                            <div class="service-media"> 
                                <img src="images/image.jpg" alt="img" height="250px" width="350px"> 
                            </div>
                                    
                </div>
            

                                <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/19.jpg" alt=" img"height="250px" width="350px" > </div>
                                        
                               </div>

                               
                               <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/19.jpg" alt=" img"height="250px" width="350px"> </div>
                                        
                               </div>                         
    </div>
          <br>


             <div class="row">
                <div class="col-xs-12 col-md-4">
                            <div class="service-media"> 
                                <img src="images/image.jpg" alt="img" height="250px" width="350px"> 
                            </div>
                                    
                </div>
            

                                <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/19.jpg" alt=" img"height="250px" width="350px" > </div>
                                        
                               </div>

                               
                               <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/image80.jpg" alt=" img"height="250px" width="350px"> </div>
                                        
                               </div>                         
             </div>

             <br>


                    <div class="row">
                    <div class="col-xs-12 col-md-4">
                                <div class="service-media"> 
                                    <img src="images/image.jpg" alt="img" height="250px" width="350px"> 
                                </div>
                                        
                    </div>


                                    <div class="col-xs-12 col-md-4">
                                        <div class="service-media"> <img src="images/19.jpg" alt=" img"height="250px" width="350px" > </div>
                                            
                                    </div>

                                    
                                    <div class="col-xs-12 col-md-4">
                                        <div class="service-media"> <img src="images/19.jpg" alt=" img"height="250px" width="350px"> </div>
                                            
                                    </div>                         
                    </div>

           

    
  </div>
</div>
       
<br>


<!-- footer -->
 <?php include 'include/footer.php' ; ?>
 