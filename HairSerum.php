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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/c/4/c44cbfaWISHC00000042_1PO.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Wish Care HairSerum</h5>
              <p class="card-text">Price: Rs.650</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Wish Care HairSerum">
              <input type="hidden" name="Price" value="650">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/b/f/bf5d6efPILGR00000020a_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Pilgrim HairSerum</h5>
              <p class="card-text">Price: Rs.600</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Pilgrim HairSerum ">
              <input type="hidden" name="Price" value="600">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/d/9dea1e7MINIM00000165_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Minimalist HairSerum</h5>
              <p class="card-text">Price: Rs.560</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Minimalist HairSerum">
              <input type="hidden" name="Price" value="560">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/1/61894d98901247577022_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Streax HairSerum</h5>
              <p class="card-text">Price: Rs.350</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Streax HairSerum">
              <input type="hidden" name="Price" value="350">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>