<?php include 'inc/header.php'?>


<div class="container-fluid p-0 " style="height:100vh ;width:100%">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-2 ">
            <div class="p-2 shadow h-100">
                <a href="main.php?page=''"><h2 class="text-center mt-5">Admin Panel</h2></a>
                <hr>
                <div class="ms-3 d-flex flex-wrap d-md-block">
                    <a href="main.php?page=addUser" class="nav-link text-primary"><p class="d-none d-md-block">Add Client</p></a> 
                    <a href="main.php?page=addActivity" class="nav-link text-primary"><p>Add Activity</p></a> 
                    <a href="main.php?page=addAlert" class="nav-link text-primary"><p>Add Alert</p></a> 
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="text-end p-3 shadow-lg"><a href="" class="btn btn-danger">Logout</a></div>
            <div class="my-5 border p-1">
                <?php 
                    switch(($_GET['page'])){
                        case 'addUser':
                            include './addUser.php';
                            break;
                        case 'edit':
                            include './editUser.php';
                            break;
                        case 'addActivity':
                            include './addactivity.php';
                            break;
                        case 'editAct':
                            include './edit.php';
                            break;
                        case 'addAlert':
                            include './addAlert.php';
                            break;
                        default :
                            include './allUsers.php';
                    }
                ?>
                </div>
           
                <!-- all clients -->
                
        </div>
    </div>
</div>