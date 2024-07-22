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
            <img src=https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/3/234a29a773602000760_rv__1.jpg class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> !Nykaa Cosmetics So Creme</h5>
              <p class="card-text">Price: Rs.400</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="!Nykaa Cosmetics So Creme">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/2/0/206da3f192250005673_1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Colour Pop Blush</h5>
              <p class="card-text">Price: Rs.200</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Colour Pop Blush">
              <input type="hidden" name="Price" value="200">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/a/3/a3c4aaeLAKME00001196_00.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Lakme Lip & blush Tint</h5>
              <p class="card-text">Price: Rs.300</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Lakme Lip & blush Tint">
              <input type="hidden" name="Price" value="300">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/8/7/87a23b2SWIAC00001615_001.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Swiss Beauty blush</h5>
              <p class="card-text">Price: Rs.450</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Swiss Beauty blush">
              <input type="hidden" name="Price" value="450">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>