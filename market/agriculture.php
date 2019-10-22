<?php 
include 'header.php';
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM goods where good_type_id=1";
$articles = $crud->getData($query);

?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">

            <div class="panel-title">LIST OF GOODS</div>
        </div>
        <div class="panel-body">
            
                      <!--   <a href="addgood.php?userId=<?php echo $user['userId'] ?>" class="btn btn-primary btn-lg pull-right">ADD Good</a> -->
                        <a href="addgood.php" class="btn btn-primary btn-lg pull-right">ADD Good</a>
                       <!--  <a href="articledata.php" class="btn btn-success btn-lg pull-left">Export</a> -->
    <a name="mercy"><font face="arial" font size=3> 
<A HREF="land.php">Land</a> | <A HREF="#other service">Electronic</a> | <A HREF="#fuel">Household</a> |<A HREF="#carservice">machinery</a>| <A HREF="#other service">Traditional Artifacts</a>  |
           
            <br/>
             <hr/>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</a></th>
                    <th>Quantity</th>
                    <th>Owner Id</th>
                    <th>Manufuctures Id</th>
                    <th>products Photo</th>
                    <th>Certification</th>
                    <th>Good Type</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($articles as $article):
                ?>
                <tr>
                     <td><?php echo $article['good_name'] ?></td>
                    <td><?php echo $article['good_description'] ?></td>
                    <td><?php echo $article['good_quantity'] ?></td>
                    <td><?php echo $article['good_owner_id'] ?></td>
                    <td><?php echo $article['manufacturer_id'] ?></td>
                     <td>
                    <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img  style="width:120px; height: 100px;" src="http://localhost/widema/public/images/<?php echo $article['image'];?>" /></div></div>
                    </td>
                    
                    <td><?php echo $article['good_cert'] ?></td>
                          <td><?php echo $article['good_type_id'] ?></td>
                  
                  
             
                
                <?php
                endforeach;
                   ?>
                </tbody>
            </table>
         
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>