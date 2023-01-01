<?php include 'include/connection.php';
$sql = "SELECT * FROM sliders ";
$result = $db->query($sql);
?>
<slider>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                <?php while($row = $result->fetch_assoc()): ?>
                        <div class="carousel-item active"data-bs-interval="10000">
                            <img src="<?php echo"admin/images/" .$row['image'] ; ?>" alt="image">
                                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                <div class="p-5" style="max-width: 900px;">
                                                    <h1 class="m-0 text-primary"><span class="text-dark">Pritilata </span>Cultural Organization</h1>
                                                </div>
                                        </div>       
                        </div>
                        <?php endwhile; ?>

                            <div class="carousel-item"data-bs-interval="20000">
                                <img src="<?php echo"admin/images/" .$row['image'] ; ?>" class="d-block w-100" alt="image">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                    <div class="p-5" style="max-width: 900px;">
                                                        <h1 class="m-0 text-primary">Pritilata Cultural Organization</h1>
                                                    </div>
                                    </div>
                            </div>
                    
                </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
        </div>
</slider>

