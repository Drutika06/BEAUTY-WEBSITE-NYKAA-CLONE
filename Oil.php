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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/8/9/8908008452000_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Max Care Oil</h5>
              <p class="card-text">Price: Rs.200</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Max Care Oil">
              <input type="hidden" name="Price" value="200">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/1/a1408d4MAMAE00000865_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Mamaearth Oil</h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Mamaearth Oil ">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/a/9a28f79MINIM00000018_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Minimalist Oil</h5>
              <p class="card-text">Price: Rs.560</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Minimalist Oil">
              <input type="hidden" name="Price" value="560">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/c/9cb0ebaNATHA00000007_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Nat Habit Oil</h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Nat Habit Oil">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>