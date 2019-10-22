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
        $password = $_POST['password'];
        $pic = $_FILES['image']['name'];
        $pic_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        //updating data in the users table
        $users = $crud->execute("UPDATE users SET fullName='$fullName',email='$email',phoneNumber='$phoneNumber',password='$password',profileImage='$pic',address='$address' WHERE userId=$userId");
        if($users)
            $_SESSION['success']="your data has been updated successfully.";
            if(isset($_SESSION['superuser'])){
                header("Location: superUserPanel.php");
            }
            elseif(isset($_SESSION['admin'])){
                header("Location: adminPanel.php");
            }
           elseif(isset($_SESSION['author'])){
                header("Location: authorPanel.php");
            }
    }
?>
           
         

<div class="col-md-5 col-md-offset-2">
    <form class="form-horizontal" method="post" action="updateProfile.php" >
        <div class="form-group">
            <div class="col-md-9">
                <input type="hidden" name="userId" class="form-control" value="<?php echo $_GET['userId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">
                <input type="text" name="fullName" class="form-control" value="<?php echo $fullName;?>" required autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="number" name="phoneNumber" class="form-control" value="<?php echo $phoneNumber;?>" required autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Profile Image</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" required autocomplete="off">
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3">address</label>
            <div class="col-md-9">
                <input type="text" name="address" class="form-control" value="<?php echo $address;?>" required autocomplete="off">
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
