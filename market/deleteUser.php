<?php
//including the database connection file
include_once("classes/Constant.php");

 $con=new DbConfig();

//getting userid of the data from url
$userId = $_GET['userId'];

$users=$con->connection->query("DELETE FROM users WHERE userId='$userId'");

if ($users) {
   
    header("Location:viewUsers.php");
   
}

?>
<?php
include 'footer.php';
?>