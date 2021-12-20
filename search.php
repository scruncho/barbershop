<?php
$title = 'Search';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'database/conn.php';


$results = $crud->getMembers();


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Search Members Here</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" vlaue="<?php if (isset($_GET['search'])) {
                                                                                echo $_GET['search'];
                                                                            } ?>" class="form-control" placeholder="Search Member">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">

                <div class="card-body">
                    <table class="table table-bordered">

                        <tr>
                            <!-- <th>#</th> -->
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>

                        <?php
                        //development connection
                        // $con = mysqli_connect("localhost", "root", "", "barbershop_db");

                        //production connection
                          $con = mysqli_connect("remotemysql.com","21p0v5xYW8","$pass","21p0v5xYW8");

                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM members WHERE CONCAT(firstname,lastname,gender,emailaddress) LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $items) {
                        ?>
                                    <tr>

                                        <td><?php echo $items['firstname']  ?></td>
                                        <td><?php echo $items['lastname']  ?></td>
                                        <td><?php echo $items['gender']  ?></td>
                                        <td><?php echo $items['emailaddress']  ?></td>
                                        <td>
                                            <a href="viewone.php?id=<?php echo $items['members_id']  ?>" class="btn btn-primary">View</a>
                                            <a href="update.php?id=<?php echo $items['members_id']  ?>" class="btn btn-warning">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete this  record?');" href="delete.php?id=<?php echo $items['members_id']  ?>" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>

                                <?php

                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4">NO Record Found</td>
                                </tr>

                        <?php
                            }
                        }
                        ?>



                    </table>
                </div>

            </div>

        </div>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>