
<?php
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
 @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

body{
   background-image:url(img/hinal.png);
}

.box{
   width:600px;
   margin: 100px auto;

   border-radius: 7px;
   box-shadow: 1px 2px 4px rgba(0,0,0,.3);
}

.box .heading{
   height:70px;
   background:#333333;
   border-radius: 7px 7px 0px 0px;
   padding: 10px;
   color: #fff;
   text-align: center;
   font-family: "Rubik";
   font-size:36px;
}

.faqs{
   padding: 0px 20px 20px;
   background:
}

::-webkit-details-marker{
   float: right;
   margin-top: 3px;
}

details{
   background: #f6f6f6;
   padding: 10px 20px;
   border-radius: 7px;
   margin-top: 20px;
   font-family: "Rubik";
   font-size: 14px;
   letter-spacing: 1px;
   cursor: pointer;
}

details summary{
   outline: none;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="box">
   <p class="heading">FAQs</p>
  <div class="faqs">
      <details>
         <summary>><strong>What'services does your agro agency provide?</strong></summary>
         <p class="text">>Our agro agency provides a wide range of services to farmers and agribusinesses including crop consulting, soil analysis,pest,management,irrigation,and farm machinery sales and service.</p>
      </details>
      <details>
         <summary><strong>Can your agro agency help me with crop selection and planning?</strong></summary>
         <p class="text">Yes,our agro agency can provide crop consulting services to help you select the best crops for your area and create a planting plan. </p>
      </details>
      <details>
         <summary><strong>Does your agro agency sell farm machinery?</strong></summary>
         <p class="text">yes,our agro agency sells and services a variety of farm machinery including tractors, combines,and irrigation equipment.</p>
      </details>
	   <details>
         <summary><strong>what types of irrigation systems do you offer?</strong></summary>
         <p class="text">od irrigatiour agro agency offers a range of irrigation system including drio irrigation, center pivot irrigation, and floon</p>
      </details>
	   <details>
         <summary><strong>How can I request a service from your agro agency?</strong></summary>
         <p class="text">You can request a service from our agro agency by contacting us via phone,email,or the contact form on our website.We will be happy to schedule a consultation with you to discuss your need and provide a quote.</p>
      </details>
	  
	  <br />

	  <a href="ask.php">More FAQ</a>
   </div>
</div>
</body>
</html>
<?php
include('footer.php');
?>