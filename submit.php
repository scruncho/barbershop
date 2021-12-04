<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php';

    if (isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
    
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
       
        //call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $email, $gender, $address);

        if($isSuccess){
           // echo '<h1 class="text-center text-success">Your Registration Was Successful!</h1>';
           include 'includes/successmessage.php';
        }
        else{
            //echo '<h1 class="text-center text-danger">There was an error processing</h1>';
            include 'includes/errormessage.php';
        }
        }
    //}
    
    ?>
 <center>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];?></h5>
        <!-- <h6 class="card-subtitle mb-2 text-muted"> -->
        <p class="card-text">
         Gender: <?php echo $_POST['gender']?>
         </p>
            <!-- </h6> -->
           
             <p class="card-text">
             Email Address: <?php echo $_POST['email']?>
             </p>
        <p class="card-text">
        Address: <?php echo $_POST['address']?>
        </p>   
    </div>
    </div>   
    </center>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>