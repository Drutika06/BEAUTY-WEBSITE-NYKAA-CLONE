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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/5/8/586c7988901030735851_001.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Lakme 9to5 Nailpolish</h5>
              <p class="card-text">Price: Rs.150</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value=" Lakme 9to5 Nailpolish">
              <input type="hidden" name="Price" value="150">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/1/c/1c863308904392100909_1new.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">M.A.C Studio Nailpolish</h5>
              <p class="card-text">Price: Rs.180</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="M.A.C Studio Nailpolish">
              <input type="hidden" name="Price" value="180">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/b/3/b3041adELLE100000061_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">ELLE 18 Glossy Nailpolish</h5>
              <p class="card-text">Price: Rs.250</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="ELLE 18 Glossy Nailpolish">
              <input type="hidden" name="Price" value="250">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/3/0/301a0b58901030772801_01.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Lakme Ultimate Glam Nailpolish</h5>
              <p class="card-text">Price: Rs.195</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Lakme Ultimate Glam Nailpolish">
              <input type="hidden" name="Price" value="195">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>


