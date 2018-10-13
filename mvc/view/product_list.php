<div class="container">
	<div class="row">
<?php while ($row = $listProduct->fetch_assoc()) {
?>

<div class="col-sm-4">
  <h2><?php echo $row["product_name"]; ?></h2>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="images/products/<?php echo $row['product_image']; ?>" alt="Card image" style="width:250px;height: 250px;">
    <div class="card-body">
      <h4 class="card-title"><kbd><?php echo number_format($row["product_price"])." $"; ?></kbd></h4>
      <p class="card-text"><?php echo $row["product_description"]; ?></p>
      <a href="index.php?action=add_cart&id=<?php echo $row['id'];?>" class="btn btn-danger">Add to cart</a>
    </div>
</div>
</div>
<?php } ?>

</div>
</div>