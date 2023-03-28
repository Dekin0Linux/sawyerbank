<?php 
session_start();
include './inc/header.php';



?>
    <div class="container-fluid p-3">
        <div></div>
    </div>
    <?php include 'inc/navbar.php' ?>
    <?php if(isset($_SESSION['alertMsg'])){echo $_SESSION['alertMsg']; unset($_SESSION['alertMsg']); } ?>

    <!-- login -->
    <div class="container mb-3">
        <form action="process.php" method="post" class="d-none d-md-block">
            <div class="row ">
                <div class="col-md-3 text-dark mb-sm-3">
                    <label for="">Access Code</label>
                    <input type="text" class="form-control" name="access_code" required>
                </div>
                <div class="col-md-3 text-dark mb-sm-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="col-md-3 text-dark">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="col-md-3 text-dark">
                    <label for=""></label>
                    <button type="submit" class=" btn btn-primary bg-blue text-white form-control" name="login">Login</button>
                </div>
            </div>
            <div>
                <input type="checkbox"><span class="text-dark mx-2">Remember Me</span>
                <a href="">Forgot Password?</a>
            </div>
        </form>
    </div>

    <!-- Banner -->
    <div class="container-fluid banner-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card text-dark p-4 my-5 shadow border-0">
                        <p>Discover a New Home <br>of Investment</p>
                        <p class="display-5">
                            Open a high-yeild <br> Investment account
                        </p>
                        <small>Have a new life with sawyer investment </small>
                        <a href="" class="btn btn-primary btn-sm w-25 my-2 bg-blue">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 border-end">
                <p class="display-6">News</p>
                <hr>
                <p class="text-muted">15 January 2023</p>
                <p class="fw-bold">
                    Sawyer Investment with new packages for young people
                </p>
                <p>
                    Effective from January 15th 2023, Sawyer Investment provides to its customers – young people the opportunity to take advantage of specifically developed package “Asset...
                </p>
            </div>

            <div class="col-md-3 border-end">
                <p class="display-6">Activities</p>
                <hr>
                <p class="text-muted">22 January 2023</p>
                <p class="fw-bold">
                    Start your engine and head out of town to one of these destinations
                </p>
                <p>
                Now is the perfect time for a day trip on the road. Here are five day trip ideas across America perfect for any ; git the beach , go on a hike, enjoy fine dining , or visit the museum.
                </p>
            </div>

            <div class="col-md-3 border-end">
                <p class="display-6">Home Lending</p>
                <hr>
                <p class="text-muted">14 Feb 2023</p>
                <p class="fw-bold">
                    You may be eligible for low mortgage rate
                </p>
                <p>
                    You deserve this great chance to lock in a low interest rate when you refinance or buy your new home - and we can help.
                </p>
            </div>

            <div class="col-md-3">
                <p class="display-6">Latest</p>
                <hr>
                <p class="text-muted">19 Feb 2023</p>
                <p class="fw-bold">Investment</p>
                <p>
                    Visit us to enquire on our life time investment packages. 
                </p>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://media.istockphoto.com/id/1170725386/photo/never-stop-loving-each-other.jpg?s=612x612&w=0&k=20&c=OYspCvAuY8m1M6Z_uKv2Tp_FMIGNjmiTLI0sgqwgnC0=" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="fw-bold lead">Save, Invest, Retire well</p>
                        <div class="card-text">
                            Discover how to start saving to meet your retirement goals
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://media.istockphoto.com/id/1398069511/photo/affectionate-and-loving-mixed-race-family-sitting-together-happy-family-with-two-daughters.jpg?b=1&s=170667a&w=0&k=20&c=-LaoBRGsOW_iBFY0uMQCms0aI8sLNdN8dx1yBmC-00o=" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="fw-bold lead">Future Investment</p>
                        <div class="card-text">
                            Keep a healthy and peacful family with a good investment
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://image.cnbcfm.com/api/v1/image/100391705-young-couple-in-front-home-gettyp-2048.jpg?v=1532564725" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="fw-bold lead">Plan,Prepare , Enjoy Home</p>
                        <div class="card-text">
                        Discover tools and tips to help make buying or refinancing a little easier
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    
<?php include './inc/footer.php'?>