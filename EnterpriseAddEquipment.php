<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Page</title>
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
                        <li><a href="EnterpriseProfile.php">Profile</a></li>
                        <li><a href="EnterpriseContactPage.php">Contact Us</a></li>
                        <li><a href="LoginPage.html">Log Out</a></li>
                    </ul> 
            </div>
        </nav>
        <div class="border">
            <div class="profile-box">

                <div class="addequipcontent">
                    <div class="addequipformbox">
                        <h1>Add a new equipment</h1>
                        <form method="post">
                            <div class="txt-field11">
                                <input type="text" required>
                                <label>Item Name</label>
                            </div>
                            <div class="txt-field11">
                                <input type="text" required>
                                <label>Description of item</label>
                            </div>
                            <div class="txt-field11">
                                <input type="url" required>
                                <label>URL Link</label>
                            </div>
                            <select class="addequipoptionbox" name="format">
                                <option selected>Type of injury</option>
                                <option value="Osseous">Osseous</option>
                                <option value="Muscular">Muscular</option>
                                <option value="Tendinous">Tendinous</option>
                                <option value="Ligamentous">Ligamentous</option>
                            </select>
                            <select class="addequipoptionbox" name="format">
                                <option selected>Body Part</option>
                                <option value="Upper Body">Upper Body</option>
                                <option value="Lower Body">Lower Body</option>
                            </select>
                            <select class="addequipoptionbox" name="format">
                                <option selected>Member</option>
                                <option value="Shoulder">Shoulder</option>
                                <option value="Arm">Arm</option>
                                <option value="Forearm">Forearm</option>
                                <option value="Wrist">Wrist</option>
                                <option value="Hand">Hand</option>
                                <option value="Arm">Arm</option>
                                <option value="Hip">Hip</option>
                                <option value="Thigh">Thigh</option>
                                <option value="Knee">Knee</option>
                                <option value="Leg">Leg</option>
                                <option value="Ankle">Ankle</option>
                                <option value="Foot">Foot</option>
                            </select><br>
                            
                            <form action="/action_page.php">

                                <img src="" class="item-pic"><a href=""></a><br>

                                <input type="file" id="myFile" name="filename" class="upload-photo">
                    
                            </form>

                            <input type="submit11" value="Add Equipment">
            
                        </form>
                    </div>
                </div>
        
            </div>
        </div>
        
    </section>

</body>
</html>