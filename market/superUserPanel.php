<?php
include 'header.php';
if(isset($_SESSION['success'])){
?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div><?php
}
?>
<?php
if(isset($_SESSION['superuser'])){
   $superuser=$_SESSION['superuser'];
    foreach($superuser as $user){
     $user=$user['fullName'];?>
  ?>
  <div class="alert alert-success"><?php echo $user."  WELCOME TO ARTICLE AD-SITE" ?></div><?php
 }}?>

<?php
include 'footer.php';
?>