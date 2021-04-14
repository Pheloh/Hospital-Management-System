<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>SamariMed Hospital | Contact Us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.php" style="font-size: 30px;">SamariMed </br>Hospital Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
					
						<li class="active"><a href="contact.php">Get in Touch</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>P.O. Box 1001- 40100 - Kisumu , Nyanza , Kenya </br>
                                    Tom Mboya Street off Moinne Drive,</br> KS 60045 </p>
						   		<p>+254 725 61 92 47 or +254 740 61 92 47</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:samari.med@hospital.org">samari.med@hospital.org</a></span></p>



                </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input type="text" name="fullname" required="true" value="" placeholder="John Erick"></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input type="email" name="emailid" required="ture" value="" placeholder="john@erick.com"></span>
						    </div>
						    <div>
						     	<span><label>Mobile No.</label></span>
						    	<span><input type="text" name="mobileno" required="true" value="" placeholder="0700000000"></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true">Message Here</textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
<!--		   			<ul>-->
<!--						<li><a href="index.php">Home</a></li>-->
<!--						-->
<!--						<li><a href="contact.php">contact</a></li>-->
<!--					</ul>-->
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

