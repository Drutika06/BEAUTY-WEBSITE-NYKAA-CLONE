<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/5/a556af0BELAB00000343b_b1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Bella Vita Perfume</h5>
              <p class="card-text">Price: Rs.550</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Bella Vita Perfume">
              <input type="hidden" name="Price" value="550">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/8/2896eec6294018404316_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Kayali Perfume </h5>
              <p class="card-text">Price: Rs.2300</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Kayali Perfume">
              <input type="hidden" name="Price" value="2300">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/e/d/ed0cd69CAROL00000028_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Carolina Perfume</h5>
              <p class="card-text">Price: Rs.2500</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Carolina Perfume">
              <input type="hidden" name="Price" value="2500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/4/d/4d70a00NYKAB00000943_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Love Struck Perfume </h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Love Struck Perfume">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>