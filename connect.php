<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'recovery4you');

    if(isset($_POST['insert'])){
        $account = &$_POST['account'];
        $email = &$_POST['email'];
        $password = &$_POST['password'];

        $query = "INSERT INTO `registration` (`account`, `email`, `password`) VALUES('$account', '$email', '$password')";
        $query_run = mysqli_query($connection, $query);


    }

?>
