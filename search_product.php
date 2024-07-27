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
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display_all.php">PRODUCT</a>
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
          <form class="d-flex" role="search" action="" method="get">
            <input class="form-control me-2" type="search" placeholder="Search for brand,product and more..." aria-label="Search" name="search_data">
            <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product">
            </form>
        </div>
</nav>
<!--child 2--> 
<!--calling cart function-->
<?php
cart_search();
?>


<!-- fetching gproducts -->

<?php
search_product();
?>

<!--
  <div class="col-md-4 mb-2 mt-3">
    <div class="card" style="width: 18rem;">
  <img src="images/products/tomato.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Add to cart</a>
    <a href="#" class="btn btn-success">View more</a>
  </div>
 </div>
</div>
-->
<!-- row end-->
</div>
<!-- column end-->
     
</div>
</div>
</div>
  <!--child last-->
<footer class="container-fluid py-4 foot">
 <div class="row">
    <div class="col-12 col-md">
      <img src="images/logo.jpeg" alt="fresh cart" width="200" style="padding-bottom: 50px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      <small class="d-block mb-3 text-body-secondary">© 2017–2024</small>
    </div>
    <div class="col-6 col-md">
      <h5>Consumer Policy</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#"> Return and Cancellation</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Our Terms</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Security</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Site map</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">EPR System</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Help</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Payment</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Return and Cancellation</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Shipping</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">FAQ</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Report Infrigment</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
      </ul>
    </div>
</div>
</footer>
</div>

<!--js bootstraplink-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


