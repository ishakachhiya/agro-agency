<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo"error";
}
mysql_select_db("agro",$con);
?>