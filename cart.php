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
    <title>Ecommerce website-cart details</title>
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
 <!--child 4-->
 <div class="container">
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>operation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Apple</td>
                    <td><img src="images/products/apple2.webp" height="60px"></td>
                    <td><input type="number"></td>
                    <td>500</td>
                    <td>Update</td>
                </tr>
            </tbody>
        </table>

        <!--subtotal-->
        <div class="d-flex">
            <h4 class="px3">Subtotal:<strong class="text-info">500/-</strong></h4>
            <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue shopping</button></a>
            <a href="#"><button class="bg-secondary px-3 py-2 border-0 text-light">Check out</button></a>
        </div>
    </div>
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


