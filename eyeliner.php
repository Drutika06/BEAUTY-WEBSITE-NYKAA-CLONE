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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/b/4/b439ef56902395740353_1a.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Insight Cosmetics Pro Eyeliner</h5>
              <p class="card-text">Price: Rs.150</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="!insight cosmetics pro Eyeliner">
              <input type="hidden" name="Price" value="150">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/4/946f6cbLAKME00000021ab_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Lakme Coal Black Eyeliner</h5>
              <p class="card-text">Price: Rs.100</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Lakme Coal Black Eyeliner">
              <input type="hidden" name="Price" value="100">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/4/946f6cbN_8904052432975ab_1.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">e.l.f Cosmetics 16HR Camo Eyeliner</h5>
              <p class="card-text">Price: Rs.50</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="e.l.f Cosmetics 16HR Camo Eyeliner">
              <input type="hidden" name="Price" value="50">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/9/4/946f6cbKAYBE00000061ab_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">kara Eyeliner</h5>
              <p class="card-text">Price: Rs.95</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="kara Eyeliner">
              <input type="hidden" name="Price" value="95">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>


