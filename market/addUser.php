
<?php
include 'header.php';
 
$crud = new Crud();

 
if(isset($_POST['Submit'])) {    
     $fullName = $_POST['fullName'];
    $idNumber = $_POST['idNumber'];
    $address = $_POST['address'];  
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $accountNumber = $_POST['accountNumber'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name']; 

    $user_type_id_query = "SELECT * FROM usertype where user_type='$user_type'";
    $user_types = $crud->getData($user_type_id_query);
    foreach ($user_types as $type) {
           $user_type_id = $type['user_type_id'] ;
        }   
         
         move_uploaded_file($image_tmp,"C:\\xampp\\htdocs\\widema\\public\\images\\$image");   
        //insert data to database    
        $result = $crud->execute("INSERT INTO users(fullName,idNumber,address,phoneNumber,email,accountNumber,userName,password,user_type_id,image) VALUES('$fullName','$idNumber','$address','$phoneNumber','$email','$accountNumber','$userName','$password','$user_type_id','$image')");
              
    }

?>
<?php
  
    $users_query = "SELECT * FROM usertype";
    $users_types = $crud->getData($users_query);                                      
           
                                       
    ?>

<div class="col-md-5 col-md-offset-2">
    <form name="adduser" class="form-horizontal" enctype="multipart/form-data" method="post" action="addUser.php">
        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">
                <input type="text" name="fullName" class="form-control" required>
            </div>
        </div>
             <div class="form-group">
            <label class="control-label col-md-3">id Number</label>
            <div class="col-md-9">
                <input type="number" name="idNumber" class="form-control" required>
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3">address</label>
            <div class="col-md-9">
                <input type="text" name="address" class="form-control" required>
            </div>
        </div>
          <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="number" name="phoneNumber" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">account Number</label>
            <div class="col-md-9">
                <input type="number" name="accountNumber" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">UserName</label>
            <div class="col-md-9">
                <input type="text" name="userName" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>
         <!-- <div class="form-group">
            <label class="control-label col-md-3">User Type</label>
            <div class="col-md-9">
                <input type="text" name="userType" class="form-control" required>
            </div>
        </div> -->
         <div class="form-group">
            <label class="control-label col-md-3">select userType</label>
            <div class="col-md-9">
                <select name="user_type" class="form-control" required>
                      
                        <?php foreach($users_types as $type):?>
                       <option><?php echo $type['user_type'] ?></option>
                       <?php endforeach; ?>
                   </select>
            
        </div>
         </div>
        <div class="form-group">
            <label class="control-label col-md-3">Profile Picture</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" required>
            </div>
        </div>
      
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Submit" value="Add User" onclick="return(validate())" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>