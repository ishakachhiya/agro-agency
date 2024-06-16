<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include("admin_header.php");
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin product</title>
<style>
.a{
color:#CCCCCC;
}
.text
{
	color:#FFFFFF
}
.c1{
color:#aa9166;
}
</style>
</head>

<body>


	


<?php
include("connection.php");
if(isset($_GET['Id']))
{
	$uid=$_GET['Id'];
	$del="DELETE FROM   product WHERE Id=".$uid;
	$del1="DELETE FROM  product WHERE Id=".$uid;
	$res=mysql_query($del);
	$res1=mysql_query($del1);
	?>
	<script>alert("Delete record successfully")</script>
	<?php
}
?>
<!--<a href="showuser.php?uid=<?php echo $row['Id']; ?>"><img src="../images/New folder/b_drop.png" style="margin-left:10" border="0" /></a><br /> -->
<form name="frmsearch" method="post">
		<table align="center" width="32%" class="tblbg" border="5"  bgcolor="#000000" bordercolor="#aa9166">
		<tr>
<td height="73" align="center" colspan="2">
	<H1><b><p style="color:#660000;size:50">Search Data:</p></b></H1>
	
</td>
</tr>
			<tr>
				<td width="50%" class="c1"><strong>
				  Search Name:</strong></td>
			 <td> <input type="text" name="txtsearch" class="input" size="25" placeholder="Enter Your name"/></td>
		  </tr>
			 <tr align="center">
 					<td colspan="2" width="24%"><br/><input type="submit" name="search" value="Search" class="but" />&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Clear All" class="but" onClick="javascript:location.href='admin_ product.php'"  />			
			  </td>
			</tr>
  </table>
</form>
<br />	<br /><br />
<form action="" method="post" name="frm" class="text">
<table width="80%" align="center" border="5" class="tblbg" cellspacing="1" cellpadding="1"  bgcolor="#000000" bordercolor="#aa9166">
	<tr class="c1">
		
		<th width="11%">Id</th>
		<th width="16%" >product_name</th>
		<th width="16%" >product_price</th>
		<th width="16%" >product_qty</th>
		<th width="16%" >product_image</th>
		<th width="16%" >product_code</th>
		
		<th width="5%" >Delete</th>
	
	</tr>
	<?php
	$myCondition = "";
	$_REQUEST["txtsearch"] = isset($_REQUEST["txtsearch"]) && strlen($_REQUEST["txtsearch"]) > 0 ? $_REQUEST["txtsearch"] : "";
	
	if(isset($_REQUEST["txtsearch"]) && strlen($_REQUEST["txtsearch"]) > 0)
		$myCondition = " WHERE  product_name LIKE '%".$_REQUEST["txtsearch"]."%'";
	
	$qry_select = "SELECT * FROM product".$myCondition;
	$res_select = mysql_query($qry_select) or die(mysql_error());
	$cnt_select = mysql_num_rows($res_select);
	
	$USERPERPAGE = 100;
 		if(!isset($_REQUEST['pn']) or $_REQUEST['pn'] == "")
			$PageNo = 1;
		else
			$PageNo=$_REQUEST['pn']; 
		 
	$StartRow  =   $USERPERPAGE * ($PageNo-1);		
	$cnt_page = mysql_affected_rows();
	$totalpages = (int)($cnt_page / $USERPERPAGE);
	if(($cnt_page % $USERPERPAGE)!=0)
		$totalpages++;
		
	$qry_select .= " LIMIT $StartRow,$USERPERPAGE";
	$res_select = mysql_query($qry_select);
	$cnt_select = mysql_affected_rows();
		
	if($cnt_select > 0)
	{
		while($row = mysql_fetch_array($res_select))
		{?>
					<tr >
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['product_name']; ?></td>
				<td><?php echo $row['product_price']; ?></td>
				<td><?php echo $row['product_qty']; ?></td>
				<td><?php echo $row['product_image']; ?></td>
				<td><?php echo $row['product_code']; ?></td>
				
				
				
				<td align="center"><a href="admin_product.php?Id=<?php echo $row['id']; ?>"><img src="img/b_drop.png" style="margin-left:10" border="0" /></a><br /></td>
				
		</tr>
		<?php 			
		}
	}
	else
	{
	?>
		<tr class="tblrow">
			<td colspan="9" align="center">No Record Found!!</td>
		</tr>
	<?php
	}
	?>
	
	
</table>
<br /><br /><br />
</form>

<?php
	include("admin_footer.php");
?>

</body>
</html>


