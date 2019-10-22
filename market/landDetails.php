<?php 
include 'classes/Crud.php';
include('header.php');
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM goods";
$articles = $crud->getData($query);
?>

        
   
  
             <div class="container" >

                <div class="row el-element-overlay">
                   <center><h1><nav>Land Details</nav></h1></center> 
                    <!-- .usercard -->
              <?php
                foreach($articles as $article):
                ?><table bgcolor="">

                    <tr>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img  style="width:120px; height: 120px;" src="http://localhost/widema/public/images/<?php echo $article['image'];?>" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                          <!--   <li><a class="btn default btn-outline image-popup-vertical-fit" href="http://localhost/widema/public/images/<?php echo $article['image'];?>"></i></a></li> -->
                                            <!-- <li><a class="btn default btn-outline"  href="edit-patient.php?patientId=<?php echo $patient[pat_id];?>"><i class="icon-link"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Good Name:<?php echo $article['good_name'] ;?></h3> <small>Good quantity:<?php echo $article['good_quantity'] ;?></small>
                                    <br/> <small>Good price:<?php echo $article['good_price'] ;?></small> </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    <!-- /.usercard-->
                    <!-- /.usercard -->
                    </tr>
                </table>
               </div>
            </div>
        </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                
            </div>
            <!-- /.container-fluid -->
           <?php
         include ("footer.php")
     
           ?>


