<?php include 'inc/header.php'?>

<div class="container-fluid bg-blue p-5">
    <h4>Admin</h4>
</div>
<div class="container my-5">
    <div class="row ">
        <div class="col-md-6 mx-auto shadow p-4">
            <form action="main.php?page=''" method="post">
                <h2 class="text-center fw-bold">Login to AdminPanel</h2>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" required name="email">
                </div>
                <div class="form-group my-5">
                    <label for="Email">password</label>
                    <input type="password" class="form-control" required name="pass">
                </div>
                <div class="form-group my-5">
                    <input type="submit" class="form-control btn btn-primary bg-blue" value="Login" name="adminLogin">
                </div>
            </form>
        </div>
    </div>
    
</div>



<?php include 'inc/footer.php'?>
