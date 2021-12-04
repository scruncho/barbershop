<?php
   
   //Development Database
   $host = 'localhost';
    $db = 'barbershop_db';
   $user = 'root';
   $pass = '';
   $charset= 'utf8mb4';
   
  
   //Remote Database
 //  $host = 'remotemysql.com';
 //  $db = 'UBkCp5OHLc';
 //   $user = 'UBkCp5OHLc';
  //  $pass = '5NKTx7VsYB';
   // $charset= 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
      //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      //  echo "<h1 class='text-success'>No Database Found</h1>";
        throw new PDOException($e->getMessage());
    }

     require_once 'crud.php';
    // require_once 'user.php';
     $crud = new crud($pdo);
    // $user = new user($pdo);

    // $user->insertUser("admin","password");
   
?>