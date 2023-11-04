<!-- connect file -->
<?php
include('./components/connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECommerce website using PHP and MySql</title>

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
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <!-- <img src="./images/logo.png" alt="logo" class="logo"> -->
        <!-- Logo -->
        <div class="d-flex align-items-center justify-content-between">
            <a href="../shopkeeper/home.php" class="logo d-flex align-items-center">
                <img src="../assets/img/trolley.png" alt="">
                <span class="d-none d-lg-block">Nearby Shopway</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contactus.php">Contact Us</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>

    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondry">
      <ul class="navbar-nav me auto">
        <li class="nav-item">
          <a class="nav-link" href="./admin/login.php " target="_blank">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./shopkeeper/login.php" target="_blank">Shopkeeper Login</a>
        </li>

      </ul>
    </nav>

    <!-- Third child -->
    <div class="bg-light">
      <h3 class="text-center">Products are here</h3>
      <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, asperiores.</p>
    </div>

  <!-- ----------------------------------------------------------------------------------------------------- -->
  <div class="row px-3">
    <div class="col-md-10">
        <!-- products -->
        <div class="row">

        <!-- fetching producrts from the data base  -->

        <?php
        $select_query="select * from `products` order by rand()";
        $result_query=mysqli_query($conn,$select_query);
        $row=mysqli_fetch_assoc($result_query);
        // $_SESSION['prod_id'] = $row['id'];
        // echo $row['name'];
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['name'];
        while($row=mysqli_fetch_assoc($result_query)){
          $id=$row['id'];
          $name=$row['name'];
          $category=$row['category'];
          $price=$row['price'];
          $image_01=$row['image_01'];
          $details=$row['details'];
          $stock=$row['stock'];
          $shop_name=$row['shop_name'];
          $shop_id=$row['shop_id'];

          echo " <div class='col-md-4 mb-2'>
          <div class='card'>
          <img src='./uploaded_img/$image_01' class='card-img-top' alt='dairy milk'>
          <div class='card-body'>
          <h5 class='card-title'>$name</h5>
          <p class='card-text'>$category <span> $price </span></p>
            <a href='product.php?show=$id' class='btn btn-info'>Product Details</a>
        

</div>
        </div>
        </div>";
                

          

        };
        
        ?> 
        <!-- <a href='#' class='btn btn-secondry'>Product Details</a> -->
        <!-- Closes Fecthing product from the database -->
            <!-- <div class="col-md-4 mb-2">
              <div class="card">
              <img src="./images/dairymilk.jpg" class="card-img-top" alt="dairy milk">
              <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">shop details</a>
              <a href="" class="btn btn-secondry">Product Details</a>

  </div>
            </div>
            </div> -->

            <!-- Row End  -->
            <!-- coulum End  -->
<!-- Finish product -------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            

        
        
        
        
        <!-- row end  end -->
        
          </div>
          <!-- col end here  -->


    </div>
    <!-- <div class="col-md-2 bg-secondry p-0"> -->
        <!-- Brands to be displayed -->
        <!-- <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light "><h4>Delivary brands</h4></a>
          </li>
          <option value="">Samsung</option>
          <option value="">Apple</option>
          <option value="">Amazon</option>
          <option value="">flipkart</option>
          <option value="">Hindustan Uniliver</option>

        </ul> -->
<!-- category to be displayed -->

<!-- <ul class="navbar-nav me-auto text-center"> -->
          <!-- <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light "><h4>category</h4></a>
          </li>
          <option value="">Electronics</option>
          <option value="">Fruits</option>
          <option value="">clothes</option>
          <option value="">shoes</option>
          <option value="">software</option>


          

        </ul> -->

    </div>

    
</div>













  








  <!-- last Child -->
  <div class="bg-info p-3 text-center">
    <p>All rights reserved ©- desined by Raza 2023</p>
  </div>
  </div>







  <!-- Bootstrape js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>