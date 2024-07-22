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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/3/3/33a55548906118410682_1140624.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Plum Bodymist</h5>
              <p class="card-text">Price: Rs.340</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Plum Bodymist">
              <input type="hidden" name="Price" value="340">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/1/c/1ca01738904245706586_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Wanderlust Bodymist </h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Wanderlust Bodymist">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/d/add6df9PURES00000014_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">PureSense Bodymist</h5>
              <p class="card-text">Price: Rs.300</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="PureSense Bodymist">
              <input type="hidden" name="Price" value="300">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/e/9/e98b30fSOLDE00000111_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Cheirosa Bodymist</h5>
              <p class="card-text">Price: Rs.2200</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Cheirosa Bodymist">
              <input type="hidden" name="Price" value="2200">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>