<style>
.card-img-top{
  width: 100%;
  height:200px;
  object-fit: contain;
}
</style>

<?php
 include('./includes/connect.php');


//getting products
function getproducts(){
global $con; 
//condition
if(!isset($_GET['brand'])){
if(!isset($_GET['category'])){
$select_query="Select * from products order by rand() LIMIT 0,9";
$result_query=mysqli_query($con, $select_query);
// $row=mysqli_fetch_assoc($result_query);
// echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mt-2'>
<div class='card'>
<img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_description</p>
<p class='card-text'>Price: ₹$product_price</p>
<a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
<a href='product_details.php?product_id=$product_id' class='btn btn-success'>View more</a>
</div>
</div>
</div>";
}
}
}
}


//getting products
function getting_all_products(){
  global $con; 
  //condition
  if(!isset($_GET['brand'])){
  if(!isset($_GET['category'])){
  $select_query="Select * from products order by rand() ";
  $result_query=mysqli_query($con, $select_query);
  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-3 mt-2'>
  <div class='card'>
  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price: ₹$product_price</p>
  <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
  <a href='product_details.php?product_id=$product_id' class='btn btn-success'>View more</a>
  </div>
  </div>
  </div>";
  }
  }
  }
  }


// getting unique brands
function get_unique_brands(){
  global $con; 
  //condition
if(isset($_GET['brand'])){
  $brand_id=$_GET['brand'];
  $select_query="Select * from products where brand_id=$brand_id";
  $result_query=mysqli_query($con, $select_query);
  $num_rows=mysqli_num_rows($result_query);
  if($num_rows==0){
    echo"<h2 class='text-center text-success'>No Stock Available</h2>";
  }
  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mt-2'>
  <div class='card'>
  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price: ₹$product_price</p>
  <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
  <a href='product_details.php?product_id=$product_id' class='btn btn-success'>View more</a>
  </div>
  </div>
  </div>";
  }
  }
  }




  // getting unique categories
function get_unique_category(){
  global $con; 
  //condition
if(isset($_GET['category'])){
  $category_id=$_GET['category'];
  $select_query="Select * from products where category_id=$category_id";
  $result_query=mysqli_query($con, $select_query);
  $num_rows=mysqli_num_rows($result_query);
  if($num_rows==0){
    echo"<h2 class='text-center text-success'>No Stock Available</h2>";
  }
  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mt-2'>
  <div class='card'>
  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
  <h5 class='card-title'>$product_title</h5>
  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price: ₹$product_price</p>
  <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
  <a href='product_details.php?product_id=$product_id' class='btn btn-success'>View more</a>
  </div>
  </div>
  </div>";
  }
  }
  }



// getting category
function getcategory(){
    global $con;
    $select_categories="select * from categories";
    $result_categories=mysqli_query($con,$select_categories);
    //$row_data=mysqli_fetch_assoc($result_brands);
    //echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li class='nav-items mb-2'>
      <a href='index.php?category=$category_id' class='nav-link text-black'>$category_title</a>
      <li>";
    }
}






// getting brands
function getbrands(){
    global $con;
$select_brands="select * from brands";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='nav-items mb-2'>
  <a href='index.php?brand=$brand_id' class='nav-link text-black'>$brand_title</a>
  <li>";
}
}





//getting search products
function search_product(){
  global $con; 
  if(isset($_GET['search_data_product'])){
  $search_data_value=$_GET['search_data'];
  $search_query="Select * from products where product_keyword like '%$search_data_value%'";
  $result_query=mysqli_query($con, $search_query);
  $num_rows=mysqli_num_rows($result_query);
  if($num_rows==0){
    echo"<h2 class='text-center text-success py-5'>No Result Found on this Search...</h2>";
  }
  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image2=$row['product_image2'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='container p-4'>
  <div class='card mb-3' style='max-width: 1040px  object-fit: contain'>
    <div class='row p-1'>
      <div class='col-md-5'>
        <!-- slider-->
        <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
    <div class='carousel-inner'>
      <div class='carousel-item active'>
        <img src='./admin_area/product_images/$product_image1' width=500px class='d-block ' alt='$product_id'>
      </div>
      <div class='carousel-item'>
        <img src='./admin_area/product_images/$product_image2' class='d-block w-100' alt='$product_id'>
      </div>
    </div>
    <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='prev'>
      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Previous</span>
    </button>
    <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='next'>
      <span class='carousel-control-next-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Next</span>
    </button>
  </div>
      </div>
      <div class='col-md-7'>
        <div class='card-body'>
          <h2 class='card-title'>$product_title</h2>
          <p class='card-text'style='font-size:30px;'>$product_description</p>
          <br>
          <br>
          <h2 class='card-title'>Price: ₹$product_price</h2>
          <br>
          <br>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-success btn-lg b-2 px-5'>
          <i class='fa-solid fa-cart-shopping'></i> Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  </div>";
  }
  }
}



// view more

