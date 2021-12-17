<?php
include_once 'includes/session.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="css/mycss.css">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    
    <title>Mobile Barber Shop - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width:50px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
           </li>
             <li class="nav-item">
               <a class="nav-link" href="feature.php">Features</a>
               </li>
                 <li class="nav-item">
                <a class="nav-link" href="search.php">Search Members</a>
                </li>
                <li class="nav-item">
               <a class="nav-item nav-link" href="viewmembers.php" >Members</a>
             </li>
                <li class="nav-item">
               <a class="nav-item nav-link" href="about.php" >About Us</a>
             </li>
            </ul>

          <ul class="navbar-nav ml-auto">
          <?php 
            if(!isset($_SESSION['userid'])){ 
          ?>
          <a class="nav-item nav-link" href="login.php">Login</a>
             <?php } else {?>
            <li class="nav-item">
             <a class="nav-item nav-link" href="#"><span>Welcome <?php echo strtoupper($_SESSION['username'])?>! </span></a>
          <a class="nav-item nav-link" href="logout.php" >Logout</a> 
      </li>
    </ul>
    <?php }?>
</div>
</nav>
  <div class="container">
  
<br>
<br>
