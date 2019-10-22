<?php 
include 'header.php';
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ";
$users = $crud->getData($query);

?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">LIST OF USERS</div>
        </div>
        <div class="panel-body">
          <form method="post" action="userexport.php">
             <input type="submit" name="export" class="btn btn-success" value="Export To Excel" class="btn-success" />

             <input type="submit" name="exporttxt" class="btn btn-success" value="Export To Txt" class="btn-success"/>

             <input type="submit" name="create_pdf" class="btn btn-success" value="Export To Pdf"/>
          </form>
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
                </tr>
                
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    

    </table>
    <br />
   

    
    </form>
   </div>  
  </div>  
 <?php
include 'footer.php';
?>