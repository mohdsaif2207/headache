<!-- connect file -->
<?php
  include('includes/connect.php');
  include('function/common_function.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and mysql</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
<div class="container-fluid p-0">
<!--child 1--> 
<nav class="navbar navbar-expand-lg" style="background-color:#32cd32;">

      <div class="container-fluid">
         <img src="images/logo.jpeg" alt="Bootstrap" width="170" >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 center">
            <li class="nav-item">
              <a class="nav-link "  href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="display_all.php">PRODUCT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/project.html">CONTACT</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link"  href="/contact.html">TOTAL PRICE</a>
            </li>
            <li>
            <a class="nav-link" href="/services.html"><i class="fa-solid fa-cart-shopping"></i> CART<sup><b><?php cart_item() ?></b></sup></a>
           </li>
            <li>
            <a class="nav-link" href="/services.html"><i class="fa-solid fa-circle-user"></i> LOGIN</a>
            </li>
          </ul>
          <form class="d-flex" role="search" action="search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search for brand,product and more..." aria-label="Search" name="search_data">
            <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product">
            </form>
        </div>
</nav>

<!--child 4-->
<div class="row">
  <div class="col-md-10">
  <!--products-->
<div class="row">
<!-- fetching gproducts -->

<?php
getting_all_products();
get_unique_brands();
get_unique_category();
?>

<!-- row end-->
</div>
<!-- column end-->
</div>
  

</div>
  <!--child last-->
<!-- including footer-->
<?php
  include('includes/footer.php');
?>
</div>

<!--js bootstraplink-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


