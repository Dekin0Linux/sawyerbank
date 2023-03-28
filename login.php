<?php 
session_start();
include './inc/header.php';

?>

<div class="">
    <div class="container-fluid top-banner m-0 p-0 "></div>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <a href="index.php" class=""><li class="list-group-item">Homepage</li></a>
                    <li class="list-group-item">Online Banking</li>
                    <li class="list-group-item">Contact Us</li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row bg-gray align-content-center justify-content-center">
                    <div class="bg-blue text-light p-2 mb-2 fw-bold">
                        <p>Login to Secure Banking</p>
                    </div>
                    <div class="col-md-6 my-1 py-5 ">
                        <form action="process.php" method="post" class="">
                            <div class="form-group my-2">
                                <label for="">Access Code</label>
                                <input type="text" class="form-control" name="access_code">
                            </div>
                            <div class="form-group my-2" >
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group my-2">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="">
                                <input type="checkbox" checked><span class="text-muted ms-2">I acknowledge that I have read and understand the Electronic Banking Agreement for using Internet Banking.</span>
                            </div>
                            <div class="form-group my-3">
                                <input type="submit" class="form-control btn btn-primary bg-blue" value="Login" name="login">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 align-self-center justify-center d-none d-md-block">
                        <img src="https://www.seekpng.com/png/full/110-1105789_productimage-mcafee-secure-logo-png.png" alt="" width="450px" class="img-fluid">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php  include './inc/footer.php' ?>