function veiw_details(){
  global $con; 
  //condition
  if(isset($_GET['product_id'])){
  if(!isset($_GET['brand'])){
  if(!isset($_GET['category'])){
  $product_id=$_GET['product_id'];
  $select_query="Select * from products where product_id=$product_id";
  $result_query=mysqli_query($con, $select_query);
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='container p-4 style='width:50px; height:100px; '>
  <div class='card body' style='max-width:80px  object-fit: contain'>
    <div class='row'>
      <div class='col-md-5'>
        <!-- slider-->
        <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
    <div class='carousel-inner'>
      <div class='carousel-item active'>
        <img src='./admin_area/product_images/$product_image1' width=500px class='d-block ' alt='$product_id'>
      </div>
      <div class='carousel-item'>
        <img src='./admin_area/product_images/$product_image2' class='d-block w-100' alt='$product_id'>
      </div>
    </div>
    <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='prev'>
      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Previous</span>
    </button>
    <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleAutoplaying' data-bs-slide='next'>
      <span class='carousel-control-next-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Next</span>
    </button>
  </div>
      </div>
      <div class='col-md-5'>
        <div class='card-body'>
          <h2 class='card-title'>$product_title</h2>
          <p class='card-text'style='font-size:30px;'>$product_description</p>
          <br>
          <br>
          <h2 class='card-title'>Price: ₹$product_price</h2>
          <br>
          <br>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-success btn-lg b-2 px-5'>
          <i class='fa-solid fa-cart-shopping'></i> Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  </div>";
 
  }

  }
 }
  }
  }

//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  



// card function
function cart(){
    if(isset($_GET['add_to_cart'])){
      global $con;
      $get_ip_add = getIPAddress();
      $get_product_id=$_GET['add_to_cart'];
      $select_query="Select * from cart_details where ip_address='$get_ip_add' and product_id=$get_product_id ";
      $result_query=mysqli_query($con, $select_query);
      $num_rows=mysqli_num_rows($result_query);
      if($num_rows>0){
         echo"<script>alert('this item is already present inside cart')</script>";
         echo"<script>window.open('index.php','_self')</script>";
  }
  else{
    $insert_query="insert into cart_details (product_id,ip_address,quantity) values($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($con, $insert_query);
    echo"<script>alert('the item inserted inside the cart')</script>";
    echo"<script>window.open('index.php','_self')</script>";
  }
}
}




// cart search function
function cart_search(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();
    $get_product_id=$_GET['add_to_cart'];
    $select_query="Select * from cart_details where ip_address='$get_ip_add' and product_id=$get_product_id ";
    $result_query=mysqli_query($con, $select_query);
    $num_rows=mysqli_num_rows($result_query);
    if($num_rows>0){
       echo"<script>alert('this item is already present inside cart')</script>";
       echo"<script>window.open('search_product.php','_self')</script>";
}
else{
  $insert_query="insert into cart_details (product_id,ip_address,quantity) values($get_product_id,'$get_ip_add',0)";
  $result_query=mysqli_query($con, $insert_query);
  echo"<script>alert('the item inserted inside the cart')</script>";
  echo"<script>window.open('search_product.php','_self')</script>";
}
}
}



// cart product function
function cart_product(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();
    $get_product_id=$_GET['add_to_cart'];
    $select_query="Select * from cart_details where ip_address='$get_ip_add' and product_id=$get_product_id ";
    $result_query=mysqli_query($con, $select_query);
    $num_rows=mysqli_num_rows($result_query);
    if($num_rows>0){
       echo"<script>alert('this item is already present inside cart')</script>";
       echo"<script>window.open('product_details.php','_self')</script>";
}
else{
  $insert_query="insert into cart_details (product_id,ip_address,quantity) values($get_product_id,'$get_ip_add',0)";
  $result_query=mysqli_query($con, $insert_query);
  echo"<script>alert('the item inserted inside the cart')</script>";
  echo"<script>window.open('product_details.php','_self')</script>";
}
}
}


function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();
    $select_query="Select * from cart_details where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con, $select_query);
    $num_rows=mysqli_num_rows($result_query);
  }
else
{
  global $con;
    $get_ip_add = getIPAddress();
    $select_query="Select * from cart_details where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con, $select_query);
    $num_rows=mysqli_num_rows($result_query);
}
echo"    $num_rows  ";
} 



// total price function
function total_cart_price(){
global $con;
$get_ip_add = getIPAddress();
$total=0;
$cart_query="Select * from cart_details where ip_address='$get_ip_add'";
$result=mysqli_query($con,$cart_query);
 while($row=mysqli_fetch_array($result)){
$product_id=$row['product_id'];
$select_products="Select * from products where product_id='$product_id'";
$result_products=mysqli_query($con, $select_products);
while($row_product_price=mysqli_fetch_array($result_products)){
$product_price=array($row_product_price['product_price']);
$product_values=array_sum($product_price);
$total+=$product_values;
}
}
echo $total;
}
?>