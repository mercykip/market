<?php
include 'header.php'; 
$crud = new Crud();
 
//getting id from url
$goodId = $_GET['goodId'];

//selecting data associated with this particular userid
$articles = $crud->getData("SELECT * FROM goods WHERE good_id='$goodId'");
 
foreach ($articles as $article) {
    
    $good_name = $_POST['good_name'];
       }
     
    if(isset($_POST['Update'])) 
    {   
   
    $good_name = $_POST['good_name'];

	    //updating data in the users table
	    $articles = $crud->execute("UPDATE goods SET good_name='$good_name' WHERE good_id='$goodId'");
	        
	if ($articles) {
    echo "updated successfully";
    # code...
}
	}
?>

<div class="col-md-5 col-md-offset-2">
    <form class="form-horizontal" method="post" action="editgood.php">
        <div class="form-group">
              <label class="control-label col-md-3">Good Name</label>
            <div class="col-md-9">
                <input type="hidden" name="goodId" class="form-control" value="<?php echo $_GET['goodId'];?>" required>
                  <input type="text" name="good_name" class="form-control" value="<?php echo $good_name;?>" required>
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