<?php 
    $title = 'Update';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 


  // $results = $crud->getMembers();

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $member = $crud->getMember($id);

    }
?>
    

    <center><img src="images/logo.png" style="width:150px;height:150px;"></center>
    <h1 class="text-center" >UPDATE RECORD</h1>

    <form method="post" action="editpost.php">

    <input type="hidden" name ="id" value="<?php echo $member['members_id']?>" />

    <div class="form-group">
            <label for="firstname">First Name</label>
            <!-- <input required type="text" class="form-control" id="firstname" name="firstname"> -->
            <input type="text" class="form-control" value="<?php echo $member['firstname']?>" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <!-- <input required type="text" class="form-control" id="lastname" name="lastname"> -->
            <input type="text" class="form-control" value="<?php echo $member['lastname']?>" id="lastname" name="lastname">
        </div>
       
        <div class="form-group">
            <label for="Email">Email address</label>
            <!-- <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"> -->
            <input type="text" class="form-control" value="<?php echo $member['emailaddress']?>" id="emailaddress" name="emailaddress">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <!-- <select class="form-control" id="gender" name="gender"> -->
            
                
            <!-- <select class="form-control" id="exampleFormControlSelect1"> -->
                
            <!-- <select class="form-control" id="gender" name="gender">  -->
         
            <select class="form-control" value="<?php echo $member['gender']?>" id="gender" name="gender">  
    
            
                    <option> Male</option>
                <option>Female</option>

             </select>
        </div>

    
        <div class="form-group">
            <label for="address">Address</label>
            <!-- <input type="text" class="form-control" id="address" name="address" aria-describedby="phoneHelp"> -->
            <input type="text" class="form-control" value="<?php echo $member['address']?>" id="address" name="address">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary" class="btn-block" style="width:100%">Save Changes</button>
</form>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>