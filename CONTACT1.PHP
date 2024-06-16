<?php
include("header.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>CSS Responsive Contact Form With Google Map</title>
		<link href="css/C1.css" rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<style>
	.bg{

margin-top:30px;
	}	
	.cl{
	color:#FFFFFF;
	}
	
	
</style>
	</head>


	<body background="img/bg.png"> 
	<br />
<br />
<br /><div  class="bg">
		<div class="contact-wrap">
			<div class="contact-in">
				<h1>Contact Info</h1>
				<h2 class="c1"><i class="fa fa-phone" aria-hidden="true"></i><span 
				class="cl"> Phone</h2>
				<p><a href="https://www.truecaller.com/">8156070550<br />	</br>6353012481</p></a>
				<h2 class="bg"><i class="fa fa-envelope" aria-hidden="true"></i> 
				<span class="cl">Email</h2>
				<p><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-2080351977%3A1680234290287792&ifkv=AQMjQ7R4BEllQfjimsX9yauSO0IJGmgloJ4m7dbhr2ZiJnPrJvuYugN5XXbOT1Sg7Zvtdq96G2ZXQA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">ishakapatel2004@gmail.com</a></p>
				<h2 class="bg"><i class="fa fa-map-marker" aria-hidden="true"></i>
				<span class="cl"> Address</h2>
				<p><a href="https://maps.google.com">Sathamba, Gujarat, India</a></p>
				<ul>
					<li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="contact-in">
				<h1>Send a Message</h1>
				<form action="#" method="post">
					<input type="text" placeholder="Full Name"  name="name"class="contact-in-input"required>
					<input type="email" placeholder="Email" name="em" class="contact-in-input"required>
					<input type="text" placeholder="mobile no" name="no"class="contact-in-input" maxlength="10"required>
					<textarea placeholder="Message" name="m" class="contact-in-textarea"required></textarea>
					<input type="submit" value="SUBMIT" class="contact-in-btn" name="submit"required>
				</form>
			</div>
			
		</div>
		<table width="1229" border="0" align="center">
  <tr>
  <td width="130">&nbsp;&brvbar;</td>
    <td width="1080"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.1547425351696!2d70.45186591670941!3d21.73552582940914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39581fb56e9edc55%3A0xa479cf6dcc1a3f5c!2sGujarat%20Agro%20Agency!5e0!3m2!1sen!2sin!4v1662360965192!5m2!1sen!2sin" width="1090" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
    <td width="15">&nbsp;</td>
  </tr>
  
</table>

		<div  class="contact-wrap1"></div>
		</div>
	</body>
</html>
<?php
include("connection.php");

if(isset($_POST['submit']))
{
$Name=$_POST['name'];
$Em=$_POST['em'];
$Mobileno=$_POST['no'];
$Message=$_POST['m'];

$q=mysql_query("insert into contact values('','$Name','$Em','$Mobileno','$Message')");
	if(!$q)
	{
	echo "<script> alert (' inserted...')</script>";
	}
	else
	{
		echo"<script> alert(' not inserted...')</script>";
	}
	}
?>
<?php
include("footer.php");
?>
