<?php 
include 'db/db.php';
include 'inc/header.php';

$getEmail = 'SELECT * FROM dashboard';
$getEmailQuery = mysqli_query($conn,$getEmail) or die($conn);

//ADDING ACTIVITY
if(isset($_POST['add'])){
    $email = $_POST['email'];
    $type = $_POST['type'];
    $t_id = $_POST['t_id'];
    $amount = $_POST['amount'];
    $from = $_POST['from'];
    $to  = $_POST['to'];
    $status = $_POST['status'];
    $fee = $_POST['fee'];
    $date = $_POST['date'];

    //SENDING DATA TO DATABASE
    $sendActivity = "INSERT INTO activites (email,type,t_id,amount,fromAcc,toAcc,fee,status,date) VALUES('$email','$type','$t_id','$amount','$from','$to','$fee','$status','$date')";

    $sendQuery = mysqli_query($conn,$sendActivity) or die($conn);
    if($sendActivity){
        header('location:main.php?page');
    }
}

?>

<div>
    <form action="addactivity.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Email</label>
                    <select class="form-control" required name="email">
                        <option value="">Select Email</option>
                        <?php while($row = mysqli_fetch_assoc($getEmailQuery)):?>
                        <option value="<?= $row['email']?>" selected value=""><?= $row['email']?></option>
                        <?php endwhile ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Access Code</label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Type</label>
                    <input type="text" class="form-control" name="type" required>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Transaction ID</label>
                    <input type="text" class="form-control" name="t_id" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Amount</label>
                    <input type="text" class="form-control" name="amount" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">From</label>
                    <input type="text" class="form-control" name="from" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">To</label>
                    <input type="text" class="form-control" name="to" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Status</label>
                    <input type="text" class="form-control" name="status" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Fee</label>
                    <input type="text" class="form-control" name="fee" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Date</label>
                    <input type="text" class="form-control" name="date" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for=""></label>
                    <button type="submit" class="form-control btn btn-success" name="add">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>