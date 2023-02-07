<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title = $_POST['product_title'] ?? '';
    $description = $_POST['description'] ?? '';
    $product_keywords = $_POST['product_keywords'] ?? '';
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'] ??'';
    $product_status='true';

    //accesing images
    $product_image1=$_FILES['product_image1']['name'];
    

    //accesing img temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];


    //checking empty condition
    if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1==''  )
    {
        echo "<script>alert('Please fill up all the boxes')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");

        //insert query
        $insert_product="insert into products (product_title,description,product_keywords,category_id,brand_id,product_image1,,product_price,date,status) values ($product_title','$description','$product_keywords','$product_category','$product_brands',' $product_image1','$product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Successfully')</script>";
        }
    }
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products Admin</title>
<!-- bootstrap CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<!-- css file -->
<link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>

            <!-- description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description id="description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>

            
            <!-- product_keywords-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords id="product_keywords" class="form-control" placeholder="Enter Product Keyword" autocomplete="off" required="required">
            </div>

            <!-- Categories-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select Category</option>
                    <?php
                        $select_query="Select * from categories";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value=''>$category_title</option>";
                        }
                    ?>
                    <!--<option value="">Category1</option>
                    <option value="">Category2</option>
                    <option value="">Category3</option>
                    <option value="">Category4</option>-->

                </select>
            </div>

            <!-- Brands-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select Brands</option>
                    <?php
                        $select_query="Select * from brands";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title=$row['brand_title'];
                            $brand_id=$row['brand_id'];
                            echo "<option value=''>$brand_title</option>";
                        }
                    ?>
                    <!--<option value="">Brand1</option>
                    <option value="">Brand2</option>
                    <option value="">Brand3</option>
                    <option value="">Brand4</option>-->
                </select>
            </div>

            <!-- Images1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1 id="product_image1" class="form-control"  required="required">
            </div>
            
            <!-- Price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>

            <!-- Insert Product Button-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>

        </form>
    </div>
    
</body>
</html>