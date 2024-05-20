<?php 
    session_start();
    include './inc/header.php';
    include './db/db.php';

    $loan = 0;
    $received=0;
    $balance = 0;

    //Deny access
    if(!isset($_SESSION['accessID'])){
        header('location:index.php');
        exit();
    }else{
        $code = $_SESSION['accessID'];
        $sql = "SELECT * FROM signup WHERE accessCode = '$code' ";
        $query = mysqli_query($conn,$sql) or die($conn);
        while($row = mysqli_fetch_assoc($query)){
            $dbemail = $row['email'];
            $dbaccessCode = $row['accessCode'];
            $dbusername = $row['username'];
        }

        $acc_sql = "SELECT * FROM dashboard WHERE accessCode = '$code'";
        $dash_query = mysqli_query($conn,$acc_sql) or die($conn);
        while($row =mysqli_fetch_assoc($dash_query)){
            $total = $row['received'];
            $loan = $row['loan'];
            $accNum = $row['accNumber'];
            $accName = $row['accName'] ;
            $intRef = $row['internalRef'];
            $accType = $row['accType'];
            $balance = $row['balance'];
            $status = $row['status'];
            $received = $row['received'];
        }


        //Acitivites query
        $activity_sql = "SELECT * FROM activites WHERE email = '$dbemail' ORDER by id DESC ";
        $activity_query = mysqli_query($conn,$activity_sql) or die($conn);


        //Alert Query
        $alert_sql = "SELECT * FROM alert WHERE email = '$dbemail' ORDER by id DESC ";

        $alert_query = mysqli_query($conn,$alert_sql) or die($conn);

    }
?>

<div class="container-fluid online-banner"></div>
<?php include './inc/navbar.php'?>

<div class="container-fluid mt-4 mb-3">
    <div class="d-flex justify-content-between px-3">
        <h4 class="fw-bold">Welcome <?= $dbusername; ?></h4>
        <div class="">
            <i class="fa-solid fa-message d-inline me-4 text-info fs-4" id="liveToastBtn"></i>
           
            <a href="./router.php?route=logout" class="d-inline btn btn-danger">Logout</a>
        </div>
    </div>
</div>

<?php if(isset($_SESSION['alertMsg'])){echo $_SESSION['alertMsg']; unset($_SESSION['alertMsg']); } ?>

<div class="container-fluid my-4">
    <div class="row gy-4">
        <div class="col-md-4 col-12">
            <div class="shadow-lg p-3">
                <p class="lead fw-bold fs-10">Total Balance</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="fs-3 text-muted d-none d-md-block">
                        <i class="fa-solid fa-sack-dollar" ></i>
                    </div>
                    <p class="lead fw-bold fs-lg-3 text-blue"><?= $balance; ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="shadow-lg p-3">
                <p class="lead fw-bold fs-10">Total Received</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="fs-3 text-muted d-none d-md-block">
                        <i class="fa-solid fa-arrow-down"></i>
                    </div>
                    <p class="lead fw-bold fs-lg-3 text-blue"><?=  $received; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="shadow-lg p-3">
                <p class="lead fw-bold fs-10">Loan Balance</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="fs-3 text-muted d-none d-md-block">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <p class="lead fw-bold fs-lg-3 text-blue"><?= $loan; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 text-end w-100">
    <button type="button" class="btn btn-success shadow " data-bs-toggle="offcanvas" href="#offcanvasExample">Make Transfer</button>
</div>


<!-- account info -->
<div class="container-fluid table-responsive">
    <p class="fw-bold text-blue">Account status</p>
    <table class="table border border-primary table-bordered table-responsive">
    <thead class="bg-blue">
        <tr>
            <th scope="col">Account Number</th>
            <th scope="col">Account Name</th>
            <th scope="col">Internal Ref</th>
            <th scope="col">Account Type</th>
            <th scope="col">Balance</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
      
            <tr>
                <td><?=$accNum ?></td>
                <td><?=$accName?></td>
                <td><?=$intRef ?></td>
                <td><?=$accType ?></td>
                <td><?=$balance ?></td>
                <td><?=$status?></td>
            </tr>
      
    </tbody>
    </table>
</div>
<!-- end of acc info -->

<!-- Activites -->
<div class="container-fluid mt-5 table-responsive">
    <p class="fw-bold text-blue">Activites</p>
    <table class="table border border-primary table-bordered table-responsive">
    <thead class="bg-blue">
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Fee</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($activity_query)):?>
        <tr>
            <td><?= $row['date']?></td>
            <td><?= $row['type']?></td>
            <td><?= $row['amount']?></td>
            <td><?= $row['t_id']?></td>
            <td><?= $row['fromAcc']?></td>
            <td><?= $row['toAcc']?></td>
            <td><?= $row['fee']?></td>
            <td class="fw-bold"><?= $row['status']?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
    </table>
</div>
<!-- end of activities -->


<!-- Toast Message -->

<?php 
while($row = mysqli_fetch_assoc($alert_query)):?>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>

<?php endwhile; ?>


<!-- end of toast Message -->

<!-- off canvas -->
<div class="offcanvas offcanvas-start px-2" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Make Transfer</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <p class="fw-bold text-muted">Link Card or Bank Account</p>
      <button type="button" class="btn btn-warning btn-sm" id="ccBtn">Credit card</button>
      <button type="button" class="btn btn-warning btn-sm" id="bankBtn">Bank Account</button>
    </div>

    <!-- Card Details -->
    <div class="my-5 d-block" id="cc_div" >
        <form action="process.php" method="post">
            <h4 class="text-center">Add Card</h4>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control"  required name="email"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Bank Name</label>
                <input type="text" class="form-control"  required name="bank_name"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Username</label>
                <input type="text" class="form-control"  required name="username"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control"  required name="password"/>
            </div>
            <div class="col-md-12 form-group mb-3">
                <input type="hidden" class="form-control" required name="ssn">
            </div>

            <div class="col-md-12 form-group mb-3">
                <label for="">Transfer Amount</label>
                <input type="number" class="form-control" required name="amount">
            </div>

            <div class="form-group mt-3">
                <input type="submit" class="form-control btn btn-primary bg-blue" value="Request" name="request">
            </div>

        </form> 
    </div>

    <!-- Bank info -->
    <div class="my-5 d-none" id="div_bank">
        <form action="process.php" method="post">
            <h4 class="text-center">Add Bank</h4>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control"  required name="email"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Bank Name</label>
                <input type="text" class="form-control"  required name="bank_name"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Username</label>
                <input type="text" class="form-control"  required name="username"/>
            </div>
            <div class="col-md-12 form-group mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control" required name="password">
            </div>
            <div class="col-md-12 form-group mb-3">
                <label for="">SSN</label>
                <input type="number" class="form-control" required name="ssn">
            </div>
            <div class="col-md-12 form-group mb-3">
                <label for="">Transfer Amount</label>
                <input type="number" class="form-control" required name="amount">
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="form-control btn btn-primary bg-blue" value="Request" name="request">
            </div>
    
        </form>
    </div>

    
    </div>
  </div>
</div>

<?php include './inc/footer.php'?>
<script src="./bootstrap/js/script.js"></script>

<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
    toastTrigger.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
    })
}
</script>
