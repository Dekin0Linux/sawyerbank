<div>
    <h1 class="text-center my-3">Add New Client</h4>
    <form action="process.php" method="post">
        <div class="row p-3 gy-3">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">AccessCode</label>
                    <input type="text" class="form-control" name="accessCode" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" required>
                </div>
            </div>
        </div>
        <div class="row mt-4 p-3 gy-3">
            <h3 class="text-primary">Account Data</h3>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Number</label>
                    <input type="text" class="form-control" name="accNumber" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Name</label>
                    <input type="text" class="form-control" name="accName" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Internal Ref</label>
                    <input type="text" class="form-control" name="intRef" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Acc. Type</label>
                    <input type="text" class="form-control" name="accType" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Balance</label>
                    <input type="text" class="form-control" name="balance" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Received</label>
                    <input type="text" class="form-control" name="received" required>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Loan</label>
                    <input type="text" class="form-control" name="loan" required>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary w-100" name="addUser">ADD USER</button>
            </div>
            
        </div>
        
    </form>
</div>