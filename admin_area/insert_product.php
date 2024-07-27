<!-- connect file -->
<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['decription'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];
    $product_status='true';
    // accessing images
   $product_image1=$_FILES['product_image1']['name'];
   $product_image2=$_FILES['product_image2']['name'];
   $product_image3=$_FILES['product_image3']['name'];
   
   // accessing images temp name
   $temp_image1=$_FILES['product_image1']['tmp_name'];
   $temp_image2=$_FILES['product_image2']['tmp_name'];
   $temp_image3=$_FILES['product_image3']['tmp_name'];
    //checking empty condition
    if($product_title==''or $description==''or $product_keyword=='' or $product_category=='' or $product_brand=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
      echo"<script>alert('please fill all the available fields')</script>";
      exit();
    }
    else{
      move_uploaded_file($temp_image1,"./product_images/$product_image1");
      move_uploaded_file($temp_image2,"./product_images/$product_image2");
      move_uploaded_file($temp_image3,"./product_images/$product_image3");

      //insert query 
      $insert_product="insert into products (product_title,product_description, product_keyword, category_id, brand_id, product_image1, product_image2, product_image3, product_price,date, status) values ('$product_title', '$description', '$product_keyword', '$product_category', '$product_brand', '$product_image1', '$product_image2',' $product_image3', '$product_price', NOW(), $product_status)";
      $result=mysqli_query($con,$insert_product);
      if($result){
        echo"<script>alert('successfully inserted the product')</script>";
      }
    }
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insert product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css-->
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
         <!-- form-->
  <form action="" method="post" enctype="multipart/form-data">
<!--title-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_title" class="form-label">Product title</label>
<input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
</div>
<!--Decription-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="decription" class="form-label">Product Discription</label>
<input type="text" name="decription" id="decription" class="form-control" placeholder="Enter product decription" autocomplete="off" required="required">
</div>
<!--keywords-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_keyword >" class="form-label">Product keywords</label>
<input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
</div>
<!-- categories -->
<div class="form-outline mb-4 w-50 m-auto">
<select name="product_category" id="" class="form-select">
<option value="">Select a Category</option>
<?php
$select_query="select * from categories";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
          $category_title=$row['category_title'];
          $category_id=$row['category_id'];
          echo "<option value='$category_id'>$category_title</option>";
}
?>          
</select>
</div>
<!--brands -->
<div class="form-outline mb-4 w-50 m-auto">
<select name="product_brand" id="" class="form-select">
<option value="">Select a brand</option>
<?php
        $select_query="select * from brands";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $brand_title=$row['brand_title'];
          $brand_id=$row['brand_id'];
          echo "<option value='$brand_id'>$brand_title</option>";
        }
?>
</select>
</div>
<!--image 1-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image1" class="form-label">Product image 1</label>
<input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
</div>
<!--image 2-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image2" class="form-label">Product image 2</label>
<input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
</div>
<!--image 3-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image3" class="form-label">Product image 3</label>
<input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
</div>
<!--price-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_price" class="form-label">Product price</label>
<input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
</div>
<!--button-->
<div class="form-outline mb-4 w-50 m-auto">
<input type="submit" class="b-0 p-2 my-2 bg-success" name="insert_product" value="insert products">
</div>
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>