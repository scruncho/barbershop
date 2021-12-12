<?php 
    require_once 'database/conn.php'; 
    if (!$_GET['id']){
        include 'includes/errormessage.php';
        header("Location: viewmembers.php");

    }
    else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteMember($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewmembers.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>

