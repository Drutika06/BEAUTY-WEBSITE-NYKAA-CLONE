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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/8/c/8c284888904214807399_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Blue Heaven Lipbalm</h5>
              <p class="card-text">Price: Rs.150</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Blue Heaven Lipbalm">
              <input type="hidden" name="Price" value="150">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/f/4/f436ef28906147701225_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Dot & Key Lipbalm</h5>
              <p class="card-text">Price: Rs.220</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Dot & Key Lipbalm">
              <input type="hidden" name="Price" value="220">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/e/0/e0ce9068904409734738_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Swiss Beauty Lipbalm</h5>
              <p class="card-text">Price: Rs.100</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Swiss Beauty Lipbalm">
              <input type="hidden" name="Price" value="100">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/1/21d8b41PLUMX00000592_0812231.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Plum Candy Lipbalm</h5>
              <p class="card-text">Price: Rs.170</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Plum Candy Lipbalm">
              <input type="hidden" name="Price" value="170">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>