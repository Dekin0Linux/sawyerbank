<?php 
include 'db/db.php';

//Creating New User
    if(isset($_POST['addUser'])){
        // login data
        $email = $_POST['email'];
        $username = $_POST['username'];
        $accessCode = $_POST['accessCode'];
        $password = $_POST['password'];


        // account data
        $accNumber = $_POST['accNumber'];
        $accName = $_POST['accName'];
        $intRef = $_POST['intRef'];
        $accType = $_POST['accType'];
        $balance = $_POST['balance'];
        $status = $_POST['status'];
        $received = $_POST['received'];
        $loan = $_POST['loan'];

        $sendLogin = "INSERT into signup (username,email,accessCode,password) VALUES ('$username','$email','$accessCode','$password')";

        $sendAccountData = "INSERT into dashboard (accesscode,email,accNumber,accName,internalRef,accType,balance,status,received,loan) VALUES ('$accessCode','$email','$accNumber','$accName','$intRef','$accType','$balance','$status','$received','$loan')";

        $loginQuery = mysqli_query($conn,$sendLogin) or die($conn);
        $dashQuery = mysqli_query($conn,$sendAccountData) or die($conn);

        if($loginQuery && $dashQuery){
            header('location:main.php?page');
        }


    }

    //END OF CREATING NEW USER



    //UPDATING A USER

    if(isset($_POST['updateUser'])){

        $userID = $_POST['id'];
        // Updating Login data
        $email = $_POST['email'];
        $username = $_POST['username'];
        $accessCode = $_POST['accessCode'];
        $password = $_POST['password'];


        // account data
        $accNumber = $_POST['accNumber'];
        $accName = $_POST['accName'];
        $intRef = $_POST['intRef'];
        $accType = $_POST['accType'];
        $balance = $_POST['balance'];
        $status = $_POST['status'];
        $received = $_POST['received'];
        $loan = $_POST['loan'];

        $updateLogin = "UPDATE signup SET email='$email', username= '$username',accessCode = '$accessCode',password='$password' WHERE id = '$userID' ";

        $updateAccountData = "UPDATE dashboard SET accessCode = '$accessCode',email='$email', accNumber = '$accNumber',accName='$accName',internalRef='$intRef', accType= '$accType',balance='$balance',status = '$status',received= '$received',loan='$loan' WHERE email = '$email' ";

        $updateQuery = mysqli_query($conn,$updateLogin) or die($conn); //for login uipdate
        $updatedashQuery = mysqli_query($conn,$updateAccountData) or die($conn); //for dashboard update

        if( $updateQuery && $updatedashQuery){
            header('location:main.php?page');
        }
    }

?>