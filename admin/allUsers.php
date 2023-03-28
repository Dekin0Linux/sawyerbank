<?php 

    include 'db/db.php';
    $getUsers = "SELECT * FROM Signup";
    $getQuery = mysqli_query($conn,$getUsers) or die($conn);
?>

<div class="table-responsive shadow rounded">
    <h3 class="text-primary">All Users</h3>
    <table class="table bg-dark text-light mb-0">
        <thead class="">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Accesscode</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($getQuery)):?>
                <tr>
                    <th><?=$row['id'] ?></th>
                    <th><?=$row['email'] ?></th>
                    <td><?=$row['accessCode'] ?></td>
                    <td><?=$row['username'] ?></td>
                    <td>
                        <a href="main.php?page=edit&id=<?=$row['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="main.php?page=''&delid=<?=$row['id'] ?>" class="btn btn-danger" onclick="javascript:return confirm('Do you want to delete this user? ')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        <?php 
            //delete user
            if(isset($_GET['delid'])){
                $delId = $_GET['id'];

                $sql = "DELETE FROM signup WHERE id = '$delId'";
                $runQuery = mysqli_query($conn,$sql) or die($conn);
            }
        ?>
            
            
        </tbody>
    </table>
</div>