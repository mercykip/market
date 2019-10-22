<?php 
include 'header.php';
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY userId DESC";
$users = $crud->getData($query);

?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">USERS</div>
        </div>
        <div class="panel-body">
            <a href="addUser.php" class="btn btn-primary btn-lg pull-right">ADD USER</a>
            <a href="userdata.php" class="btn btn-success btn-lg pull-left">Export Users</a>
            <br/>
            <hr/>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>User Id.</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone Number</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>UserType</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($users as $user):
                ?>
                <tr>
                    <td><?php echo $user['userId'] ?></td>
                    <td><?php echo $user['fullName'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phoneNumber'] ?></td>
                    <td><?php echo $user['userName'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['userType'] ?></td>
                    <td><?php echo $user['address'] ?></td>
                   <?php echo "<td><a href=\"editUser.php?userId=$user[userId]\">Edit</a>|<a href=\"deleteUser.php?userId=$user[userId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";?>  
                </tr>
                
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<?php
include 'footer.php';
?>