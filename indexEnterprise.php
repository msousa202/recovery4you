<?php

    include('config.php');

    $query = "SELECT * FROM registration";
    $result = mysqli_query($connection, $query);
    $total = mysqli_num_rows($result);
    $bv = mysqli_fetch_assoc($result)

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
    <link rel="stylesheet" href="styleCompany.css">

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
                        <li><a href="EnterpriseHistoric.php">Historic</a></li>
                        <li><a href="EnterpriseProfile.php">Profile</a></li>
                        <li><a href="EnterpriseContactPage.php">Contact Us</a></li>
                        <li><a href="LoginPage.html">Log Out</a></li>
                    </ul> 
            </div>
        </nav>
        <div class="text-Box">
            
            

            <h1><?php echo "Wellcome ".$bv['email']; ?></h1>

        

            <p>Our website is the best for you to keep track of your trainings and taking care
            of your health during an injury.<br> Here you will be able to promote your equipment such as your enterprise link when an user is injured.
            </p>
        </div>

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

</body>
</html>