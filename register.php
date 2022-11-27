<?php
    include 'config.php';

    if(isset($_POST['insert'])){

        $account = $_POST['account'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `registration`(`account`, `email`, `password`) VALUES('$account', '$email', '$password')";
        $result = mysqli_query($connection, $query);

        if($result){
            echo "<script>alert('You have successfully Singup')</script>";
            header("Location: LoginPage.html");
        }else{
            echo "<script>alert('Failed to signup')</script>";
        }

    
    }   
?>
