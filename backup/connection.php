<?php
    session_start();
    error_reporting(1);

    // $db =  mysqli_connect($host,$username,$password,$dbname);
    try {
      $db = new mysqli('localhost','u748543024_mastercraft','r+3AdSDE@G3','u748543024_mastercraft');
      
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    $_SESSION['db_conn'] = $db;
?>