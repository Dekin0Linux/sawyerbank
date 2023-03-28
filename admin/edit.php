

<?php 
include 'db/db.php';

    if(isset($_GET['id'])){
        $actID = $_GET['id'];
        //GET ACTIVITIY
        $getSql = "SELECT *  FROM activites WHERE id = '$actID' ";
        $getQuery = mysqli_query($conn,$getSql) or die($conn) ;

        while($row = mysqli_fetch_assoc($getQuery)){
            $email = $row['email'];
            $type = $row['type'];
            $t_id = $row['t_id'];
            $amount = $row['amount'];
            $from = $row['fromAcc'];
            $to = $row['toAcc'];
            $status = $row['status'];
            $fee = $row['fee'];
            $date = $row['date'];
        }

    }

    //UPDATING ACTIVITY
if(isset($_POST['update'])){
    $id =$_POST['id'];
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
    $sendActivity = "UPDATE activites SET email='$email', type='$type', t_id='$t_id' , amount = '$amount', fromAcc = '$from', toAcc = '$to', status='$status',fee= '$fee',date='$date' WHERE id = '$id' ";

    $sendQuery = mysqli_query($conn,$sendActivity) or die($conn);
    if($sendActivity){
        header('location:main.php?page');
    }
}


?>

<div>
    <form action="edit.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <input type="hidden" name="id" value="<?= $actID?>">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ? $email : ""  ?>" required>
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
                    <input type="text" class="form-control" name="type" required value="<?= $type ? $type : '' ?>">
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Transaction ID</label>
                    <input type="text" class="form-control" name="t_id" required value="<?= $t_id ? $t_id : '' ?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Amount</label>
                    <input type="text" class="form-control" name="amount" required value="<?= $amount ? $amount : '' ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">From</label>
                    <input type="text" class="form-control" name="from" required value="<?= $from ? $from : '' ?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">To</label>
                    <input type="text" class="form-control" name="to" required value="<?= $to ? $to : '' ?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Status</label>
                    <input type="text" class="form-control" name="status" required value="<?= $status ? $status : '' ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Fee</label>
                    <input type="text" class="form-control" name="fee" required value="<?= $fee ? $fee : '' ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="" class="text-dark">Date</label>
                    <input type="text" class="form-control" name="date" required value="<?= $date ? $date: '' ?>">
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for=""></label>
                    <button type="submit" class="form-control btn btn-success" name="update">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>