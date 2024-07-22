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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/f/8/f81ce043337875597326_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> CeraVe Facewash</h5>
              <p class="card-text">Price: Rs.500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="CeraVe Facewash">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/c/c/ccc66daFOXTA00000003_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Foxtale Facewash</h5>
              <p class="card-text">Price: Rs.550</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Foxtale Facewash">
              <input type="hidden" name="Price" value="550">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/c/6c049feDOTKE00000200_2002241.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Dot and Key Facewash</h5>
              <p class="card-text">Price: Rs.400</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value=" Dot and Key Facewash">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/c/6c1a17c8901030681509_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ponds Facewash </h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Ponds Facewash">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>