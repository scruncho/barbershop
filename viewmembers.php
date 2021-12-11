<?php 
    $title = 'Members';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 

    $results = $crud->getMembers();
?>
<table class="table">
    <tr>
        <!-- <th>#</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th> 
        <th>Actions</th>
        

    </tr>
<?php 
while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
        <!-- <td>/*<//?php echo $r['members_id']  ?>*/</td> --> 
        <td><?php echo $r['firstname']  ?></td>
        <td><?php echo $r['lastname']  ?></td>
        <td><?php echo $r['gender']  ?></td>
        <td>
            <a href="viewone.php?id=<?php echo $r['members_id']  ?>" class="btn btn-primary">View</a>
            <!-- <a href="edit.php?id=<?php echo $r['attendee_id']  ?>" class="btn btn-warning">Edit</a>
            <a onclick= "return confirm('Are you sure you want to delete this  record?');"
             href="delete.php?id=<?php echo $r['attendee_id']  ?>" class="btn btn-danger">Delete</a> --> -->
    </td>

    </tr>

<?php }?>


</table>


<?php require_once 'includes/footer.php'; ?>
    