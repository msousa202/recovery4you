

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clinicstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>
<body>
    <section class="header">
        <a name="headersection"></a>    
            <nav>
                <a href="index.html"><img src="IMG/logoPrincipalBranco.png"></a>
                <div class="logo-name">
                    <h1>Recovery4You</h1>
                    <p1>Moving for a Better Health</p1>
                </div>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="ClinicList.html">Clinic List</a></li>
                            <li><a href="ClinicProfile.html">Profile</a></li>
                            <li><a href="ContactPage.html">Contact Us</a></li>
                        </ul> 
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

            <div class="container-1">
                <div class="profile-box">
                    <img src="IMG/images/menu.png" class="menu-icon">
                    <img src="IMG/images/setting.png" class="setting-icon">

                    <div class="profile">
                            <img src="<?php echo $image ?>" class="profile-pic">      
                    </div>
                    <div class="clinic-name">
                        <?php 
                        $select = mysqli_query($connection, "SELECT * FROM `clinic information` WHERE id = ")
                        ?>
                        <h3><?php echo $fetch['cname'];?></h3>
                    </div>
                        
                        
                        
                    
                </div>
            </div>
            <div class="container-2">
                <div class="profile-box">
                    <lable for="clinic-name">Services that provide: </lable>
                    <select id="clinic-name" name="services"><br>
                        <option value="">Massage</option>
                        <option value="">Physiotherapy</option>
                        <option value="">Chiropractic</option>
                        <option value="">Osteopath</option>
                        <option value="">Other</option>
                    </select> <br>
                    <button type="submit" name="insert">Save Changes</button>
                </div>
                    

            </div>

        
            
        </table>
    </section>


    
</body>
</html>

