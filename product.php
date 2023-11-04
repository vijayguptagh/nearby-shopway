<!-- connect file -->
<?php
include('./components/connect.php');

$id = $_GET['show'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearBy ShopWay - Products</title>
    <link href="./assets/img/trolley.png" rel="icon">
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/css/admin_style.css" rel="stylesheet">


    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file Link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <div class="container-fluid p-0" style="width: 98%;">
        <nav class="navbar navbar-expand-lg" style="background-color: blue;">
            <div class="container-fluid">

                <!-- Logo -->
                <div class="d-flex align-items-center justify-content-between">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <img src="./assets/img/trolley.png" alt="">
                        <span class="d-none d-lg-block" style="color: white;">NearBy ShopWay</span>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="map.php" target="_blank">Map</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="Aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="Contactus.php">Contact Us</a>
                        </li>
                        <li>
                            <a style="color: white;" class="nav-link" href="./shopkeeper/login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Product section-->
        <!-- fetching from database -->
        <?php

        $select_query = "select * from `products` where id ='$id'";
        $result_query = mysqli_query($conn, $select_query);
        $row = mysqli_fetch_assoc($result_query);
       
        $name = $row['name'];
        $category = $row['category'];
        $price = $row['price'];
        $image_01 = $row['image_01'];
        $image_02 = $row['image_02'];
        $image_03 = $row['image_03'];
        $details = $row['details'];
        $stock = $row['stock'];
        $shop_name = $row['shop_name'];
        $shop_id = $row['shop_id'];

        $query = "select * from `shopkeeper_ac` where id = '$shop_id'";
        $exe = mysqli_query($conn, $query);
        $value = mysqli_fetch_assoc($exe);
        $add = $value['address'];


        echo "
        <section class='py-5'>
            <div class='container px-4 px-lg-5 my-5'>
                <div class='row gx-4 gx-lg-5 align-items-center'>
                    <div class='col-md-6'>
                        <!-- Main Image -->
                        <img class='card-img-top mb-5 mb-md-0' src='./uploaded_img/$image_01' alt='Main Image' id='mainImage' />

                        <!-- Thumbnail Images -->
                        <br><br>
                        <div class='d-flex m-10%'>
                            <div style='width: 30%;'>
                                <img class='img-thumbnail' src='./uploaded_img/$image_01' alt='Thumbnail 1' onclick='changeMainImage(this)' />
                            </div>
                            <div style='width: 30%;'>
                                <img class='img-thumbnail' src='./uploaded_img/$image_02' alt='Thumbnail 2' onclick='changeMainImage(this)' />
                            </div>
                            <div style='width: 30%;'>
                                <img class='img-thumbnail' src='./uploaded_img/$image_03' alt='Thumbnail 3' onclick='changeMainImage(this)' />
                            </div>
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <h1 class='display-5 fw-bolder'>$name</h1>
                        <br>
                        <p>Price : &#8377;$price</p>
                        <p>Disease : $category</p>
                        <p>Quantity : $stock</p>
                        <div>Shop Name:  <a href='map.php?shop=$shop_id' target='_blank'>$shop_name</a></div>
                        <br>
                        <p>Shop Address : <code>$add</code></p>
                        <p>Location on Map : <a href='map.php?shop=$shop_id' target='_blank'><i class='bi bi-geo-alt-fill'></i></a> </p>
                        <p>Product details : $details</p>
                    </div>
                </div>
            </div>

            <script>
                // JavaScript function to change the main image when a thumbnail is clicked
                function changeMainImage(thumbnail) {
                    var mainImage = document.getElementById('mainImage');
                    mainImage.src = thumbnail.src;
                }
            </script>

        </section>

          ";
        ?>

        <div class="p-3 text-center" style="background: blue;">
            <p style="color: white;">All rights reserved © - NearBy ShopWay 2023</p>
        </div>


</body>

</html>