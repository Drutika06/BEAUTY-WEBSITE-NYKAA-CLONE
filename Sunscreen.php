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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/d/6/d6cd83bDOTKE00000296_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Dot & Key SPF 50+</h5>
              <p class="card-text">Price: Rs.500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value=" Dot & Key SPF 50+">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/d/e/dedc57fDOTKE00000158_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Dot & Key Won't Budge Sunscreen</h5>
              <p class="card-text">Price: Rs.500</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Dot & Key Won't Budge Sunscreen">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/8/f/8f73469MINIM00000027_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Minimalist Suncreen</h5>
              <p class="card-text">Price: Rs.600</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Minimalist Suncreen">
              <input type="hidden" name="Price" value="600">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/e/2e4ac8eAQUAA00000021_main.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Acqualogica Sunscreen </h5>
              <p class="card-text">Price: Rs.650</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Acqualogica Sunscreen">
              <input type="hidden" name="Price" value="650">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>