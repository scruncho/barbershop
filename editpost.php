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
   

        //call crud function
        $result = $crud->editMember($id, $fname, $lname, $gender, $email, $address);
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
