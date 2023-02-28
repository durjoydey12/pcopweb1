<!-- header; -->
<?php include 'include/header.php' ; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <center>


<!--header div-->

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
       <h1> <a href="#">Contact Information</a> </h1>
    </div>
    </div>              
           <br><br><br>

    <h3><p><em>Your Priority is our Responsivelity</p></h3>
                
   	<div class="cleaner_h40"></div>
                
    <div class="col_w460">
       	<div id="contact_form">
		
        	<h4>Quick Contact Form</h4>
			<form action="contact_insert.php" method="POST">
	
				<label for="author"><b>Name:</b></label> <input type="text" id="author" name="name" class="required input_field" />
				<div class="cleaner_h10"></div>
							
				<label for="email"><b>Email:</b></label> <input type="text" class="validate-email required input_field" name="email" id="email" />
				<div class="cleaner_h10"></div>
							
				<label for="subject"><b>mobile_No:</b></label> <input type="number" class="validate-subject required input_field" name="mobile_no" id="subject"/>				               
				<div class="cleaner_h10"></div>
							
				<label for="text"><b>Message:</b></label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
				<div class="cleaner_h10"></div>  
							              
                <button type="reset" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
	
			</form>

        </div>
   	</div>
             <center>
                <br><br><br><br>
 	<div class="col_w460 last_col">
	    <h4><b>Our Location</b></h4>
        <h6><b>Pritilata Cultural Organization</b></h6>
        <br>
        <b>156-145 Quisque odio quam, </b><br />
      <b>  kulshi, Chittagong</b><br />
       <b> Gmail: pcopweb1@gmail.com</b><br /><br />
        <b>Tel: 01845-763272</b><br/> 
		<b>Fax: 0969-6891-086</b>
                    
        <div id="header_right">
            <br>
        
        	

                    
    </div>     
    </center>              

    <div class="cleaner"></div>
</div>
            		
    <div class="cleaner"></div> 
	
    <div class="cleaner"></div>
    <br><br>




               <!--footer-->

<div id="tooplate_footer_wrapper">
<div id="tooplate_footer">
       <b> @pcopweb-2002 <a href="#">Pritilata Cultural Organization</a></b>
</div>
</div>



</center> 
</body>
</html>

<!-- footer -->
<?php include 'include/footer.php' ; ?>