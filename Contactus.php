<!DOCTYPE html>
<html>

<head>
    <title>NearBy ShopWay Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #716dda;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .contact {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .contact img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
        }

        .contact-info {
            flex: 1;
            margin-left: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>

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
                </div>
            </div>
        </nav>

        <br>
        <h1 style="text-align:center">Contact Us</h1>
        </header>
        <!-- 
        <div class="container">
            <div class="contact">
                <img src="Raza.jpg" alt="Emily's Profile Picture">
                <div class="contact-info">
                    <h2>Student 1: Ahmad Raza Ansari</h2>
                    <p>Email: <a href="mailto:emily@example.com">emily@example.com</a></p>
                    <p>LinkedIn: <a href="https://www.linkedin.com/in/emily">Emily's LinkedIn Profile</a></p>
                    <p>GitHub: <a href="https://github.com/emily">Emily's GitHub Profile</a></p>
                    <p>Twitter: <a href="https://twitter.com/emily_dev">Emily's Twitter Profile</a></p>
                </div>
            </div>

            <div class="contact">
                <img src="vijay.jpg" alt="Vijay Picture">
                <div class="contact-info">
                    <h2>Student 2: Vijay Gupta</h2>
                    <p>Email: <a href="mailto:james@example.com">james@example.com</a></p>
                    <p>LinkedIn: <a href="https://www.linkedin.com/in/james">James's LinkedIn Profile</a></p>
                    <p>GitHub: <a href="https://github.com/james">James's GitHub Profile</a></p>
                    <p>Twitter: <a href="https://twitter.com/james_dev">James's Twitter Profile</a></p>
                </div>
            </div>

            <div class="contact">
                <img src="ali.jpg" alt="Ali Picture">
                <div class="contact-info">
                    <h2>Student 3: Abdullah Ali </h2>
                    <p>Email: <a href="mailto:sarah@example.com">sarah@example.com</a></p>
                    <p>LinkedIn: <a href="https://www.linkedin.com/in/sarah">Sarah's LinkedIn Profile</a></p>
                    <p>GitHub: <a href="https://github.com/sarah">Sarah's GitHub Profile</a></p>
                    <p>Twitter: <a href="https://twitter.com/sarah_dev">Sarah's Twitter Profile</a></p>
                </div>
            </div>
        </div> -->

        <!-- Feedback form -->

        <style>
            .container {
                width: 60%;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                margin-top: 50px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .form-group input[type="text"],
            .form-group textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .form-group textarea {
                height: 150px;
            }

            .form-group input[type="submit"] {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
        </style>
        </head>

        <body>
            <div class="container">
                <h2>Feedback Form</h2>
                <form action="submit_feedback.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Feedback:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

            <div class="p-3 text-center" style="background: blue;">
                <p style="color: white;">All rights reserved © - NearBy ShopWay 2023</p>
            </div>
        </body>

</html>