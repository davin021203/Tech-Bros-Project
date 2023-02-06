<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Bros</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <!-- css file -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
       <!-- first chlid --> 
       <nav class="navbar navbar-expand-lg navabar-light bg-info">
  <div class="container-fluid">
    <img src="./img/logo_transparent.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: RM100 </a>
        </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
</nav>

<!-- third child -->
<div class="bg-light">
<h3 class="text-center">Tech-Bros</h3>
<p class="text-center">World of Technolgy</p>
</div>

<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ8AiIIhWUYZa2jKtB9-jGlBLYBqypljJSFZs_X1FkERzyTyWBlmGUeWaNGiPJ096UH_DxOl6B7gK1nNw&usqp=CAc" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
      </div>
    </div>


  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- Brand to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
    </li>

    <?php

$select_brands="Select * from brands";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
</li>";
}

?>
  </ul>

  <!-- categotries -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <?php

$select_categories="Select * from categories";
$result_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
</li>";
}

?>
  </ul>

  </div>
</div>



<!-- footer -->
<div class="bg-info p-3 text-center">
<p>All Rights Reserved - Designed by Tech-Bros-2022</p>
</div>
    </div>
    





<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>