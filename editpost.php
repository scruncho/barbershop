<?php 
        require_once 'database/conn.php'; 

if (isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['emailaddress'];
        $address = $_POST['address'];
     //   $avatar_path = $_POST['avatar_path'];

//image handling-------------------------------------------

$orig_file = $_FILES["avatar"]["tmp_name"];
$ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
$target_dir = 'uploads/';
// $destination = $target_dir . basename($_FILES["avatar"]["name"]);
$destination = "$target_dir$email.$ext";
move_uploaded_file($orig_file,$destination);


//image handling-------------------------------------------

    

        //call crud function
        $result = $crud->editMember($id, $fname, $lname, $gender, $email, $address, $destination);
        //Redirect to index.php
        if($result){
            header("Location: viewmembers.php");
        }
        else{
            echo 'error';
        }
    }
    else{

    }
