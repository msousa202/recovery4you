<?php      
    include('config.php');
    
    session_start();

    if(isset($_POST['login'])){

        $user = $_POST['email'];  
        $password = $_POST['password'];  
        
        $query = "SELECT * FROM registration WHERE email='$user' AND password='$password'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            echo "<script>alert('You are good to go')</script>";

            $role = "SELECT account FROM registration WHERE email='$user' AND password='$password'";

            $roles = mysqli_query($connection, $role);

            $row = mysqli_fetch_array($roles);

            if($row['account'] == "enterprise"){

                $_SESSION['email'] = $user;

                header("Location: indexEnterprise.php?id=<php $user?>");

            } else if($row['account'] == "clinic"){

                $_SESSION['email'] = $user;

                header("Location: indexClinic.php");
                

            } else if($row['account'] == "user"){

                $_SESSION['email'] = $user;
                
                header("Location: indexUser.php");
                
            }
        } else{

            echo "<script>alert('Invalid Account')</script>";

            header("Location: LoginPage.html");

        }
    }


    
?> 