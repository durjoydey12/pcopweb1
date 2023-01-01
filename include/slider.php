<?php include 'include/connection.php';
$sql = "SELECT * FROM sliders ";
$result = $db->query($sql);
?>
<slider>

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                      <div class="carousel-item active">
                      <img src="images/image1.jpeg" height="450px" width="1500px"  alt="img">
                      </div>
              </div>   
                      
            </div>

            
</slider>

