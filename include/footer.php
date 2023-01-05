<?php 
include 'include/connection.php';  
$sql = "SELECT * FROM footers";
$result = $db->query($sql);
  ?>
        <footer>
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 10px;">
                        <div class="row pt-5">
             
                                <div class="col-lg-4 col-md-6 ">
                                        <a href="" class="navbar-brand">
                                            <h1 class="text-primary"><span class="text-white">Pritilata </span>Cultural <br>Organization</h1>
                                        </a>
                                        <p> <?php echo $row['text'] ; ?></p>
                                </div>
                      
                            <div class="col-lg-4 col-md-6 ">
                                    <center>
                                            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                                        <div class="d-flex flex-column justify-content-start">
                                            <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                                            <a class="text-white-50 mb-2" href="institute.php"><i class="fa fa-angle-right mr-2"></i>Institute</a>
                                            <a class="text-white-50 mb-2" href="outsourcisng.php"><i class="fa fa-angle-right mr-2"></i>Outsourcisng</a>
                                           
                                            
                                            
                                            <a class="text-white-50" href="registration.php"><i class="fa fa-angle-right mr-2"></i>Registration</a>
                                        </div>
                                    </center>
                            </div>
                         
                        
                                    <div class="col-lg-4 col-md-6 ">
                                                <center>
                                                            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                                                            <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo $row['address'] ; ?> </p><br>
                                                            <p><i class="fa fa-phone-alt mr-2"></i><?php echo $row['mobile_no'] ; ?></p><br>
                                                            <p><i class="fa fa-envelope mr-2"></i><?php echo $row['email'] ; ?></p><br>
                                                        
                                                </center>
                                    </div>
                        
                        </div>
            </div>
            <?php endwhile; ?> 

        </footer>

     
    
  </body>
  <link rel="stylesheet" href="assets/js/main.js">
  
