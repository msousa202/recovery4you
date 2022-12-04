<?php

        include('config.php');

        session_start();

        $user = $_SESSION['enterprise'];


        $query ="SELECT * FROM `enterprise_information`";

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
                        <li><a href="EnterpriseAddEquipment.php">Add Equipment</a></li>
                        <li><a href="EnterpriseContactPage.php">Contact Us</a></li>
                        <li><a href="LoginPage.html">Log Out</a></li>
                    </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

       

        <div class="container">
            <div class="profile-box">
                
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