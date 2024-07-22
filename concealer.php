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
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/f/1/f1db8cd8904207503161_1.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> Insight Cosmetics Pro concealer</h5>
              <p class="card-text">Price: Rs.150</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="!insight cosmetics pro concealer">
              <input type="hidden" name="Price" value="150">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/e/5/e5bec44773602684465_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">M.A.C Studio Fix Every - Wear All</h5>
              <p class="card-text">Price: Rs.100</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="M.A.C Studio Fix Every - Wear All">
              <input type="hidden" name="Price" value="100">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/6/0/609332858602.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">e.l.f Cosmetics 16HR Camo Concealer</h5>
              <p class="card-text">Price: Rs.50</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="e.l.f Cosmetics 16HR Camo Concealer">
              <input type="hidden" name="Price" value="50">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/b/abeb16c651986702480.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">kara concealer</h5>
              <p class="card-text">Price: Rs.95</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="kara lipgloss">
              <input type="hidden" name="Price" value="95">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>


