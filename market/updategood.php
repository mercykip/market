
<?php
include 'classes/Crud.php';
$crud = new Crud();
 
//getting id from url

$goodtypeid=$_GET['goodtypeid']
//selecting data associated with this particular employeeId
$users = $crud->getData("SELECT * FROM goods WHERE  good_type_id=='$goodtypeid'");
 $userss = $crud->getData("SELECT * FROM gtype WHERE  good_type_id=='$goodtypeid'");
foreach ($users as $user) {

     $good_quantity=$user['good_quantity']; 
    }
    
    if(isset($_POST['Update'])) 
    {
 $good_quantity=$_POST['good_quantity']; 

  $good_description=$_POST['good_description']; 

  $good_type=$_POST['good_type'];
   
        //updating data in the patients table
        $users = $crud->execute("UPDATE goods SET good_type_id='$good_type_id'");
            
  
if ($users) {
    echo "updated successfully";
    # code...
}
  }  
?>
               <div class="container">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Good</h3>
                            <form class="form-material form-horizontal" method="POST" action="" enctype="multipart/form-data">
                               
                                 <div class="form-group">
                                    <label class="col-md-12" for="example-text">medical status</span>
                                    </label>
                                    <div class="col-md-4">
                                         <select name="good_type" class="form-control" value="<?php echo $good_type_id; ?>">
                                           
                        <?php foreach($goods_types as $type):?>
                       <option><?php echo $type['good_type'] ?></option>
                       <?php endforeach; ?>
                   </select>
                                            </select>
                                     </div>
                                </div>
                         
                                <button type="submit"  name="Update" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
               include('footer.php');
               ?>