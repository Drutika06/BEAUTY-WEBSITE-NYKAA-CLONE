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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/8/4/8411a63LOCCI00000309_1HJ.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Loccitane Serum</h5>
              <p class="card-text">Price: Rs.6500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Loccitane Serum">
              <input type="hidden" name="Price" value="6500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/8/684773b8904153388416_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Forest Essentials Serum</h5>
              <p class="card-text">Price: Rs.4000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Forest Essentials Serum">
              <input type="hidden" name="Price" value="4000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/4/c/4c9ef6c3380810149678_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Clarins Double Serum</h5>
              <p class="card-text">Price: Rs.1500</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Clarins Double Serum">
              <input type="hidden" name="Price" value="1500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/f/af394e4RASLU00000012_0.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">RAS Luxury Serum</h5>
              <p class="card-text">Price: Rs.1950</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="RAS Luxury Serum">
              <input type="hidden" name="Price" value="1950">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>