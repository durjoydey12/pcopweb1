<!-- header; -->
<?php include 'include/header.php' ; 
include 'include/connection.php';
$sql = "SELECT * FROM abouts  ";
$result = $db->query($sql);
?>
<!-- slider -->
        <div class="card text-bg-dark">
                <img src="images/image47.jpg" class="card-img" alt="img" height="550px" >
                        <div class="card-img-overlay">
                                <div class="container">
                                        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                                        <!-- <h1 class="m-0 text-info"><b>ABOUT US </b></h1> -->
                                                
                               </div>

                        
                        </div>
        </div>
        <br><br><br>
   
 
        <?php while($row = $result->fetch_assoc()): ?>

        <section class="facilities-placement">
        <div class="container">
            <div class="row">
                <div class="col-md-12 job_placement" style="background-color: rgb(255, 247, 235);">

                    <div class="row">
                    <div class="col-md-3">    
                        
                               
                                    <img  src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="img" width= "250px"; height="250px"><br>
                                    <center><h5><b><?php echo $row['title'] ; ?></b></h5></center>
                                
                    </div>
                    <div class="col-md-9">
                        <div class="jobplacement_partner  text-center">
                            <br><br>
                           
                            <p><h6><?php echo $row['history'] ; ?></h6></p>
                        
                                                       
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
</section><br><br>
<br><br>
<?php endwhile; ?>



<br><br>






<!-- footer -->
<?php include 'include/footer.php' ; ?>