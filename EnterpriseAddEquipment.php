<?php

        include('config.php');

        session_start();

        $user = $_SESSION['email'];

        $query ="SELECT * FROM `enterprise_information` WHERE emailCheck='$user'";

        $result = mysqli_query($connection, $query);

        $row = $result->fetch_assoc();
        
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style_enterprise.css">

    <title>Homepage</title>
</head>
<body>
    <section class="header-1">
        <nav>
            <a href="indexEnterprise.php"><img src="IMG/logoPrincipalBranco.png"></a>

            <div class="logo-name">
                <h1>Recovery4You</h1>
                <p1>Moving for a Better Health</p1>
            </div>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="indexEnterprise.php">Profile Page</a></li>
                        <li><a href="EnterpriseContactPage.php">Contact Us</a></li>
                        <li><a href="LoginPage.html">Log Out</a></li>
                    </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

       

        <div class="container">          
            <div class="group-items">   
                <form action="" method="POST">
                    <div class="group-items-sub">
                        <h3>Item Information:</h3><br>
                        <div class="group-items-sub-novo">
                            <h2>Item Name:</h2>
                            <input type="text" required>
                        </div>
                        <div class="group-items-sub-novo">
                            <h2>Item Link:</h2>
                            <input type="url" required>
                        </div>
                        <div class="group-items-sub-novo">
                            <h2>Item Category:</h2>
                            <select id="cars" name="cars">
                                <option value="">Choose Category</option>
                                <option value="saab">UpperBody</option>
                                <option value="fiat">LowerBody</option>
                                <option value="audi">Both</option>
                            </select>
                        </div>
                        <button type="submit" name="btn-add-item" value="Add Item">Add Item</button>
                    </div>
                    <div class="group-items-sub">
                        <h3>Item Description:</h3><br>
                        <textarea name="description" rows="8" cols="50%" required></textarea>
                    </div>
                    <div class="group-items-sub">
                        <h3>Item Image:</h3><br>
                        <img src="IMG/images/profile-pic.png" class="item-icon">
                        <input type="file" name="item-photo">
                    </div>
                </form>       
            </div>
        </div>

            

    </section>

    <section class="footer">
        <h4>About Us</h4>
        <p>yiufus9fusiudfhisudhfisudhfisduhfsidufhsiudfhisudhfsiudfhisudf</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made With <i class="fa fa-heart-o"></i> Group 6</p>
    </section>

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }

        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
        
    </script>

</body>
</html>