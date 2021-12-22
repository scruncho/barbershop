<?php
$title = 'Home';
require_once 'includes/header.php';
require_once 'database/conn.php';
?>
<div class="">
    <div class=""
        style= "background-image: url('images/salonBg.jpg'); height: 50em; width: 100%; background-size:cover;  background-repeat:no-repeat; background-position: center center;">
        <center><img src="images/logo.png" style="width:150px;height:150px;"></center>
<!-- <br>
<br> -->
<h1 class="text-center">Delight Cut</h1>
<P style="color: red;  font-size: 40px;" class="text-center ">Presents Another Customer Appreciation Day</P>
<P style="color: red; font-size: 0px;" class="text-center">December 22, 2021</P>
<P class="color: red; text-center" style="color:blue;text-align:center; font-size: 40px">register to participate</P>


<center><a href="subscribe.php" class="btn btn-info" role="button">Register Here</a></center>
        
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>