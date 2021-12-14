<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 
?>
    
    <center><img src="images/logo.png" style="width:150px;height:150px;"></center>
    <h1 class="text-center" >REGISTER AND BECOME A MEMBER</h1>
    <div class="container p-5 my-5 border"> 
    <form method="post" action="submit.php" enctype="multipart/form-data">
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
       
        <div class="form-group">
            <label for="Email">Email address</label>
            <input required type="email" class="form-control" id="email" name="email"
             aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender"> 
            <!-- <select class="form-control" id="exampleFormControlSelect1"> -->
                <option>Male</option>
                <option>Female</option>
             </select>
        </div>

    
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address"
             aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <div class="custom-file">
         
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

        </div>
        
        <button type="submit" name="submit" class="btn btn-primary" class="btn-block" style="width:100%">Submit</button>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>