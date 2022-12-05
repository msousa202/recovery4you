

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

        <?php

        include('config.php');

        session_start();

        $user = $_SESSION['email'];

        $query ="SELECT * FROM `enterprise_information` WHERE emailCheck='$user'";

        $result = mysqli_query($connection, $query);

        $row = $result->fetch_assoc();
        
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
            $connection-> close();
            ?> 
            


            <div class="profile-box">
                <h4>Enterprise Item List</h4>
                <div class="items-display">
                    <table class="table-items">
                        <?php

                        include('config.php');

                        $query = "SELECT ItemName, ItemLink, ItemNumberClicks, ItemImage from `item list`";
                        
                        $result = mysqli_query($connection, $query);

                        if($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()) {

                                echo "
                                <tr>
                                    <th>Item Image</th>
                                    <th>Item Name</th>
                                    <th>Number of Item Clicks</th>
                                    <th>Item Link</th>
                                </tr>
                                <tr>
                                    <td>"
                                    . $row["ItemImage"]
                                    . "</td><td>"
                                    . $row["ItemName"]
                                    . "</td><td>"
                                    . $row["ItemNumberClicks"]
                                    . "</td><td><a href='"
                                    . $row["ItemLink"] 
                                    . "' class='linked-items'>Link</a></td>     
                                <tr>";    
                            }
                            echo "</table>";
                            
                        }else{
                            echo "0 result";
                        }

                        $connection-> close();

                        
                        ?>
                    </table>
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