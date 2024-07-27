<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
          footer{
    background-color:#32cd32;
  }
    </style>
</head>
  <body>
    <!-- nav bar-->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#32cd32;">
    <div class="container-fluid">
    <img src="../images/logo.jpeg" width="170">
    <nav class="navbar navbar-expand-lg ">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a href="" class="nav-link">Welcome Guest</a>
</nav>
</div>
</nav>
<!-- second child-->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
<!--third child-->
<div class="row">
    <div class="col-md-12 p-1 d-flex" style="background-color:#32cd32">
        <div>
            <a href="#"><img src="../images/admin.jpg" class="mx-4 my-4" width="150"></a>
            <p class="text-light text-center">Admin Name</p>
        </div>
        <div class="button text-center p-4">
            <button class="my-3 mx-2"><a href="insert_product.php" class="nav-link text-light bg-success my-1"style="padding:15px;">Insert Product</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">View Product</a></button>
            <button class="my-3 mx-2"><a href="index.php?insert_category" class="nav-link text-light bg-success my-1"style="padding:15px;">Insert Categories</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">View Categories</a></button>
            <button class="my-3 mx-2"><a href="index.php?insert_brand" class="nav-link text-light bg-success my-1"style="padding:15px;">Insert Brand</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">View Brand</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">All Order</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">All payments</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">List users</a></button>
            <button class="my-3 mx-2"><a href="" class="nav-link text-light bg-success my-1"style="padding:15px;">Logouts</a></button>
        </div>

    </div>

</div>

<!--category-->
<div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
      include('insert_brands.php');
  }
    ?>
</div>
  <!--child last-->
<footer class="container-fluid py-4 foot">
  <div class="row">
    <div class="col-12 col-md">
      <img src="../images/logo.jpeg" alt="fresh cart" width="200" style="padding-bottom: 50px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>