<?php 

session_start();
switch($_GET['route']){
    case 'logout':
        session_destroy();
        header('location:index.php');
        exit();
        break;

    default: 
        

    
}


?>