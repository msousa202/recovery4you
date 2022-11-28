<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/931a34611b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contactsEnterprise.css">
    <title>Contact Us</title>
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
                        <li><a href="indexEnterprise.php">Back</a></li>
                    </ul> 
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="hero">
            <form action="mail.php" method="POST" >
                <div class="row">
                    <div class="input-group">
                        <input type="text" name="name" required>
                        <label for="name"><i class="fas fa-user"></i> Your Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="number" required>
                        <label for="number"><i class="fas fa-phone-square-alt"></i> Phone Number</label>
                    </div>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="email"><i class="fas fa-envelope "></i> Email ID</label>
                </div>
                <div class="input-group">
                    <textarea name="message" rows="8" required></textarea>
                    <label for="message"><i class="fas fa-comments"></i> Your  Message</label>
                </div>
                <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button>

            </form>
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


    
    <!-------- JavaScript for Toogle Menu ----------->

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