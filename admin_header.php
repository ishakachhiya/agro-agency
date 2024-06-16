
<?php
session_start();
		   if(isset($_SESSION["sid1"]))
			{
				echo "";
			}
			else
			{
				header("Location:add_login.php");
			}
			
		//	include("connection.php");
?><!DOCTYPE html>
<html lang="en">

<head>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
	.form-control {
  display: block;
  
  width: 80%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;  	
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.dropbtn {
  background-color:#000000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.pet{
height:120px;
width:150%;

background-color:#FFFFFF;}
</style>
</head>

<body>
    <!-- Topbar Start -->
    
        
            
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
			
         <div class="dropdown">
  <button class="dropbtn"><a href="ad_home.php">Home</a></button>
 
  
</div>
<div class="dropdown">
  <button class="dropbtn"><a href="admin_register.php">Register</a></button>
 
</div>

<div class="dropdown">
  <button class="dropbtn"><a href="admin_faq.php">FAQ</a></button>
 
</div>


  

<div class="dropdown">
  <button class="dropbtn"><a href="admin_contact.php">Contact</a></button>
 
  
</div>
<div class="dropdown">
  <button class="dropbtn"><a href="admin_feedback.php">Feedback</a></button>
 
  
</div>




<div class="dropdown">
  <button class="dropbtn"><a href="admin_payment.php">Payment</a></button>
 </div>
 
 <div class="dropdown">
  <button class="dropbtn"><a href="admin_product.php">Product</a></button>
 </div>
 
 <div class="dropdown">
  <button class="dropbtn"><a href="admin_ shipping.php"> Shipping</a></button>
 </div>
 
 <div class="dropdown">
  <button class="dropbtn"><a href="admin_subscribe.php"> Subscribe</a></button>
 </div>

<div class="dropdown">
  <button class="dropbtn"><a href="ad_logout.php">Logout</a></button>
 
  
</div>
                      
                    </div>


    <!-- Carousel Start -->
	<br>
	<br>
	

</body>
</html>


    


   


  

    <!-- Back to Top -->
  

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>  <!-- JavaScript Libraries -->
   