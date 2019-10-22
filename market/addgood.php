<?php
include 'header.php';
 
$crud = new Crud();

if(isset($_POST['Submit'])) {    
    $good_name = $_POST['good_name'];
    $good_description = $_POST['good_description'];
    $good_quantity = $_POST['good_quantity'];  
    $good_owner_id= $_POST['good_owner_id'];
    $manufacturer_id = $_POST['manufacturer_id'];
    $good_cert = $_POST['good_cert'];
    $good_type=$_POST['good_type'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];        
     //selecting usertype from the usertype table based on type name selected.
    $good_type_id_query = "SELECT * FROM gtype where good_type='$good_type'";
    $gtypes = $crud->getData($good_type_id_query);
    foreach ($gtypes as $type) {
           $good_type_id = $type['good_type_id'] ;
        }                        
         move_uploaded_file($image_tmp,"C:\\xampp\\htdocs\\widema\\public\\images\\$image");   
        //insert data to database
$user=$crud->execute("INSERT INTO `goods`(good_name,good_description,good_quantity,good_owner_id,manufacturer_id,image,good_cert,good_type_id) VALUES('$good_name','$good_description','$good_quantity','$good_owner_id','$manufacturer_id','$image','$good_cert','$good_type_id') ");
   var_dump($user);
        //display success message
if($user){
        echo "<font color='green'>good added successfully.";
       }
}
?>
<?php
    $goods_query = "SELECT * FROM gtype";
    $goods_types = $crud->getData($goods_query);                                      
?>                    
<div class="col-md-5 col-md-offset-2">
    <form name="adduser" class="form-horizontal" enctype="multipart/form-data" method="post" action="addgood.php">
        <div class="form-group">
            <label class="control-label col-md-3">Good Name</label>
            <div class="col-md-9">
                <input type="text" name="good_name" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"></label>
            <div class="col-md-9">
        <textarea rows=5 cols=10 type="text" name="good_description" class="form-control" required >Good description</textarea>
               
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3">Good Quantity</label>
            <div class="col-md-9">
                <input type="text" name="good_quantity" class="form-control" required>
            </div>
        </div>
          <div class="form-group">
            <label class="control-label col-md-3">owner id</label>
            <div class="col-md-9">
                <input type="number" name="good_owner_id" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Manufacturer id</label>
            <div class="col-md-9">
                <input type="number" name="manufacturer_id" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Good Certificate</label>
            <div class="col-md-9">
                <input type="text" name="good_cert" class="form-control" required>
            </div>
        </div>
        
         <!-- <div class="form-group">
            <label class="control-label col-md-3">User Type</label>
            <div class="col-md-9">
                <input type="text" name="userType" class="form-control" required>
            </div>
        </div> -->
         <div class="form-group">
            <label class="control-label col-md-3">select good Type</label>
            <div class="col-md-9">
                <select name="good_type" class="form-control" required>
                      
                        <?php foreach($goods_types as $type):?>
                       <option><?php echo $type['good_type'] ?></option>
                       <?php endforeach; ?>
                   </select>
            
        </div>
         </div>
        <div class="form-group">
            <label class="control-label col-md-3">Good Profile</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" required>
            </div>
        </div>
      
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Submit" value="Add good" onclick="return(validate())" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>