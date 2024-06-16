
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include("admin_header.php");
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.a{
color:#CCCCCC;
}
.c1{
color:#aa9166;
}
.btn1{position: relative;
  margin-top: 15px;
  padding: 15px 35px;
  font-size: 16px;
  font-weight: 300;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #aa9166;
  border: 2px solid #aa9166;
  border-radius: 0;
  background: #121518;
  transition: .3s;
}
</style>
</head>



<body>
						

<?php

include("connection.php");
if($_GET['Id'])
{
		$id = ($_GET['Id']);
		$sel_user = mysql_query("select * from faq where Id = $id");
		$fet_user = mysql_fetch_array($sel_user);
		$id=$fet_user['Id'];
		$name = $fet_user["Name"];
		$email=$fet_user["Email"];
		$subject= $fet_user["Question"];
        $message=$fet_user["Answer"];
		
		
		
		
		
	}
?>
<br />
		<form name="frm"  method="post"  action="Edit_faq.php?Id=<?php echo $id; ?>">
			<table height="48" align="center">
<tr>
<td width="850">
    <div class="section-header">
                        <h2><center>Upadte your Data</h2>
    </div></td>
  </tr>
		
</table>
<table width="34%" border="5" cellpadding="1" cellspacing="1" align="center"  bgcolor="#000000" bordercolor="#aa9166">

							<tr class="tblrow">
								<td align="center" class="c1"> ID:</td><td align="center" class="a"><?php echo $id; ?></td>
							</tr>
							<tr class="tblrow">
								<td align="center" class="c1">Name:</td><td align="center"><input type="text" name="name" value="<?php echo $name; ?>" class="input" /></td>
							</tr>
							<tr class="tblrow">
								<td align="center" class="c1">Email:</td><td align="center"><input type="text" name="email" value="<?php echo $email; ?>" class="input" /></td>
							</tr>
							<tr class="tblrow">
								<td align="center" class="c1">Question:</td><td align="center"><input type="text" name="sub" value="<?php echo $subject; ?>" class="input" /></td>
							</tr>
							<tr class="tblrow">
								<td align="center" class="c1">Answer:</td><td align="center"><input type="text" name="msg" value="<?php echo $message; ?>" class="input" /></td>
							</tr>
						
							</table>
									<center><button class="btn1" type="submit" name="submit" value="Save" class="but">Save</button>&nbsp;&nbsp;&nbsp;
									<button class="btn1" type="button" name="reset" value="Cancel" class="but" onclick="location.href='edit_fee.php'">cancle</button>
								</center>
							
		</form>


</div>
				
					
					</div>
                    </div>


<?php
	include("admin_footer.php");
?>

</body>
</html>