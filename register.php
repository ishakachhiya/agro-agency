
<?php
include("header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<STYLE>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');



.isha{

  height: 100vh;
  background-size: cover;
  background-position: center;
    z-index: 999;
	background:url(img/hinal.png);
	width:120%;
}
.bg-img1:after{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.7);
}
.content{
  position: absolute;
  top: 130%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 500px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.04);
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}
.content header{
  color: white;
  font-size: 33px;
  font-weight: 600;
  margin: 0 0 35px 0;
  font-family: 'Montserrat',sans-serif;
}
.field{
  position: relative;
  height: 45px;
  width: 100%;
  display: flex;
  background: rgba(255,255,255,0.94);
}
.field1{
  position: relative;
  height: 35px;
  width: 100%;
  display: flex;
  background: rgba(255,255,255,0.94);
}
.field span{
  color: #222;
  width: 40px;
  line-height: 45px;
}
.field input{
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: #222;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.space{
  margin-top: 16px;
}
.show{
  position: absolute;
  right: 13px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  display: none;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.pass-key:valid ~ .show{
  display: block;
}
.pass{
  text-align: left;
  margin: 10px 0;
}
.pass a{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.pass:hover a{
  text-decoration: underline;
}
.field input[type="submit"]{
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.field input[type="reset"]{
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.field input[type="submit"]:hover{
  background: #2691d9;
}
.login{
  color: white;
  margin: 20px 0;
  font-family: 'Poppins',sans-serif;
}
.links{
  display: flex;
  cursor: pointer;
  color: white;
  margin: 0 0 20px 0;
}
.facebook,.instagram{
  width: 100%;
  height: 45px;
  line-height: 45px;
  margin-left: 10px;
}
.facebook{
  margin-left: 0;
  background: #4267B2;
  border: 1px solid #3e61a8;
}
.instagram{
  background: #E1306C;
  border: 1px solid #df2060;
}
.facebook:hover{
  background: #3e61a8;
}
.instagram:hover{
  background: #df2060;
}
.links i{
  font-size: 17px;
}
i span{
  margin-left: 8px;
  font-weight: 500;
  letter-spacing: 1px;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.signup{
  font-size: 15px;
  color: white;
  font-family: 'Poppins',sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
}
</STYLE>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body  background="img/hinal.png">
<div>
<br /><br />
         <div class="content">
            <header>Registration Form</header>
            <form action="#" method="post">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" required placeholder="Id" name="id">
               </div>
			   
               <div class="field space">
                  <span class="fa fa-user"></span>
                  <input type="text" class="pass-key" required placeholder="Username" name="nm">
                  <span class="show">SHOW</span>
               </div>
               <div class="field space">
                  <span class="fa fa-user"></span>
                  <input type="text" class="pass-key" required placeholder="Email" name="em">
                  <span class="show">SHOW</span>
               </div>
			   <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" required placeholder="Password" name="pw">
                  <span class="show">SHOW</span>
               </div>
			   <div class="field space">
                  <img src="img/hinal1.jpg"/>
                  <input type="text" class="pass-key" required placeholder="City" name="ct">
                  <span class="show">SHOW</span>
               </div>
			   <div class="field space">
                  <img src="img/hinal1.jpg"/>
                  <input type="text"class="pass-key" required placeholder="Address" name="ad">
                  <span class="show">SHOW</span>
               </div>
			  <div class="field1 space">&nbsp;&nbsp;
                  <span class="fa fa-user"></span> &nbsp;&nbsp;Gender
				  &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male"><b>&nbsp;male</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Female"><b>&nbsp;female</b>
                  <span class="show">SHOW</span>
               </div>
			   <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" required placeholder="Mobileno" name="no" maxlength="10">
                  
               </div>
			   <div class="field1 space">&nbsp;&nbsp;
                    <span class="fa fa-user"></span>&nbsp;&nbsp;Hobby
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobby" value="singing"><b>&nbsp;singing</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobby" value="writing"><b>&nbsp;writing</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobby" value="dancing"><b>&nbsp;dancing</b>
                  
               </div>
			  <div class="field space">
                   <img src="img/q-removebg-preview.png"/>
                 
				  <select name="sq" class="field input"  >
			
			<option class="field input">Security Question</option>
			<option>Friend Name</option>
			<option>School Name</option>
			<option>School Id</option>
			</select>
               </div>
			   
			   <div class="field space">
                 <img src="img/lock.png"/>
                  <input type="text" class="pass-key" required placeholder="Security Answer" name="sa">
                  <span class="show">SHOW</span>
               </div>
              </br><br />
               <div class="field">
                  <input type="submit" value="Sumbit" name="submit">
				
               </div>
			   <br /><div class="field">
                  <input type="reset" value="cancel" name="LOGIN">
			
               </div>
            </form>
           
         </div>
      </div>
   </div>
   </body>
</html>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php
	include("footer.php");
?>
<?php

include("connection.php");
if(isset($_POST['submit']))
{
	$Id=$_POST['id'];
	$U=$_POST['nm'];
	$Email=$_POST['em'];
	$Password=$_POST['pw'];
	$City=$_POST['ct'];
	$Address=$_POST['ad'];
	$Gender=$_POST['gender'];
	$Mobilno=$_POST['no'];
	$Hobby=$_POST['hobby'];
	$Security_Question=$_POST['sq'];
	$Security_Answer=$_POST['sa'];
	
	$q=mysql_query("insert into register values ('$Id','$U','$Email','$Password','$City','$Address','$Gender','$Mobilno','$Hobby','$Security_Question','$Security_Answer')");
	if(!$q)
	{
	echo "<script> alert(' not inserted...')</script>";
	}
	else
	{
	echo "<script> alert('inserted... ')</script>";
	}
}
?>	