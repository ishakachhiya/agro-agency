
<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="style.css" />
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
.bodyclass{
position: relative;
min-height: 100%;
color: #555555;
background-image:url(img/hinal.png);
margin: 0;
padding-bottom: 0px;
}


main {
  width: 90%;
  min-height: 10vh;
  overflow: hidden;
  align:center;
  padding: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.box {
  position: relative;
  aline:center;
  width: 100%;
  max-width: 1020px;
  height: 640px;
  background-color:#CCCCCC ;
  border-radius: 3.3rem;
  box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
}

.inner-box {
  position: absolute;
  width: calc(100% - 4.1rem);
  height: calc(100% - 4.1rem);
  top: 50%;
  
  left: 50%;
  transform: translate(-50%, -50%);
}

.forms-wrap {
  position: absolute;
  height: 100%;
  width: 45%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr;
  transition: 0.8s ease-in-out;
}

form {
  max-width: 260px;
  width: 100%;
  margin: 0 auto;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
  transition: opacity 0.02s 0.4s;
}

form.sign-up-form {
  opacity: 0;
  pointer-events: none;
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  width: 27px;
  margin-right: 0.3rem;
}

.logo h4 {
  font-size: 1.1rem;
  margin-top: -9px;
  letter-spacing: -0.5px;
  color: #151111;
}

.heading h2 {
  font-size: 2.1rem;
  font-weight: 600;
  color: #151111;
}

.heading h6 {
  color: #bababa;
  font-weight: 400;
  font-size: 0.75rem;
  display: inline;
}

.toggle {
  color: #151111;
  text-decoration: none;
  font-size: 0.75rem;
  font-weight: 500;
  transition: 0.3s;
}

.toggle:hover {
  color: #8371fd;
}

.input-wrap {
  position: relative;
  height: 37px;
  margin-bottom: 2rem;
}

.input-field {
  position: absolute;
  width: 100%;
  height: 100%;
  background: none;
  border: none;
  outline: none;
  border-bottom: 1px solid #bbb;
  padding: 0;
  font-size: 0.95rem;
  color: #151111;
  transition: 0.4s;
}

label {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  font-size: 0.95rem;
  color: #bbb;
  pointer-events: none;
  transition: 0.4s;
}

.input-field.active {
  border-bottom-color: #151111;
}

.input-field.active + label {
  font-size: 0.75rem;
  top: -2px;
}

.sign-btn {
  display: inline-block;
  width: 100%;
  height: 43px;
  background-color: #151111;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 0.8rem;
  font-size: 0.8rem;
  margin-bottom: 2rem;
  transition: 0.3s;
}

.sign-btn:hover {
  background-color: #8371fd;
}

.text {
  color: #bbb;
  font-size: 0.7rem;
}

.text a {
  color: #bbb;
  transition: 0.3s;
}

.text a:hover {
  color: #8371fd;
}

main.sign-up-mode form.sign-in-form {
  opacity: 0;
  pointer-events: none;
}

main.sign-up-mode form.sign-up-form {
  opacity: 1;
  pointer-events: all;
}

main.sign-up-mode .forms-wrap {
  left: 55%;
}

main.sign-up-mode .carousel {
  left: 0%;
}

.carousel1 {
  position: absolute;
  height: 100%;
  width: 55%;
  left: 45%;
  top: 0;
  
  border-radius: 2rem;
  display: grid;
  grid-template-rows: auto 1fr;
  padding-bottom: 2rem;
  overflow: hidden;
  transition: 0.8s ease-in-out;
}

.images-wrapper {
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr;
}

.image {
  width: 100%;
  height: 100%;
  grid-column: 1/2;
  grid-row: 1/2;
  opacity: 0;
  transition: opacity 0.3s, transform 0.5s;
}

.img-1 {
  transform: translate(0, -50px);
}

.img-2 {
  transform: scale(0.4, 0.5);
}

.img-3 {
  transform: scale(0.3) rotate(-20deg);
}

.image.show {
  opacity: 1;
  transform: none;
}

.text-slider {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.font1{
size:220px;
}
.text-wrap {
  max-height: 2.2rem;
  overflow: hidden;
  margin-bottom: 2.5rem;
}

.text-group {
  display: flex;
  flex-direction: column;
  text-align: center;
  transform: translateY(0);
  transition: 0.5s;
}

.text-group h2 {
  line-height: 2.2rem;
  font-weight: 600;
  font-size: 1.6rem;
}

.bullets {
  display: flex;
  align-items: center;
  justify-content: center;
}

.bullets span {
  display: block;
  width: 0.5rem;
  height: 0.5rem;
  background-color: #aaa;
  margin: 0 0.25rem;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.3s;
}

.bullets span.active {
  width: 1.1rem;
  background-color: #151111;
  border-radius: 1rem;
}

@media (max-width: 850px) {
  .box {
    height: auto;
    max-width: 550px;
    overflow: hidden;
  }

  .inner-box {
    position: static;
    transform: none;
    width: revert;
    height: revert;
    padding: 2rem;
  }

  .forms-wrap {
    position: revert;
    width: 100%;
    height: auto;
  }

  form {
    max-width: revert;
    padding: 1.5rem 2.5rem 2rem;
    transition: transform 0.8s ease-in-out, opacity 0.45s linear;
  }

  .heading {
    margin: 2rem 0;
  }

  form.sign-up-form {
    transform: translateX(100%);
  }

  main.sign-up-mode form.sign-in-form {
    transform: translateX(-100%);
  }

  main.sign-up-mode form.sign-up-form {
    transform: translateX(0%);
  }

  .carousel {
    position: revert;
    height: auto;
    width: 100%;
    padding: 3rem 2rem;
    display: flex;
  }

  .images-wrapper {
    display: none;
  }

  .text-slider {
    width: 100%;
  }
}

@media (max-width: 530px) {
  main {
    padding: 1rem;
  }

  .box {
    border-radius: 2rem;
  }

  .inner-box {
    padding: 1rem;
  }

  .carousel {
    padding: 1.5rem 1rem;
    border-radius: 1.6rem;
  }

  .text-wrap {
    margin-bottom: 1rem;
  }

  .text-group h2 {
    font-size: 1.2rem;
  }

  form {
    padding: 1rem 2rem 1.5rem;
  }
}
.ab{
background-position:left;
}
  .style1 {
	color: #FFFFFF;
	font-size:36px;
	font-weight: bold;
}
  .style2 {
	font-size:36px;
	color: #ED6436;
	font-weight: bold;
}
  </style>
   
  </head>
  <center>
  <body  class="bodyclass">

	
      <div class="box" align="left">
        <div class="inner-box" >
          <div class="forms-wrap">
            <form action="#" method="post" autocomplete="off" class="sign-in-form">
              

              <div class="heading">
                <h2>Feedback</h2>
               
                
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                  
                    class="input-field"
                    autocomplete="off"  placeholder="Name" name="nm"
                    required
                  />
                  
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                   
                    class="input-field"
                    autocomplete="off" placeholder="Email" name="e"
                    required
                  />
                 
                </div>
                <div class="input-wrap">
                  <input
                    type="text"
                  minlength="10"
                    class="input-field"
                    autocomplete="off" placeholder="Phone number" name="no" maxlength="10"
                    required
                  />
                 
                </div>
				 <div class="input-wrap">
                  <input
                    type="text"
                  
                    class="input-field"
                    autocomplete="off"  placeholder="Message" name="m"
                    required
                  />
                 
                </div>

				<div class="toggle">
				<input type="radio" name="rate" value="Good"   class="ab"><b>Good</b>
			<input type="radio" name="rate" value="very good" align="absmiddle"><b> very good</b>
			<input type="radio" name="rate" value="Excellent"><b>Excellent</b></div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               &nbsp;&nbsp; <input type="submit" value="Sign In" class="sign-btn" name="submit"/>&nbsp;&nbsp;

               
              </div>
            </form>

          </div>
</div>
          <div class="carousel1">
            <div class="images-wrapper">
              <img src="img/f5.gif" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/image3.png" class="image img-3" alt="" />
            </div>

          </div></div>
       

    <!-- Javascript file -->

    	 <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
				 <h1 class="mb-3 display-5 text-capitalize text-white"> <span class="style2"> <span class="style1">&nbsp;</span>Agro <span class="style1">Agency&nbsp</span></span><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
              <p class="m-0">We"B V S Agro Agencies" are the leading Wholesale Trader of Inter Cultivator,Power Weeder,Knapsack Power Sprayer, Agricultural Power Sprayer,Agricultural Sprayer Pump,Grass Cutter Machine,etc.  </p>
          </div>
<div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i><a href="https://maps.google.com">Yogig mahraj college. Dhari</a></p>
                        <p><i class="fa fa-phone-alt mr-2"></i><a href="https://www.truecaller.com/">8156070550</p></a>
						 <p><i class="fa fa-phone-alt mr-2"></i><a href="https://www.truecaller.com/">6353012481 </p></a>
                        <p><i class="fa fa-envelope mr-2"></i><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-2080351977%3A1680234290287792&ifkv=AQMjQ7R4BEllQfjimsX9yauSO0IJGmgloJ4m7dbhr2ZiJnPrJvuYugN5XXbOT1Sg7Zvtdq96G2ZXQA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">ishakapatel2004@gmail.com </a></p>
						<p><i class="fa fa-envelope mr-2"></i><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-2080351977%3A1680234290287792&ifkv=AQMjQ7R4BEllQfjimsX9yauSO0IJGmgloJ4m7dbhr2ZiJnPrJvuYugN5XXbOT1Sg7Zvtdq96G2ZXQA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">hinalmendapra@gmail.com </a></p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                                         <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="feedback.php"><i class="fa fa-angle-right mr-2"></i>Feedback</a>
                            <a class="text-white mb-2" href="addtocart.php"><i class="fa fa-angle-right mr-2"></i>addtocart</a>
							<a class="text-white mb-2" href="gallery.php"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                            <a class="text-white" href="CONTACT1.PHP"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
							
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="nm" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="em" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
							<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block border-0" value="Submit Now">
							                                                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Agro agency</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">Isha & Hinal</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="FAQ1.PHP">FAQs</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

  </body>

  
</html> 
<?php
include("connection.php");

if(isset($_POST['submit']))
{
$Name=$_POST['nm'];
$Email=$_POST['e'];
$phoneno=$_POST['no'];
$Message=$_POST['m'];
$rate=$_POST['rate'];

$q=mysql_query("insert into feedback values(' ','$Name','$Email','$phoneno','$Message','$rate')");
	if(!$q)
	{
	echo "<script> alert ('not inserted...')</script>";
	}
	else
	{
		echo"<script> alert('inserted...')</script>";
	}
	}
?>


