<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM outsourcisng_images WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
   
?>


<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="page-title">Edit page</h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
            <div class="row">
              <div class="col-md-6">
               
                    <form action="update_outsourcisng_image.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                           
                           
                        
                        <p>Image : <input type="file"  name="image" id="image"  value="<?php echo $data['image'] ; ?>" class="form-control" ></p>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>