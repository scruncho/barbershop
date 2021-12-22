<?php 
    $title = 'Registration';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 
?>
    <div class="container p-md-4">
    <center><img src="images/logo.png" style="width:150px;height:150px;"></center>
  <br>
    <!-- <center> -->
    <!-- <div class="card" style="width: 35rem;"> -->
    <!-- <div class="container">  -->
    <form method="post" action="submit.php" enctype="multipart/form-data">

    <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" autocomplete="off">
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
        
        <a href="index.php" class="btn btn-secondary my-2 text-light">Cancel</a> <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
<!-- </div> -->
<!-- </center> -->
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>