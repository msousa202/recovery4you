<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styleCompany.css">
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
                        <li><a href="EnterpriseProfile.php">Back</a></li>
                    </ul> 
            </div>
        </nav>
        <div class="border">
            <div class="profile-box">
                <img src="IMG/images/menu.png" class="menu-icon">
                <img src="IMG/images/setting.png" class="setting-icon">
                <img src="IMG/images/profile-pic.png" class="profile-pic">
                
                <h3>Clinic Name</h3>
                <p>Email adress</p>


                <a href="" class="sup-btn"> Edit Profile</a>
                

                
            </div>
            <div class="profile-box">
                
                <h3>Services that we display</h3>


                <!----
                <form action="/action_page.php">
                    <label for="cars">Choose a car:</label>
                    <select id="cars" name="cars">
                    <option value="">Select a Service</option>
                        <option value="fisio">physiotherapy</option>
                        <option value="osteo">osteopathy</option>
                        <option value="chiro">chiropractic</option>
                        <option value="mass">Massage</option>
                    </select>
                    <input type="submit">
                </form>

                ---->

                <table class="Serviços">


                </table>
            </div>
        </div>
    </section>
    
    
</body>
</html>