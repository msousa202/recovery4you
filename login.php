<?php      
    include('config.php');
    
    session_start();

    if(isset($_POST['login'])){

        $email = $_POST['email'];  
        $password = $_POST['password'];  
        
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            echo "<script>alert('You are good to go')</script>";

            $role = "SELECT account FROM registration WHERE email='$email' AND password='$password'";

            $roles = mysqli_query($connection, $role);

            $row = mysqli_fetch_array($roles);

            if($row['account'] == "enterprise"){

                $_SESSION['enterprise'] = $email;

                header("Location: indexEnterprise.php");

            } else if($row['account'] == "clinic"){

                $_SESSION['clinic'] = $email;

                header("Location: indexClinic.php");

            } else if($row['account'] == "user"){

                $_SESSION['user'] = $email;

                header("Location: indexUser.php");
            }
        } else{
            echo "<script>alert('Invalid Account')</script>";
        }
    }


    
?> 