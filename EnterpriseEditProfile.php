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
                        <li><a href="indexEnterprise.php">Back</a></li>
                    </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <?php



        ?>

        <div class="container">
            <div class="profile-box">
                <img src="IMG/images/menu.png" class="menu-icon">
                <img src="IMG/images/setting.png" class="setting-icon" onclick="toggleMenu()">
                <img src="IMG/images/profile-pic.png" class="profile-icon">
                <h3><?php echo $row['enterprise_name'];?></h3>
                <p><i class="fa fa-phone-square"></i><?php echo $row['enterprise_contact'];?></p>
                <p><i class="fa fa-envelope"></i><?php $user = $row['emailCheck']; print $user?></p>

                <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            
                            <li><a href="EnterpriseEditProfile.php" class="sub-menu-text">Edit Profile</a></li>
                            
                
                        </div>
                    </div> 
            </div> 
            <?php
            $connection->close();
            ?>

            
            <div class="profile-box">
                <h4>Update your profile</h4>
                <div class="items-display">
                    <form class="form-page-clinic-info" action="updateProfile.php" method="post">    
                        <div class="form-group">
                            <label>Enterprise Name:</label>
                            <input type="text" name="enterpriseName" class="form-control" placeholder="Enterprise Name" value="<?php echo $row['enterprise_name'];?>">
                        </div>
                        <div class="form-group">
                            <label>Enterprise Contact:</label>
                            <input type="text" name="enterprisecontact" class="form-control" placeholder="Enterprise Contact" value="<?php echo $row['enterprise_contact'];?>">
                        </div>
                        <div class="form-group">
                            <label>Enterprise Image:</label>
                            <input type="file" name="enterpriseimage" class="form-control" value="<?php echo $row['enterprise_image'];?>" accept=".jpg, .jpeg, .png">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="add" class="btn btn-info" value="Update">
                        </div>
                    </form>
                </div>
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