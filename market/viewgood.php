<?php 
include 'header.php';
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM goods";
$articles = $crud->getData($query);

?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">

            <div class="panel-title">LIST OF GOODS</div>
        </div>
        <div class="panel-body">
            
                        <a href="addArticle.php?userId=<?php echo $user['userId'] ?>" class="btn btn-primary btn-lg pull-right">ADD ARTICLE</a>
                       <!--  <a href="articledata.php" class="btn btn-success btn-lg pull-left">Export</a> -->
    <a name="mercy"><font face="arial" font size=3> 
<A HREF="#service">Agricultural</a> | <A HREF="#other service">Electronic</a> | <A HREF="#fuel">Household</a> |<A HREF="#carservice">machinery</a>| <A HREF="#other service">Traditional Artifacts</a>  |
           
            <br/>
           <!--  <hr/> -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    
                     <th>Description</th>
                    <th>Quantity</th>
                    <th>Suggested Prices</th>
                    <th>Owner Id</th>
                    <th>Manufuctures IdNumber</th>
                    <th>Photo of products</th>
                    <th>Certification</th>
                    <th>Certification</th>
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
                    <td><?php echo $article['image'] ?></td>
                    <td><?php echo $article['good_cert'] ?></td>
                          <td><?php echo $article['good_type_id'] ?></td>
                   <?php
                   // echo "<td><a href=\"updateArticle.php?articleOrder=$article[articleOrder]\">Edit</a> | <a href=\"deleteArticle.php?articleOrder=$article[articleOrder]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"viewArticles.php?articleOrder=$article[articleOrder]\">View</a> </td>";?>  
                </tr>
                
                <?php
                endforeach;
                   ?>
                </tbody>
            </table>
            <a href="#mercy"><img src="mercy.png"></a><br>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>