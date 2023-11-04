<!-- connect file -->
<?php
include('./components/connect.php');
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
        <!-- first child -->
        <nav class="navbar navbar-expand-md" style="background-color: blue;">
            <div class="container-fluid">

                <!-- Logo -->
                <div class="d-flex">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <img src="./assets/img/trolley.png" alt="">
                        <span class="" style="color: white;">NearBy ShopWay</span>
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

                    <!-- search button -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_btn">
                    </form>
                </div>
            </div>
        </nav>


        <!-- start content -->
        <br>
        <div class="bg-light">
            <h1 class="text-center">Products</h1>
        </div>
        <br>

        <div class="row px-3 d-flex justify-content-center" style="align-items:center;">
            <div class="col-md-10">
                <!-- products -->
                <div class="row">

                    <!-- fetching producrts from the data base  -->

                    <?php
                    if (isset($_GET['search_data_btn'])) {

                        $search_query = $_GET['search_data'];
                        $sql = "SELECT * FROM products WHERE name LIKE ?";
                        // $result_query = mysqli_query($conn, $sql);
                        // $row = mysqli_fetch_assoc($result_query);
                        $stmt = $conn->prepare($sql);
                        // Add wildcard '%' for partial matching
                        $searchTerm = "%$search_query%";
                        $stmt->bind_param("s", $searchTerm);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // if ($row->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $id = $row['id'];
                            $name = $row['name'];
                            $category = $row['category'];
                            $price = $row['price'];
                            $image_01 = $row['image_01'];
                            $details = $row['details'];
                            $stock = $row['stock'];
                            $shop_name = $row['shop_name'];
                            $shop_id = $row['shop_id'];

                            echo " <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='./uploaded_img/$image_01' class='card-img-top' alt='dairy milk'>
                                    <div class='card-body'>
                                        <h4 style='color:blue;'>$name</h3>
                                        <div style='display:flex; justify-content: space-between;'>
                                            <p>&#8377;$price</p> <p>$stock Quantity left</p>
                                        </div>
                                        <div style='display:flex; justify-content: space-between;'>
                                            <p>$shop_name</p>
                                            <a href='map.php?shop=$shop_id' target='_blank'><i class='bi bi-geo-alt-fill'></i></a>
                                        </div>
                                        <a href='product.php?show=$id' class='btn bg-green white' target='_blank'>Product Details</a>
                                    </div>
                                </div>
                            </div>";
                        };
                        // }
                    } else {    // order by rand()

                        $select_query = "select * from `products`";
                        $result_query = mysqli_query($conn, $select_query);
                        // $row = mysqli_fetch_assoc($result_query);
                        while ($row = mysqli_fetch_assoc($result_query)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $category = $row['category'];
                            $price = $row['price'];
                            $image_01 = $row['image_01'];
                            $details = $row['details'];
                            $stock = $row['stock'];
                            $shop_name = $row['shop_name'];
                            $shop_id = $row['shop_id'];

                            echo " <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='./uploaded_img/$image_01' class='card-img-top' alt='dairy milk'>
                                    <div class='card-body'>
                                        <h4 style='color:blue;'>$name</h3>
                                        <div style='display:flex; justify-content: space-between;'>
                                            <p>&#8377;$price</p> <p>$stock Quantity left</p>
                                        </div>
                                        <div style='display:flex; justify-content: space-between;'>
                                            <p>$shop_name</p>
                                            <a href='map.php?shop=$shop_id' target='_blank'><i class='bi bi-geo-alt-fill'></i></a>
                                        </div>
                                        <a href='product.php?show=$id' class='btn bg-green white' target='_blank'>Product Details</a>
                                    </div>
                                </div>
                            </div>";
                        };
                    }



                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 text-center" style="background: blue;">
        <p style="color: white;">All rights reserved © - NearBy ShopWay 2023</p>
    </div>

    <!-- Bootstrape js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>