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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/c/6c1a17c8901030751677_0.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Tresemme smooth Conditioner</h5>
              <p class="card-text">Price: Rs.320</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Tresemme smooth Conditioner">
              <input type="hidden" name="Price" value="320">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/b/5/b5670a8REDKE00000002_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Redken Conditioner</h5>
              <p class="card-text">Price: Rs.800</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Redken Conditioner ">
              <input type="hidden" name="Price" value="800">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/3/7/3781a6a8904417302745_1060524.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">BBlunt Conditioner</h5>
              <p class="card-text">Price: Rs.230</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="BBlunt Conditioner">
              <input type="hidden" name="Price" value="230">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/0/b/0bd66eb9636400243_1507231.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Olapex Conditioner</h5>
              <p class="card-text">Price: Rs.800</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Olapex Conditioner">
              <input type="hidden" name="Price" value="800">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>