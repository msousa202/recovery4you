
<?php

include('config.php');

session_start();

$user = $_SESSION["email"];

$ename=$_REQUEST['enterpriseName'];
$econtact=$_REQUEST['enterprisecontact'];
$eimage=$_REQUEST['enterpriseimage'];

$result = $connection->query("UPDATE `enterprise_information` SET enterprise_name='$ename', enterprise_contact='$econtact', enterprise_image='$eimage' where emailCheck='$user'");

if ($result){

    header("Location: indexEnterprise.php");

}
?>