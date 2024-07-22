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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/5/a556af0BELAB00000051b_b1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Bella Vita Perfume</h5>
              <p class="card-text">Price: Rs.500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Bella Vita Perfume">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/f/0/f00ec90nytitnsk0007_1new.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Titan Raw Perfume </h5>
              <p class="card-text">Price: Rs.520</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Titan Raw Perfume">
              <input type="hidden" name="Price" value="520">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/5/f/5f7e87f8901277019530.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Park Avenue Perfume</h5>
              <p class="card-text">Price: Rs.800</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Park Avenue Perfume">
              <input type="hidden" name="Price" value="800">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/7/4/74c6c58BEAAA00000040ab_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Whisky Smoke Perfume </h5>
              <p class="card-text">Price: Rs.540</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Whisky Smoke Perfume">
              <input type="hidden" name="Price" value="540">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>