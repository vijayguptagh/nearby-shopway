<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px;
        }

        .about {
            width: 30%;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 20px;
        }

        .about img {
            max-width: 100%;
        }

        .about h2 {
            font-size: 24px;
            margin-top: 10px;
        }

        .about p {
            font-size: 16px;
            margin: 10px 0;
        }
    </style>

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
        <nav class="navbar navbar-expand-lg" style="background-color: blue;">
            <div class="container-fluid">
                <!-- <img src="./images/logo.png" alt="logo" class="logo"> -->
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_btn">
                    </form>
                </div>
            </div>
        </nav>
        
        <br>
        <h1 style="text-align: center;">About Our Team</h1>

        <div class="container">
            <div class="about">
                <img src="Raza.jpg" alt="Raza Picture">
                <h2>Ahmad Raza Ansari</h2>

                <p>
                    Ahmad Raza Ansari is a talented and innovative professional known for his expertise in the fields of User Interface (UI) design and databases, with a particular focus on website development using HTML and the utilization of paragraph tags. With a passion for creating visually appealing and user-friendly digital experiences, Ahmad has dedicated his career to crafting seamless and intuitive interfaces for web applications.
                </p>

            </div>

            <div class="about">
                <img src="vijay.jpg" alt="Vijay's Picture">
                <h2>Vijay Gupta</h2>
                <p>Passionate Web Developer</p>
                <p>Full Stak Developer</p>
                <p>Tech Stack : </p>
                Frontend = HTML, CSS, JS, Bootstrap
                Databasde = MySQL, MongoDB
                Backend = PHP, NodeJS

            </div>

            <div class="about">
                <img src="ali.jpg" alt="Ali Picture">
                <h2>Abdullah Ali</h2>
                <p>
                    Abdullah Ali is a skilled professional with a strong background in user-centric design and database integration, particularly focused on utilizing APIs and HTML paragraph tags to enhance the functionality and interactivity of web applications. His career is defined by a commitment to creating seamless user experiences and harnessing the power of APIs to drive data-driven web solutions.
                </p>


            </div>
        </div>

        <div class="p-3 text-center" style="background: blue;">
            <p style="color: white;">All rights reserved © - NearBy ShopWay 2023</p>
        </div>
</body>

</html>