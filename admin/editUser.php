<?php

$userID;

include 'db/db.php';
if(isset($_GET['id'])){
    $userID = $_GET['id'];
    $selectUser = "SELECT * FROM signup WHERE id = '$userID'";
    $getResult = mysqli_query($conn,$selectUser) or die($conn);
    while($data = mysqli_fetch_assoc($getResult)){
        $email = $data['email'];
        $username = $data['username'];
        $accessCode = $data['accessCode'];
        $password = $data['password'];
    }

    //NOTE NEVER UPDATE THE THE EMAIL AS IT IS OUR FOREIGN KEY
    $getAccount = "SELECT * FROM dashboard WHERE email = '$email'";
    $accQuery = mysqli_query($conn,$getAccount) or die($conn);

    while($row = mysqli_fetch_assoc($accQuery)){
        $email = $row['email'];
        $accessCode = $row['accessCode'];
        $accNumber = $row['accNumber'];
        $accName = $row['accName'];
        $internalRef= $row['internalRef'];
        $accType= $row['accType'];
        $balance= $row['balance'];
        $status = $row['status'];
        $received = $row['received'];
        $loan = $row['loan'];
    }
}
    $activity_sql = "SELECT * FROM activites WHERE email = '$email' ORDER by id DESC ";
    $activity_query = mysqli_query($conn,$activity_sql) or die($conn);
?>

<div>
    <h1 class="text-center my-3">Edit Client Data</h4>
    <form action="process.php" method="post">
        <div class="row p-3 gy-3">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" required value="<?php if(isset($email))echo $email; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required value="<?php if(isset($username))echo $username; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">AccessCode</label>
                    <input type="text" class="form-control" name="accessCode" required value="<?php if(isset($accessCode))echo $accessCode; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" required value="<?php if(isset($password))echo $password ?>">
                </div>
            </div>
        </div>

        <!-- bank account details -->
        <div class="row mt-4 p-3 gy-3">
            <h3 class="text-primary">Account Data</h3>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Number</label>
                    <input type="text" class="form-control" name="accNumber" required value="<?php if(isset($accNumber))echo $accNumber; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Name</label>
                    <input type="text" class="form-control" name="accName" required value="<?php if(isset($accName))echo $accName; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Internal Ref</label>
                    <input type="text" class="form-control" name="intRef" required value="<?php if(isset($internalRef))echo $internalRef; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Type</label>
                    <input type="text" class="form-control" name="accType" required value="<?php if(isset($accType))echo $accType; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Balance</label>
                    <input type="text" class="form-control" name="balance" required value="<?php if(isset($balance))echo $balance; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status" required value="<?php if(isset($status))echo $status; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Received</label>
                    <input type="text" class="form-control" name="received" required value="<?php if(isset($received))echo $received; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Loan</label>
                    <input type="text" class="form-control" name="loan" required value="<?php if(isset($loan))echo $loan; ?>">
                </div>
            </div>
            <input type="hidden" name="id" id="" value="<?php if(isset( $userID))echo  $userID; ?>">
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-info w-100" name="updateUser">UPDATE USER</button>
            </div>
            
        </div>
        
    </form>
</div>
<!-- user activity -->
<div class="mt-5 table-responsive">
    <h3 class="text-center">Client Acitvity</h3>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">accessCode</th>
        <th scope="col">Type</th>
        <th scope="col">Transac_id</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Fee</th>
        <th scope="col">Status</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($activity_query)):?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['date']?></td>
                <td><?= $row['accessCode']?></td>
                <td><?= $row['type']?></td>
                <td><?= $row['t_id']?></td>
                <td><?= $row['fromAcc']?></td>
                <td><?= $row['toAcc']?></td>
                <td><?= $row['fee']?></td>
                <td class="fw-bold"><?= $row['status']?></td>
                <td><?= $row['email']?></td>
                <td class="fw-bold">
                    <a href="main.php?page=editAct&id=<?= $row['id']?>" class="btn btn-info btn-sm text-light">Edit</a>
                    <a href="main.php?page=''= delId=<?= $row['id']?>" class="btn btn-danger btn-sm text-light" onclick="javascript:return confirm('Do you want to delete this user? ')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

        <?php 
            //delete user
            if(isset($_GET['delIid'])){
                $delId = $_GET['id'];

                $sql = "DELETE FROM signup WHERE id = '$delId'";
                $runQuery = mysqli_query($conn,$sql) or die($conn);
            }
        ?>
    
    </tbody>
    </table>
</div>