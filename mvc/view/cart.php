<title>Cart</title>

<h1>Cart</h1>
<div class="container">
<div class="row">
<?php 
while ($row = $listCart->fetch_assoc()) {
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "duchuy11_shop";
  $conn_product = mysqli_connect($server,$username,$password,$database);
  $mysql_showCartItems = "SELECT * FROM products WHERE id='$row[product_id]'";
  $result = mysqli_query($conn_product,$mysql_showCartItems);
  while ($row_cart = $result->fetch_assoc()) {
   ?>
    
<div class="col-sm-4">
  <h2><?php echo $row_cart["product_name"]; ?></h2>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="images/products/<?php echo $row_cart['product_image']; ?>" alt="Card image" style="width:250px;height: 250px;">
    <div class="card-body">
      <h4 class="card-title"><kbd><?php echo number_format($row_cart["product_price"])." $"; ?></kbd></h4>
      <p class="card-text"><?php echo $row_cart["product_description"]; ?></p>
      <a href="index.php?action=delete_cart_item&id=<?php echo $row['id'];?>" class="btn btn-danger">Delete this item</a>
    </div>
  </div>
</div>

<?php
  @$cartItemCount = $cartItemCount + 1;
  @$needToPay = $row_cart["product_price"] + $needToPay;
  }
}
?>
</div>
</div>

<div class="needToPay">
  <?php 
  if (@$needToPay == 0) {
    echo "<h1>Cart is empty</h1>";
  } else {
    echo "<h1>($cartItemCount items) Need to pay : <kbd>". @number_format($needToPay)."$</kbd> <button class='btn btn-danger'>BUY</button></h1>";
  }

  ?>
</div>
