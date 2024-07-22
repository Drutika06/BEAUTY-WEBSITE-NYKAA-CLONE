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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/a/9a28f798901030755835.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Love Beauty & Planet Shampoo</h5>
              <p class="card-text">Price: Rs.450</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Love Beauty & Planet Shampoo">
              <input type="hidden" name="Price" value="450">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/f/6fa60d96924339210760_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Spa Shampoo</h5>
              <p class="card-text">Price: Rs.700</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Spa Shampoo">
              <input type="hidden" name="Price" value="700">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/0/c/0c6b1188906087771807_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Mamaearth Shampoo</h5>
              <p class="card-text">Price: Rs.300</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Mamaearth Shampoo">
              <input type="hidden" name="Price" value="300">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/8/28161d5NYMATRIX00109_0405241.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Matrix Shampoo</h5>
              <p class="card-text">Price: Rs.600</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Matrix Shampoo">
              <input type="hidden" name="Price" value="600">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>