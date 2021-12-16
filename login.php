<?php 
    $title = 'User Authentication';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewmembers.php");
        }

    }
?>
<center><img src="images/logo.png" style="width:150px;height:150px;"></center>
<br>
<center>
<div class="card" style="width: 20rem;">
    
    <h5 class="bg-secondary text-light"><?php echo $title ?></h5>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><label for="username">Username: * </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
</table>
        <input type="submit" value="Login" class="btn btn-secondary"><br/>
        <br>
        <!-- <a href="#"> Forgot Password </a> -->
            
    </form>
</div>
</center>
    <?php require_once 'includes/footer.php'; ?>