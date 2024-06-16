<?php
	require 'connection.php';
	include("addtocart.php");
	//include('cart.php');
	
	$allItems = '';
	
	$sql = "SELECT * ,CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = mysql_query($sql);
	//$stmt->execute();
	/*$result = $stmt->get_result();
	 $num=mysql_num_rows($stmt);
  			 for($i=0;$i<$num;$i++){
			 $row = mysql_fetch_row($stmt) {
	  $grand_total += $row[5];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);*/
?>
<BODY>
 <br /><br /><br />

  <div class="container">
   <div align="center">
      <div class="col-lg-6 px-4 pb-4" id="order"><br />
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?php $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
		   <h5><b>Product Name : </b><?php echo $iname; ?></h5>
          <h5><b>Total Amount Payable : </b><?php echo $total_price; ?>/-</h5>
        </div>
        <form action="" method="post" >
          <input type="hidden" name="products" value="<?php $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?php $g; ?>">
		  <input type="hidden" name="grand_total" value="<?php $demo; ?>">
		   <input type="hidden" name="grand_total" value="<?php $g; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="text" name="contact" class="form-control" placeholder="Enter Phone"  maxlength="10" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
         
          
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
$nm=$_POST['name'];
$em=$_POST['email'];
$pn=$_POST['contact'];
$ad=$_POST['address'];
$pname=$iname;
$pr=$total_price;
$result=mysql_query("insert into shipping values('','$nm','$em','$pn','$ad','$pname','$pr')");
if($result)
{
echo "<script>alert('Order Successfully')</script>";
header("Location:Payment.php");
}
else
{
echo "<script>alert('Order not Successfully')</script>";
}	
}
include("footer.php");?>