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
<nav class="navbar navbar-expand-lg" style="background-color:#fffdd0;">

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
            <li>
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i> CART<sup><b><?php cart_item() ?></b></sup></a>
           </li>
            <li>
            <a class="nav-link" href="/services.html"><i class="fa-solid fa-circle-user"></i> LOGIN </a>
            </li>
          </ul>
          <form class="d-flex" role="search" action="search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search for brand,product and more..." aria-label="Search" name="search_data">
            <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product">
            </form>
        </div>
</nav>

<!--calling cart function-->
<?php
cart();
?>


<!--child 2--> 
<section class="center2" style=" background-color:#3a5a40;">
            <div>
              <a class="nav-link text-white" href="#">Welcome Guest</a>
            </div>
</section>
<!--child 3--> 
<div class="container-fluid slider">
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/slider01.jpg" class="d-block w-100" alt="slider01">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/slider02.jpg" class="d-block w-100" alt="slider02">
    </div>
    <div class="carousel-item">
      <img src="images/slider03.jpg" class="d-block w-100" alt="slider03">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--child 4-->
<div class="row">
  <div class="col-md-10">
  <!--products-->
<div class="row">
<!-- fetching gproducts -->

<?php
getproducts();
get_unique_brands();
get_unique_category();
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  
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
  <div class="col-md-2 p-0 mt-3" style="background-color:#fffdd0;">
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-items" style="background-color:#3a5a40;">
       <a href="#" class="nav-link text-light"><h4>Delivary Brands</h4></a>
    <li>


      <?php
       getbrands();
      ?>

</ul>
<ul class="navbar-nav me-auto text-center">
    <li class="nav-items" style="background-color:#3a5a40;">
       <a href="#" class="nav-link text-light"><h4>Catogories</h4></a>
    <li>

    
    <?php
     getcategory();
      ?>

</ul>  
     
</div>
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


