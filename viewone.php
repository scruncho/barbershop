<?php
$title = 'View Record';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'database/conn.php';

//$results = $crud->getSpecialties();
//Get attendee by id
if (!isset($_GET['id'])) {
    //  $id = $_GET['id'];
    // echo "<h1 class='text-danger'>Please check details and try again</h1>";
    // $result = $crud->getAttendeeDetails($id);
    include 'includes/errormessage.php';
} else {
    // echo "<h1 class='text-danger'>Please check details and try again</h1>";
    $id = $_GET['id'];
    $result = $crud->getMember($id);


?>
    <center>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path']; ?>">
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $result['firstname'] . ' ' . $result['lastname']; ?></h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted"> -->
                <p class="card-text">
                    Gender: <?php echo $result['gender'] ?>
                </p>
                <!-- </h6> -->

                <p class="card-text">
                    Email Address: <?php echo $result['emailaddress'] ?>
                </p>
                <p class="card-text">
                    Address: <?php echo $result['address'] ?>
                </p>
            </div>
        </div>
        <br />
        <a href="viewmembers.php" class="btn btn-info">Back to List</a>
        <a href="update.php?id=<?php echo $result['members_id']  ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this  record?');" href="delete.php?id=<?php echo $result['members_id']  ?>" class="btn btn-danger">Delete</a>
    <?php } ?>
    </center>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>