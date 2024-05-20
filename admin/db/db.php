<?php

//server details
// $server = 'localhost';
// $username = 'root';
// $dbpass = '';
// $dbname = 'sawyer';


$server = 'localhost:3306';
$username = 'root';
$dbpass = 'M{Y[AK<cP\O2$([p';
$dbname = 'id20585653_sawyer';

$conn = mysqli_connect($server,$username,$dbpass,$dbname);

if(!$conn){
    header('location:../index.php');
    return;
}



?>