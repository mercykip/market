<?php
include 'header.php'; 
$crud = new Crud();
 
//getting id from url
$userId = $_GET['userId'];

//selecting data associated with this particular userid
$users = $crud->getData("SELECT * FROM users WHERE userId='$userId'");
 
foreach ($users as $user) {
    
     $fullName=$user['fullName']; 
     $email=$user['email']; 
     $phoneNumber=$user['phoneNumber']; 
     $userName=$user['userName']; 
     $password=$user['password']; 
     $userType=$user['userType']; 
     $address=$user['address']; 
    }

    if(isset($_POST['Update'])) 
    {   
    	$userId = $_POST['userId'];
	    $fullName = $_POST['fullName'];
	    $email = $_POST['email'];
	    $phoneNumber = $_POST['phoneNumber'];
	    $userName = $_POST['userName'];
	    $password = $_POST['password'];
	    $userType = $_POST['userType'];
	    $address = $_POST['address'];

	    //updating data in the users table
	    $users = $crud->execute("UPDATE users SET fullName='$fullName',email='$email',phoneNumber='$phoneNumber',userName='$userName',password='$password',userType='$userType',address='$address' WHERE userId=$userId");
	        
	       
	        header("Location: viewUsers.php");
	}
?>

<div class="col-md-5 col-md-offset-2">
    <form class="form-horizontal" method="post" action="editUser.php">
        <div class="form-group">
            <div class="col-md-9">
                <input type="hidden" name="userId" class="form-control" value="<?php echo $_GET['userId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">
                <input type="text" name="fullName" class="form-control" value="<?php echo $fullName;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="number" name="phoneNumber" class="form-control" value="<?php echo $phoneNumber;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">UserName</label>
            <div class="col-md-9">
                <input type="text" name="userName" class="form-control" value="<?php echo $userName;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3">User Type</label>
            <div class="col-md-9">
                <input type="text" name="userType" class="form-control" value="<?php echo $userType;?>" required>
            </div>
        </div>
        
         <div class="form-group">
            <label class="control-label col-md-3">address</label>
            <div class="col-md-9">
                <input type="text" name="address" class="form-control" value="<?php echo $address;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Update" value="Upadte" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>