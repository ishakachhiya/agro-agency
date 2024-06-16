<?php
include("header.php");
echo "<br />";
?>

<html>
	<head>
		<title>Demo</title>
	</head>
	<body>
		<center><form method="post" action="#"><br />
			
		  Mobile No:
			<input type="text" name="mo"/>
			<h3>&nbsp;</h3>
			<input type="submit" name="ok" value="Submit"/></center>
		
		</form>
	</body>
</html>
<?php

if(isset($_POST['ok']))
{
$mo=$_POST['mo'];
echo "<br />";
//connect to mysql server with username password and database name
$connect = mysql_connect("localhost", "root","");
mysql_select_db("agro",$connect);
// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysql_connect_error());
}
// create query to select data
$sql = "SELECT * FROM payment where Mo='$mo'";
if ($result = mysql_query($sql)) {
    if (mysql_num_rows($result) > 0) {
        echo '<table border="1px" align="center">';
        echo "<tr>";
      //  echo "<th>ID</th>";
        echo "<th>Image</th>";
    //    echo "<th>Mobile No.</th>";
        
        echo "</tr>";
        $row = mysql_fetch_array($result);
            echo "<tr>";
           // echo "<td>" . $row[0] . "</td>";
           
            //echo "<td>" . $row['category'] . "</td>";
            echo "<td height='300' width='200'>" . "<img src=uploads/".$row[1].' width=300px height="500px">' . "</td>";
			// echo "<td>" . $row[3] . "</td>";
            echo "</tr>";
        
        echo "</table>";
        // Free result set
        mysql_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysql_error($connect);
}
// Close connection
mysql_close($connect);
echo "<br />";
}
echo "<br />";
include("footer.php");
?>
	





