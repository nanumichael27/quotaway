<?php 
    session_start();
    $_SESSION['admin_id'] =  null;
    header('location: login.php');
?>