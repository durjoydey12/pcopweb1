<!-- header -->
<?php include 'include/header.php' ;
include 'include/connection.php';  

?>

    <!-- slider -->
    <?php include 'include/slider.php' ; ?><br><br>

<!-- home -->
<?php 
$sql = "SELECT * FROM homes";
$result = $db->query($sql);  
?>

        <div id="about">
            <div class="container">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="row">
                        <div class="col-xs-12 col-md-8">

                                <div class="about-text">
                                    <h2 class="text-info"> <?php echo $row['title'] ; ?></h2>
                                    <hr><br><br><br>
                                    <b><?php echo $row['text'] ; ?></b>
                                
                                </div>
                        </div>
                            
                        <div class="col-xs-12 col-md-3">

                            <div class="about-media"> <img src="<?php echo "admin/images/" .$row['image'] ; ?>" alt="img " height="300px" width="300px" > </div>

                           
                            
                        </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div><br><br><br>
   
        

        <!-- Services Section -->
<?php  
$sql = "SELECT * FROM srevices";
$result = $db->query($sql);
?>  
<div id="services">
    
        <div class="container">
        
            <div class="section-title text-center center">
                    <h2>Our Services</h2>
                    <hr><br>
                    <p>A service is something that the public needs, such as transport, communications 
                        facilities, hospitals, or energy supplies, which is provided in a
                         planned and organized way by the government or an official body</p>
            </div><br>
            
            

            <div class="row">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-xs-10 col-md-6">
                            <div class="service-media"> 
                                <img src="<?php echo "admin/images/" .$row['image'] ; ?>" alt="img" height="300px" width="500px" > 
                            </div>
                                    <div class="service-desc">
                                        <h3><?php echo $row['title'] ; ?></h3>
                                        <p><b><?php echo $row['text'] ; ?></b></p>
                                    </div>
                </div>
                <?php endwhile; ?>

              
             </div>
           
        </div>
</div>
<br><br>


<!-- Gallery Section -->
<?php  
$sql = "SELECT * FROM gallerys";
$result = $db->query($sql);
?>  

<div id="portfolio">
  <div class="container">

    <div class="section-title text-center center">
      <h2>Our Gallery</h2>
      <hr>
      
    </div><br><br>
    
    <div class="row">
    <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-xs-12 col-md-4">
                            <div class="service-media"> 
                                <img src="<?php echo "admin/images/" .$row['image'] ; ?>" alt="img" height="250px" width="350px"> 
                            </div>
                            <br>
                                    
                </div>
                <?php endwhile; ?>
            

                              
           

    
  </div>
</div>
       
<br>


<!-- footer -->
 <?php include 'include/footer.php' ; ?>
 