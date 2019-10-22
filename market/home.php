<?php

include_once("classes/Crud.php");
 //include_once("header.php");
$crud = new Crud();

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
    <meta name="author" content="">

    <title>WIDEMA</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="">
</head>
 
</head>
<body>
  
 <nav class="navbar navbar-default navbar-static-top" id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
   <div class="container-fluid"> 
        <div class=" navbar-header page-scroll">

             <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>Menu <i class="fa fa-bars"></i>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
                    <a class="navbar-brand page-scroll" href="index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                 
                    <li>
                        <a class="page-scroll" href="#contact">logout</a>
                        <li>
                          <a  class="page-scroll" href="">login</a>
                        </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
       
        <!-- /.container-fluid -->
    </nav>

        </div>         

<!--grouping using rows and cols -->

<div></div>

<div class="container-fluid"> 
 
<form method="POST" action="<?php echo $_SERVER ['PHP_SELF'];?>" role="form">
  <div class="row" style="padding: 17px 800px 70px 100px;"> 
       <h2 style="color: black;">feedback</h2> <i style="color: black;">please fill in the form</i></center><br>
      <div class="form-group">
          <div><label for="name">First Name</label></div>
          <input type="text"  name="fname"  class="form-control" style="background: #bbc8ce;" >
      </div>
      
      <div class="form-group">
            <label for="comment">comment</label>
            <textarea class="form-control" cols="50" rows="10" name="comment" style="background: #bbc8ce;" placeholder="enter comment" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-md">submit</button>
            <button type="reset" class="btn btn-danger btn-md">cancel</button>
        </div>
  </form>
</div>




<?php

include_once 'footer.php';
?>