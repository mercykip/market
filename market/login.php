<?php
include 'header.php';

$crud = new Crud();
if(isset($_POST['login'])){
$userName=$_POST['userName'];
$password=$_POST['password'];
//$result = $crud->execute("UPDATE users SET accessTime=CURRENT_TIMESTAMP WHERE userName='$userName' and password='$password'");
//super user
$user1 = "SELECT * FROM users WHERE userName='$userName' and password='$password' and user_type_id=1";
$seller = $crud->getData($user1);

//admin login
$user2 = "SELECT * FROM users WHERE userName='$userName' and password='$password' and user_type_id=2";
$buyer= $crud->getData($user2);

if($seller){
    $_SESSION['seller']=$seller;
    header("Location: menu.php");   
}
elseif($buyer){
   $_SESSION['buyer']=$buyer; 
   header("Location: menu.php"); 
}
else{?>
    <script type="text/javascript">
        alert("Invalid username or password");
    </script><?php
    //header("Location: login.php"); 
}
    
}
?>
<div class="col-md-6 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">Login</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="login.php">
                <div class="form-group">
                    <label class="control-label col-md-3">Username</label>
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
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                        <div class="col-md-9">
                            <input type="submit" name="login" value="Login" class="btn btn-primary"> 
                        </div>
                </div>
            </form>
        </div>
  </div>
</div>


<?php
include 'footer.php';
?>