<?php
$title = 'Members';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'database/conn.php';

$results = $crud->getMembers();



?>
<div class="container">
<a href="search.php" class="btn btn-primary my-2 text-light">Search</a>
<table class="table table-bordered">
    <thead class="table-secondary">


        <tr>
            <!-- <th>#</th> -->
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Actions</th>


        </tr>
    </thead>
    <?php
    while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <!-- <td>/*<//?php echo $r['members_id']  ?>*/</td> -->
            <td><?php echo $r['firstname']  ?></td>
            <td><?php echo $r['lastname']  ?></td>
            <td><?php echo $r['gender']  ?></td>
            <td>
                <a href="viewone.php?id=<?php echo $r['members_id']  ?>" class="btn btn-primary">View</a>
                <a href="update.php?id=<?php echo $r['members_id']  ?>" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this  record?');" href="delete.php?id=<?php echo $r['members_id']  ?>" class="btn btn-danger">Delete</a>
            </td>

        </tr>

    <?php } ?>


</table>

    </div>
<?php require_once 'includes/footer.php'; ?>