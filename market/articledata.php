<?php
include 'header.php';
$connect = mysqli_connect("localhost", "root", "", "addSite");
$sql = "SELECT * FROM articles";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export Data</title>  
    
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />   
   <div class="table-responsive">  
    <h2 align="center">Export Data To Excel, Txt and Pdf</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                  <th>AUTHOR NO.</th>            
                    <th>TITLE</th>
                    <th>CONTENT</th>
                    <th>ORDER</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["authorId"].'</td>  
         <td>'.$row["articleTitle"].'</td>  
         <td>'.$row["articleFullText"].'</td>  
         <td>'.$row["articleOrder"].'</td>  
         
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export To Excel" class="btn-success" />

     <input type="submit" name="exporttxt" class="btn btn-success" value="Export To Txt" class="btn-success"/>

     <input type="submit" name="create_pdf" class="btn btn-success" value="Export To Pdf" class="btn-success"/>
    </form>

    
 
   </div>  
  </div>  
 <?php
include 'footer.php';
?>