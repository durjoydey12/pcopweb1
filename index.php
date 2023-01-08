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

                            <div class="about-media"> <img src="<?php echo "admin/images/" .$row['image'] ; ?>" alt="img " height="350px" width="500px" > </div>

                           
                            
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
                <div class="col-xs-10 col-md-6">
                            <div class="service-media"> 
                                <img src="images/image.jpg" alt="img" height="300px" width="500px" > 
                            </div>
                                    <div class="service-desc">
                                        <h3>Outsourcisng</h3>
                                        <p><b>Outsourcing has become a normal practice in business. Very often, 
                                            we don’t even see it as a separate category. There are some criteria that
                                             help divide outsourcing companies into certain groups. The first one is the
                                              specifics of their activity, the next one is the number and specificity of
                                               the transferred functions, and the last criterion is geopolitical data, which is
                                                clearly visible in IT-outsourcing. Employees can work from different countries
                                                 all over the world,creating a single product . </b></p>
                                    </div>
                </div>
            

                                <div class="col-xs-10 col-md-6">
                                    <div class="service-media"> <img src="images/SME.jpg" alt=" img" height="300px" width="500px" > </div>
                                        <div class="service-desc">
                                            <h3>Institute</h3>
                                            <p><b>Educational institution is a place where people of different ages gain an education,
                                             including preschools, childcare, primary-elementary schools, secondary-high schools, and universities.
                                             They provide a large variety of learning environments and learning spaces.</b></p>
                                    </div>
                               </div>
             </div>
           
        </div>
</div>
<br><br>


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
                                <img src="images/image86.jpg" alt="img" height="250px" width="350px"> 
                            </div>
                                    
                </div>
            

                                <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/source.jpeg" alt=" img"height="250px" width="350px" > </div>
                                        
                               </div>

                               
                               <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/out1.webp" alt=" img"height="250px" width="350px"> </div>
                                        
                               </div>                         
    </div>
          <br>


             <div class="row">
                <div class="col-xs-12 col-md-4">
                            <div class="service-media"> 
                                <img src="images/image82.jpg" alt="img" height="250px" width="350px"> 
                            </div>
                                    
                </div>
            

                                <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/image66.jpg" alt=" img"height="250px" width="350px" > </div>
                                        
                               </div>

                               
                               <div class="col-xs-12 col-md-4">
                                    <div class="service-media"> <img src="images/image80.jpg" alt=" img"height="250px" width="350px"> </div>
                                        
                               </div>                         
             </div>

             <br>


                    <div class="row">
                    <div class="col-xs-12 col-md-4">
                                <div class="service-media"> 
                                    <img src="images/22.jpg" alt="img" height="250px" width="350px"> 
                                </div>
                                        
                    </div>


                                    <div class="col-xs-12 col-md-4">
                                        <div class="service-media"> <img src="images/image62.jpg" alt=" img"height="250px" width="350px" > </div>
                                            
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
 