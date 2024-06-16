<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title>AgroAgency - Agro agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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
    <div class="container-fluid1">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <br>


                    
                    
                  
					<?php if(isset($_SESSION["sid"]) ) { 
					echo "<span class='text-white'>Welcome :" .$_SESSION['sid']."</span>";?>
					&nbsp;&nbsp; <span class="text-white">|</span>
  <a href="logout.php" class="text-white pl-3">Logout</a>
  <?php } else { ?>
  <a href="login.php" class="text-white pl-3">Login</a>
  <?php } ?>&nbsp;&nbsp;<span class="text-white">|</span><a class="text-white px-3" href="register.php">Register</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="https://www.facebook.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="https://twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="https://www.linkedin.com">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="https://www.instagram.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="https://www.youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pet">
		<table width="1394">
		<tr>
		<td width="695"><img src="img/alogo1.png"></h1></td>
		<td width="140"> <h6>&nbsp;</h6>
          </td>
		
		<td width="174"><h6>Email Us</h6>
          <p class="m-0"><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-2080351977%3A1680234290287792&ifkv=AQMjQ7R4BEllQfjimsX9yauSO0IJGmgloJ4m7dbhr2ZiJnPrJvuYugN5XXbOT1Sg7Zvtdq96G2ZXQA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">ishakapatel2004@gmail.com</a></br></br><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-2080351977%3A1680234290287792&ifkv=AQMjQ7R4BEllQfjimsX9yauSO0IJGmgloJ4m7dbhr2ZiJnPrJvuYugN5XXbOT1Sg7Zvtdq96G2ZXQA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">hinalmendapra@gmail.com </p></td>
		<td width="190"><h6>Call Us</h6>
          <p class="m-0"><a href="https://www.truecaller.com/">8156070550</a></br></br><a href="https://www.truecaller.com/">6353012481</p></td>
            
               
           
          </tr>
		  </table>
    </div>
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
  <button class="dropbtn"><a href="home.php">Home</a></button>
 
  
</div>
<div class="dropdown">
  <button class="dropbtn"><a href="about.php">About</a></button>
 
</div>

<div class="dropdown">
  <button class="dropbtn"><a href="gallery.php">Gallery</a></button>
 
  
</div>

  

<div class="dropdown">
  <button class="dropbtn"><a href="CONTACT1.PHP">Contact</a></button>
 
  
</div>
<div class="dropdown">
  <button class="dropbtn"><a href="feedback.php">Feedback</a></button>
 
  
</div>
<div class="dropdown">
  <button class="dropbtn"><a href="faq.php">FAQs</a></button>
 
  
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
   