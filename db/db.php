<?php

//server details
$server = 'localhost';
$username = 'root';
$dbpass = '';
$dbname = 'sawyer';

$conn = mysqli_connect($server,$username,$dbpass,$dbname);

if(!$conn){
    header('location:../index.php');
    return;
}



?>