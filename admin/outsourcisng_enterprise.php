<?php include 'include/header.php' ; ?>



<div class="row justify-content-center">




   
        <div class="col-md-5">
        <h1><b> Outsourcisng Enterprise Page</b></h1><hr><br><br>
        <form action="outsourcisng_enterprise_insert.php" method="POST"  enctype="multipart/form-data">
                <p><b>Title</b> : <input name="name" type="text" class="form-control" placeholder="Enter your title"></p>  
                <p><b> Text :</b> <input name="text" type="text" class="form-control" placeholder="Enter your text" ></p>
                  
           
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        </div>
    


</div><br><br><br><br><br><br>







<div class="row justify-content-center">
        <div class="col-md-5">  
                      <h5> <a class="btn btn-info" href="outsourcisng_enterprise_users.php">  <b> users page</b></a>  </h5>        
        </div>
    


</div>


                    


<br>
<br>



<?php include 'include/footer.php' ; ?>