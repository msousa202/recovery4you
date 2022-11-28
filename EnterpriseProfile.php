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
    <title>Profile</title>
    <script src="https://kit.fontawesome.com/931a34611b.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
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
        </nav>
        <div class="border">
            <div class="profile-box-2">
                <a href=""><img src="IMG/images/menu.png" class="menu-icon"></a>
                <a href="EnterpriseProfileEdit.php"><img src="IMG/images/setting.png" class="setting-icon"></a>
                <img src="IMG/images/profile-pic.png" class="profile-pic">
                
                <h3>Clinic Name</h3>
                <p><i class="fas fa-envelope "></i> <?php echo $bv['email']; ?></p>   
                <p><i class="fas fa-phone-square-alt"></i> Clinc Contact</p>
                <a href="EnterpriseProfileEdit.php" class="sup-btn"> Edit Profile</a>
    
            </div>
            <div class="profile-box-2">
                <h3>Enterprise Equipment</h3>
                <div class="profile-box-3">

                </div>
                
            </div>
        </div>
    </section>
    
    
</body>
</html>