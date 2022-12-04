<?php
    include 'config.php';

    if(isset($_POST['insert'])){

        $account = $_POST['account'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `registration`(`account`, `email`, `password`) VALUES('$account', '$email', '$password')";
        $result = mysqli_query($connection, $query);

        

        if($result){

            
            $query2 = "INSERT INTO `enterprise_information`(`emailCheck`, `enterprise_name`, `enterprise_contact`) VALUES ('$email','Enterprise Name','Contact')";
            $result2 = mysqli_query($connection, $query2);

            echo "<script>alert('You have successfully Singup')</script>";

            header("Location: LoginPage.html");

        }else{
            echo "<script>alert('Failed to signup')</script>";
        }

    
    }   
?>